<?php
require_once 'vendor/autoload.php';



use JsonRPC\Server;

$server = new Server();
$server->getProcedureHandler()
       ->withCallback('addition', function ($a, $b) {
           return $a + $b;
       })
       ->withCallback('random', function ($start, $end) {
           return mt_rand($start, $end);
       });


echo $server->execute();