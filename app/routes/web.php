<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DisplayController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('reset_pw/reset_pw_form');
});*/

Auth::routes();

   

Route::group([ 'middleware'=>'auth'], function() {
    

    //投稿画面
    Route::get('/',[DisplayController::class, 'index']);
       
    //投稿検索
    Route::get('/search_post', [DisplayController::class,'SearchPost'])->name('search.post');
    //投稿詳細
    Route::get('/post/{id}/detail', [DisplayController::class, 'PostDetail'])->name('post.detail');
    //画像変更画面
    Route::get('/edit_image/{id}', [RegistrationController::class, 'EditImageForm'])->name('edit.image');
    Route::post('/edit_image/{id}', [RegistrationController::class, 'EditImage']);
    //投稿編集画面
    Route::get('/edit_postform/{id}', [RegistrationController::class, 'EditPostForm'])->name('edit.post');
    Route::post('/edit_postform/{id}', [RegistrationController::class, 'EditPost']);
    //投稿削除
    Route::get('del_post/{id}', [RegistrationController::class, 'DelPost'])->name('del.post');
    //新規投稿画面
    Route::get('/posts',[RegistrationController::class, 'NewPostsForm'])->name('new.posts');
    Route::post('/posts',[RegistrationController::class, 'NewPosts']);
    
    //アカウント詳細
    Route::get('/accountdetail', [AccountController::class, 'AccountDetail'])->name('account.detail');
    //アカウント編集
    Route::get('/account_edit/{id}',[AccountController::class, 'AccountEditForm'])->name('account.edit');
    Route::post('/account_edit/{id}', [AccountController::class, 'AccountEdit']);
    //アカウント削除
    Route::get('/account_conf_del', [AccountController::class, 'AccountDelConf'])->name('account.del.conf');
    Route::get('/account_del/{id}', [AccountController::class, 'AccountDel'])->name('account.del');

    Route::post('/like/{postId}',[LikeController::class,'store']);
    Route::post('/unlike/{postId}',[LikeController::class,'destroy']);
    

});
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin-register');

//Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin-home');

Route::get('/post/{id}/detail', [AdminController::class, 'PostDetail'])->name('post.detail');
//投稿削除
Route::get('del_post/{id}', [AdminController::class, 'DelPost'])->name('del.post');


