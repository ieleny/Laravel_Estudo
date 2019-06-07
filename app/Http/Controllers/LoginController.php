<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\LoginModel;
use app\Http\Requests\LoginRequest;

class LoginController extends Controller
{

    /* RETORNA TODOS OS DADOS*/
    public function index()
    {
        $login = LoginModel::all();
        echo view('loginView',['Login'=>$login])->render();
    }

    public function create(LoginRequest $request)
    {   
        $input = $request->all();
        LoginModel::create($input);

        return $this->index();
    }

    public function delete($id)
    {
        LoginModel::find($id)->delete();
        return $this->index();
    }

    public function edit($id)
    {
        $login = LoginModel::find($id);
        return view('edit',compact('login'));
    }

    public function update(LoginRequest $request, $id)
    {
        LoginModel::find($id)->update($request->all());
        return $this->index();
    }


}
