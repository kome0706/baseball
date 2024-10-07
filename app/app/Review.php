<?php

namespace App;
use App\Like;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /*public function likes()
    {
        return $this->hasMany('App\Like');
    }
    //後でViewで使う、いいねされているかを判定するメソッド。
    public function isLikedBy($user): bool {
        return Like::where('user_id', $user->id)->where('review_id', $this->id)->first() !==null;
    }*/
}
