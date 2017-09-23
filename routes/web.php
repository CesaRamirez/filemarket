<?php

Auth::routes();

$router->get('/', 'HomeController@index')->name('home');
$router->middleware('auth')
       ->prefix('account')
       ->namespace('Account')
       ->group(function ($router) {
           $router->get('/', 'AccountController@index')->name('account');
       });
