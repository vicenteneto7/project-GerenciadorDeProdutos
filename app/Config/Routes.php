<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('login/autenticar', 'Login::autenticar');
$routes->get('/cadastrar-usuario', 'Login::telaDeCadastro');
$routes->post('/usuario-cadastrado', 'Login::cadastrar');
$routes->get('produtos/listar', 'Produtos::listar');
$routes->post('produtos/cadastrar', 'Produtos::cadastrar');
$routes->get('produtos/excluir/(:num)', 'Produtos::excluir/$1');
$routes->post('produtos/editar', 'Produtos::editar');

$routes->get('produtos/search', 'Produtos::listarSearch');

$routes->get('/', 'Login::logout');
