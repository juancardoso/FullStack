<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('/login', 'Login::Logar');
$routes->get('/Logout', 'Login::Deslogar');
$routes->get('Cadastro', 'Cadastro::index');
$routes->post('Cadastro/Cadastrar', 'Cadastro::Cadastrar');
$routes->get('Home', 'Home::index',['filter' => 'AuthFilter']);
$routes->post('/Aula/assistir','Aula::assistir');
$routes->post('/Aula/aulasAssistidas','Aula::aulasAssistidas');
$routes->get('/Aula/aulasMaisAssistidas','AulasMaisAssistidas::index');
$routes->get('/Aula/aulasMaisAssistidas/buscar','AulasMaisAssistidas::buscar');
$routes->get('Pagamento', 'Pagamento::index', ['filter' => 'AuthFilter']);
$routes->get('Support', 'Support::index', ['filter' => 'AuthFilter']);
