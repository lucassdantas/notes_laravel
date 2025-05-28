<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    echo 'ab';
  }
  public function logout(){
      echo 'logotu';
  }
}
