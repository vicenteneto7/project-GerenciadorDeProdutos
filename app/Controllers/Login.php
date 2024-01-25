<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        echo view('login/index');
    }
    public function autenticar()
    {
        $dados = $this->request->getVar();

        $login_model = new LoginModel();

        $login = $login_model->where('Usuario', $dados['Usuario'])->where('Senha', $dados['Senha'])->first();

        if(!empty($login))
        {
            return redirect()->to('produtos/listar');
        }
        return redirect()->to('/?alert=errorLogin');
    }
    public function telaDeCadastro()
    {
        echo view('cadastrar-usuario/index');
    }
    public function cadastrar()
    {
        $dados = $this->request->getVar(); //pega os dados do formulário

        $cadastrar_usuario = new LoginModel();

        $cadastrar_usuario->insert($dados);

        return redirect()->to('produtos/listar');
    }
}
