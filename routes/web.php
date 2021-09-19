<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/', [
    'uses' => 'SendSMSController@index',
    'as' =>'index'
]);

$router->post('send-sms', [
    'uses' => 'SendSMSController@send_sms',
    'as' =>'send_sms'
]);
