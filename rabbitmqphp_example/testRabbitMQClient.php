#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
include("login.html");
include("garage.html");

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
if (isset($argv[1]))
{
  $msg = $argv[1];
}
else
{
  $msg = "";
}

$request = array();
$request['type'] = "Login";
$request['name'] = "username";
$request['password'] = "password";
$request['email'] = "email";
$request['make'] = "make";
$request['model'] = "model";
$request['year'] = "year";
$request['recall_info'] = "recall_info";
$request['message'] = $msg;
$response = $client->send_request($request);
//$response = $client->publish($request);

echo "client received response: ".PHP_EOL;
print_r($response);
echo "\n\n";

echo $argv[0]." END".PHP_EOL;

