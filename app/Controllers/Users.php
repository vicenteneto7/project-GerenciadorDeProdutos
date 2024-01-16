<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function listar()
    {
        echo view('templates/header');
        echo view('usuarios/listar');
        echo view('templates/footer');      
    }
}
