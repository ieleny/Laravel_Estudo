<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\LoginModel;

class LoginController extends Controller
{

    /* RETORNA TODOS OS DADOS*/
    public function index()
    {
        $login = Login::all();
        return view('Login',['Login'=>$login]);

        //return "Olá Mundo";

    }

}
