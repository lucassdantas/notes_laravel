<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
  public function login(){
      return view('login');
  }
  public function loginSubmit(Request $request){
    $request->validate(
    [
      'text_username' => 'required|email',
      'text_password' => 'required|min:6|max:16'
    ],
    [
      'text_username.required'=> 'O username é obrigatório',
      'text_username.email' => 'Username deve ser um email válido',
      'text_password.required' => 'password é obrigatórioa',
      'text_password.min' => 'Mínimo de :min caractéres',
      'text_password.max' => 'Máx de :max caractéres',
    ]
  );
    $username = $request->input('text_username');
    $password = $request->input('text_password');

    $user = User::where('username', $username)
                ->where('deleted_at', null)
                ->first();
    if(!$user){
      return redirect()->back()->withInput()->with('loginError', 'userName or password not found');
    }
    if(!password_verify($password, $user->password)){
      return redirect()->back()->withInput()->with('loginError', 'userName or password not found');
    }

    $user->last_login = date('Y-m-d H:i:s');
    $user->save();

    session([
      'user'=>[
        'id'=>$user->id,
        'username'=>$user->username
      ]
    ]);

    return redirect()->to('/');
  }


  public function logout(){
      session()->forget('user');
      return redirect()->to('/login')->with('logoutMessage', 'Deslogado com sucesso!');
  }
}
