<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('produtos/listar', 'Produtos::listar');
$routes->post('produtos/cadastrar', 'Produtos::cadastrar');
$routes->get('produtos/excluir/(:num)', 'Produtos::excluir/$1');
$routes->post('produtos/editar', 'Produtos::editar');
