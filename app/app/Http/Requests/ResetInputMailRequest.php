<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetInputMailRequest extends FormRequest
{
    /**
     * Determine if the users is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mail'=>['required', 'email:rfc,dns,filter', 'exists:users,mail']
        ];
    }

    /**
     * エラーメッセージ
     * @return array
     */
    public function messages(){
        return [
            'mail.required'=>"メールアドレスを入力してください",
            'mail.email'=>"メールアドレスの形式ではありません",
            'mail.exists'=>"登録しているメールアドレスを入力してください"
        ];
    }
}
