<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/modules/clients/ClientsController.php';

$klein = new \Klein\Klein();

$klein->respond('GET', '/', function () {
    return 'Hello World!';
});

$klein->respond('GET', '/clients', function ($request, $response, $service, $app) {
    $clients = new Clients();
    $data =  $clients->index();
     $service->render('modules/clients/views/index.php',array('title' => $data));
});

$klein->dispatch();