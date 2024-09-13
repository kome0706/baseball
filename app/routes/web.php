<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DisplayController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AccountController;

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

Route::group(['middleware'=>'auth'], function() {

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
    Route::get('/account_edit',[AccountController::class, 'AccountEditForm'])->name('account.edit');
    Route::post('/account_edit', [AccountController::class, 'AccountEdit']);


});
Route::prefix('reset')->group(function () {
    // パスワード再設定用のメール送信フォーム
    Route::get('/pw', 'ResetPWControllers@requestResetPassword')->name('reset.form');
    // メール送信処理
    Route::post('/send', 'ResetPWControllers@sendResetPasswordMail')->name('reset.send');
    // メール送信完了
    Route::get('/send/complete', 'ResetPWControllers@sendCompleteResetPasswordMail')->name('reset.send.complete');
    // パスワード再設定
    Route::get('/password/edit', 'ResetPWControllers@resetPassword')->name('reset.password.edit');
    // パスワード更新
    Route::post('/password/update', 'ResetPWControllers@updatePassword')->name('reset.password.update');
});