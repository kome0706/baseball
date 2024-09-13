<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class RegistrationController extends Controller
{
    //新規投稿
    public function NewPostsForm() {
        return view('post_form');
    }

    public function NewPosts(Request $request) {
        $post = new Post;

        $post->title = $request->title;
        $post->stadium = $request->stadium;
        $post->date = $request->date;
        $post->thoughts = $request->thoughts;
        
        $path = $request->file('image')->store('public/images/');
        $filename = basename($path);
        $post->image = $filename;
            
        $post->save();
        return redirect('/');
    }

    //画像編集
    public function EditImageForm(int $id) {
        $post = new Post;
        $result = $post->find($id);
        return view('edit_image',[
            'id'=>$id,
            'result'=>$result,
        ]);
    }

    public function EditImage(int $id, Request $request) {
        $post = new Post;
        $record = $post->find($id);
        $record->image = $request->image;

        $record->save();
        return redirect('/');
    }

    //投稿編集
    public function EditPostForm(int $id){
        $post = new Post;
        $result = $post->find($id);
        return view('edit_post',[
            'id'=>$id,
            'result'=>$result,
        ]);
    }

    public function EditPost(int $id, Request $request) {
        $post = new Post;
        $record = $post->find($id);

        $record->title = $request->title;
        $record->stadium = $request->stadium;
        $record->date = $request->date;
        $record->thoughts = $request->thoughts;

        $record->save();
        return redirect('/');
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
        return redirect('/');
    }
}
