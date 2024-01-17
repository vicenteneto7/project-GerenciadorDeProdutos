<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('produtos/listar', 'Produtos::listar');
$routes->post('produtos/cadastrar', 'Produtos::cadastrar');
