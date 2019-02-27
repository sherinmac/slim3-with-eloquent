<?php

require 'vendor/autoload.php';
include 'dbboot.php';

use User\Models\User;
use Illuminate\Database\Capsule\Manager as DB;


$app = new \Slim\App([
        'settings' => [
        'displayErrorDetails' => true,
        'debug'               => true,
        'whoops.editor'       => 'sublime',
    ]
]);


$app->get('/user', function ($request, $response, $args) {

    $_user = new User();
    $users = $_user->all();
    $payload = [];
    $payload['user']=$users;
    return $response->withStatus(200)->withJson($payload);
});



$app->post('/user', function($request,$response,$args) {
    $_user = new User();
    $user = $request->getParsedBodyParam('userinfo', '');
    $user_id=$_user :: insertGetId($user);
    $payload = [];
    $payload['user_id']=$user_id;
    $payload['message']="Insertion success";
    return $response->withStatus(200)->withJson($payload);
    
});


// Run app
$app->run();
