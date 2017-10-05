<?php
require_once 'vendor/autoload.php';


use JsonRPC\Client;

$client = new Client('http://web/index.php');

$http = $client->getHttpClient()
       ->withDebug()
       ->withHeaders(['Host: service']);

try {
    $result = $client->execute('addition', [3, 5]);
} catch (Exception $e) {

    var_dump($e);
}
var_dump($result);