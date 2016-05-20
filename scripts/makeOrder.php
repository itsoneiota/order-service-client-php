<?php
include __DIR__.'/../vendor/autoload.php';
use GuzzleHttp\Client;
use itsoneiota\orderservice\OrderServiceClient;
use itsoneiota\orderservice\Order;
use itsoneiota\orderservice\Channel;
use itsoneiota\orderservice\Customer;
use itsoneiota\orderservice\Address;

$gc = new Client([
    'base_uri' => 'http://commerce.mesh.mx.local:8081',
	'debug' => true
]);
$c = new OrderServiceClient($gc);
$o = new Order('ABC123');

$chan = new Channel(123);
$chan->name = "testName";
$chan->ip = "192.168.0.1";
$o->channel = $chan;

$cust = new Customer('XYZ987');
$cust->email = "testy@tester.com";
$cust->title = "Mr";
$cust->firstName = "testy";
$cust->lastName = "tester";
$cust->phone = "01111111111";
$cust->preferedContactMethod = "email";
$o->customer = $cust;

$ba = new Address();
$ba->title = "Mr";
$ba->firstName = "testy";
$ba->lastName = "tester";
$ba->address1 = "Bridge Innovation Centre";
$ba->address2 = "Pembrokeshire Science and Technology Park";
$ba->town = "Pembroke Dock";
$ba->locale = "gb";
$ba->phone = "01111111111";
$o->billingAddress = $ba;

//echo json_encode($o, JSON_PRETTY_PRINT) . PHP_EOL;

$c->createOrder($o);

