<?php

namespace App\Repositories\Interfaces;

use App\User;
use App\Http\Controllers\ResetPWControllers;

interface UserRepositoryInterface{
    
    /**
     * メールアドレスからユーザー情報を取得
     *
     * @param string $mail
     * @return Users
     */
    public function findFromMail(string $mail): User;

    /**
     * パスワードリセット用トークンを発行
     *
     * @param int $userId
     * @return Users
     */
    public function updateOrCreateUser(int $userId): User;

    /**
     * トークンからユーザー情報を取得
     * @param string $token
     * @return Users
     */
    public function getUserTokenFromUser(string $token): User;

    /**
     * パスワード更新
     *
     * @param string $password
     * @param int $id
     * @return void
     */
    public function updateUserPassword(string $password, int $id): void;
}
