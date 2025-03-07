<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', [
            'except' => [
                'login', 
                'create', 
                'unauthorized'
            ]
        ]);
    }

    public function create(Request $request) {
        $array = ['error'=>''];

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $birthdate = $request->input('birthdate');

        if($name && $email && $password && $birthdate) {
            if(strtotime($birthdate) === false) {
                $array['error'] = 'Data de nascimento inválida!';
            }
        } else {
            $array['error'] = 'Não enviou todos os campos.';
        }

        return $array;
    }
}
