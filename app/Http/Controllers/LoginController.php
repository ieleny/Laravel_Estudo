<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\LoginModel;

class LoginController extends Controller
{

    /* RETORNA TODOS OS DADOS*/
    public function __construct()
    {
        $login = LoginModel::all();
        echo view('loginView',['Login'=>$login])->render();
    }


}
