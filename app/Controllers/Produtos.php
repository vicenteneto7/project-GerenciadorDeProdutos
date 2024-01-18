<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use App\Models\ProdutosModel;

class Produtos extends BaseController
{
    public function listar()
    {

        $login_model = new LoginModel();

        $login = $login_model->findAll();

        $data1['login'] = $login;    
        

        $produtos_model = new ProdutosModel();

        $produtos = $produtos_model->findAll();

        $data['produtos'] = $produtos;

        echo view('templates/header', $data1);
        echo view('produtos/listar', $data);
        echo view('templates/footer');      
    }

    public function cadastrar()
    {
        $dados = $this->request->getVar(); //pega os dados do formulário

        $produtos_model = new ProdutosModel();

        $produtos_model->insert($dados);

        return redirect()->to('produtos/listar?alert=sucessCreate');
    }

    public function excluir($ProdutoId)
    {
        $produtos_model = new ProdutosModel();

        $produtos_model->where('ProdutoId', $ProdutoId)->delete();

        return redirect()->to('produtos/listar?alert=sucessDelete');
    }

    public function editar()
    {
        $dados = $this->request->getVar(); 

        $produtos_model = new ProdutosModel();

        $produtos_model->where('ProdutoId', $dados['ProdutoId'])->set($dados)->update();

        return redirect()->to('produtos/listar?alert=sucessEdit');
    }
}
