<?php
require_once 'vendor/autoload.php';


use JsonRPC\Client;

// here set up balanced nginx
$client = new Client('http://web/');
$http = $client->getHttpClient()
       ->withDebug()
    // service set up here
       ->withHeaders(['Host: service']);

try {
    $result = $client->execute('addition', [3, 5]);
} catch (Exception $e) {
    // debug info is disgusting
    var_dump($e);
}
var_dump($result);