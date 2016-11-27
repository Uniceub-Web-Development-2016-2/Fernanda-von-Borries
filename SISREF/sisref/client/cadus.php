<?php
include('httpful.phar');
$json = json_encode($_POST);
$get_request = 'http://192.168.0.112/sisref/client/cadus';
$response = \Httpful\Request::post($get_request)
->sendsJson()
->body($json)->send();
echo  $response->body;