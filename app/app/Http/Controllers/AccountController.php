<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class AccountController extends Controller
{
    public function AccountDetail() {
        $post = Auth::user()->post()->get();
        var_dump($post);
        return view('account_detail',[
            'post'=>$post,
        ]);
    }

    public function AccountEditForm() {
        return view('edit_account');
    }

    public function AccountEdit(Request $request) {
        $user->Auth::user()->get();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();
        return redirect('/');
    }
}
