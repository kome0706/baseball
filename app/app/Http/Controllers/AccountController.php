<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class AccountController extends Controller
{
    public function AccountDetail() {
        return view('account_detail');
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

    public function AccountDelConf() {
        return view('account_conf_del');
    }

    public function AccountDel(int $id) {
        $user=Auth::user()->find($id);
        var_dump($user);
        $user->delete();
        return redirect('/login');
    }
}
