<?php

namespace App\Http\Controllers;

use App\Models\Test02;
use Illuminate\Http\Request;

use
Illuminate\Support\Facades\DB;

class Test02Controller extends Controller
{
    public function index(){
        $test02 = Test02::all();
        // Test02テーブルから全件取得
        return view('index',['test02' => $test02]);
        // $name = DB::select('select * from test02');
        // $email = DB::select('select * from test02');
    }

    public function add(){
        return view('add');
    }

    public function create(Request $request){
        $test02 = [
            'name' => $request->name,
            'email' => $request->email
        ];
        DB::insert('insert into authors (name, age, nationality) values (:name, :age, :nationality)', $test02);
        return redirect('/thanks');
    }

    public function back(){
        return back() ->withInput();
    }

    public function thanks(){
        if(  'name' === '' &&  'email' === '' ){
            return 'お名前とメールアドレスを入力して下さい';
        }elseif( 'name' === ''){
            return 'お名前を入力して下さい';
        }elseif( 'email' === ''){
            return 'メールアドレスを入力して下さい';
        }else{
            return 'お問い合わせありがとうございます';
        }
    }
}
