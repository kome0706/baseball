<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class AdminController extends Controller
{
    public function Admin() {
        $post = new Post;
        $all = $post->all()->toArray();
        return view('admin',[
            'post'=>$all,
        ]);
    }

    public function PostDetail(int $postid){
        $post = new post;
        $posting = $post->find($postid);
        return view('admin_post_detail',[
            'posted'=>$posting,
        ]);
    }

    //投稿削除
    public function DelPost(int $id, Request $request) {
        $post = new Post;
        $record = $post->find($id);

        $record->title = $request->title;
        $record->stadium = $request->stadium;
        $record->date = $request->date;
        $record->image =$request->image;
        $record->thoughts = $request->thoughts;

        $record->delete();
        return redirect('/admin');
    }
}
