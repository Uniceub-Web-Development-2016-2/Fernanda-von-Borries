<?php
include('httpful.phar');
$get_request = 'http://localhost:8888/sisref/admin/search?name_admin="'.$_GET['search'].'"';
$response = \Httpful\Request::get($get_request)->send();
echo  $response->body;