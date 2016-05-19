<?php
include __DIR__.'/../vendor/autoload.php';
use GuzzleHttp\Client;
use itsoneiota\orderservice\OrderServiceClient;
use itsoneiota\orderservice\Order;

$gc = new Client([
    'base_uri' => 'http://commerce.mesh.mx.local:8081',
	'debug' => true
]);
$c = new OrderServiceClient($gc);
$o = new Order('ABC123');

$c->createOrder($o);
