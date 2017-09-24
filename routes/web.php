<?php

Auth::routes();

$router->get('/', 'HomeController@index')->name('home');
$router->middleware('auth')
       ->prefix('account')
       ->namespace('Account')
       ->group(function ($router) {
           $router->get('/', 'AccountController@index')->name('account');

           $router->group(['prefix' => '/files'], function ($router) {
               $router->get('/create', 'FilesController@create')
                      ->name('account.files.create.start');
               $router->get('/{file}/create', 'FilesController@create')
                      ->name('account.files.create');
           });
       });
