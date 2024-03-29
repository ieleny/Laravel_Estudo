<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);


/* 
    DAR REQUIRE EM TODOS OS ARQUIVOS AUTOLOADS QUE SERÁ USADO NO PROJETO PARA 
    NÃO PRECISAR FICAR DANDO REQUIRE EM TODAS AS PAGINA 
*/

/*
    INICIAR O SERVIDOR
    php artisan serve
*/

/* 
    MODIFICAR TODOS OS NAMESPACES 
    php artisan app:name ieleny
*/

/* 
    CONFIGURANDO BANCO DE DADOS 
    app/config/database.php
*/

/* 
    CONFIGURANDO O EMAIL 
    app/config/mail.php
*/

/* 
    CONFIGURAÇÃO DO AMBIENTE
    
    APP_ENV=local               -- AMBIENTE ESTÁ SEDO EXECUTADA
    APP_DEBUG=true              -- SÓ FICA 'TRUE' EM MODO DESENVOLVIMENTO 
    APP_KEY=SomeRandomString    -- DEFINIR SUA APLICAÇÃO LARAVEL, COMO ÚNICA COMO CHAVE AUXILIAR 

*/

/* 

    ROTAS

    app/Http/routes.php

    //app/Http/routes.php
    Route::get('produtos', function() {
        return "Olá mundo";
    });

    Fazer com que encaminhem nossa requisição exatamente para uma determinada classe
    Route::get('produtos','ProdutosController@index');

    Estamos dizendo que quando recebermos uma request para a URI /produtos,
    com o método HTTP GET, executaremos o método index de nossa classe ProdutosController.

*/


/* 

    CRIAR MODEL

    php artisan make:model Produto -m

*/

/* 
    CRIAR CONTROLLER 

    php artisan make:controller Produto -m
*/

/* 

    MIGRATIONS 

    Responsavel por gerenciar cada mudança estrutural
    de nosso banco de dados, ou seja, para cada tabela, coluna, índice, criados em nosso banco de dados,
    podemos ter uma migration para realizar essa operação de forma automática

    QUANDO REALIZAR A ALTERAÇÃO FAZER A SEGUINTE ALTERAÇÃO

    php artisan migrate

    CRIAR UMA TABELA EM NOSSO BANCO DE DADOS PARA PODER GERENCIAR NOSSOAS MIGRATIONS

    migrate:install

    EXECUTA TODAS AS MIGRATIONS DISPONIVEIS NA APLICAÇÃO

    migrate

    ATUALIZAR O MIGRATE
    
    php artisan migrate:refresh


*/


/* 
    ACESSAR O TINKER 

    CONSOLE INTERATIVO

    php artisan tinker

    -- PASSAR O USE DOS NAMESPACES DE ACORDO COM A CLASSE
    use app\Http\Controllers

*/

/* 

    

*/