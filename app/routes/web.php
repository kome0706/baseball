<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DisplayController;

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

    

    Route::get('/',[DisplayController::class, 'index']);

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