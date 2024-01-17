<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutosModel;

class Produtos extends BaseController
{
    public function listar()
    {
        $produtos_model = new ProdutosModel();

        $produtos = $produtos_model->findAll();

        $data['produtos'] = $produtos;

        echo view('templates/header');
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
}
