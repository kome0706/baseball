<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class DisplayController extends Controller
{
    public function index(){
        $post = new Post;
        $all = $post->all()->toArray();
        var_dump($all);
        return view('home', [
            'post'=>$all,
        ]);
    }

    public function PostDetail(int $postid){
        $post = new post;
        $posting = $post->find($postid);
        return view('post_detail',[
            'posted'=>$posting,
        ]);
    }

    public function SearchPost(Request $request) {
        $query = Post::query();

        $keyword = $request->input('keyword');
        //var_dump($keyword);
        if(!empty($keyword)){
            $query->where('title', 'LIKE', "%{$keyword}%")
            ->orWhere('stadium', 'LIKE', "%{$keyword}%");
        }
            $posts = $query->get();
        
        return view('search_post',[
            'posts'=>$posts,
        ]);
    }
}
