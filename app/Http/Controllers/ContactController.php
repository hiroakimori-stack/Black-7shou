<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ContactController extends Controller
{
    //お問い合わせ内容入力フォーム
    public function contact() {
        $contacts = DB::select('select * from contacts');
        $data = ['contacts' => $contacts];
        return view('contact', $data);
    }

    //内容確認
    public function confirm(Request $request) {
        $data = $request->all();

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'tel' => 'required',
                'body' => 'required',
            ],
            [
                'name.required' => '氏名の入力必須項目です。',
                'email.required'  => 'メールアドレスの入力は必須項目です。',
                'email.email'  => 'メールアドレスは正しく入力してください。',
                'tel.required'  => 'お問い合わせ内容の入力は必須項目です。',
                'body.required'  => 'お問い合わせ内容の入力は必須項目です。',
            ]
        );

        return view('contact.confirm')->with($data);
    }

    //db作成
    public function create(Request $request) {
        $post = new Contact;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->tel = $request->tel;
        $post->body = $request->body;
        $post->created_at = Carbon::now();
        $post->save();

        //完了画面
        return view('contact.complete');
    }

}
