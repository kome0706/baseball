<?php

namespace App\Repositories\Eloquents;

use App\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class UserRepository implements UserRepositoryInterface
{
    private $user;
    private $userToken;

    /**
     * constructor
     *
     * @param Users $user
     */
    public function __construct(User $user, User $userToken)
    {
        $this->users = $user;
        $this->usersToken = $userToken;
    }

    // メールアドレスからユーザー情報取得
    public function findFromMail(string $mail): User
    {
        return $this->users->where('mail', $mail)->firstOrFail();
    }

    // パスワードリセット用トークンを発行
    public function updateOrCreateUser(int $userId): User
    {
        $now = Carbon::now();
        // $userIdをハッシュ化
        $hashedToken = hash('sha256', $userId);
        return $this->usersToken->updateOrCreate(
            [
                'id' => $userId,
            ],
            [
            // $hashedTokenを含むトークンを作成
            'rest_password_access_key' => uniqid(rand(), $hashedToken),
            // トークンの有効期限を現在から24時間後に設定
            'rest_password_expire_data' => $now->addHours(24)->toDateTimeString()
            ]);
    }

    // トークンからユーザー情報を取得
    public function getUserTokenFromUser(string $token): User
    {
        return $this->userToken->where('rest_password_access_key', $token)->firstOrFail();
    }

    // パスワード更新
    public function updateUserPassword(string $password, int $id): void
    {
        $this->users->where('id', $id)->update(['password' => $password]);
    }
}
