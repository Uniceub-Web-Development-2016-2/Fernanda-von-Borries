<?php
session_start();
include('httpful.phar');
if($_POST["cpf_admin"] != null && $_POST["password_admin"] != null){
	$login_array = array('cpf_admin' => $_POST["cpf_admin"], 'password_admin' =>$_POST["password_admin"]);
	$url = "http://localhost/sisref/admin/login";
	$body = json_encode($login_array);
	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();   
	
	$array = json_decode($response->body, true)[0];
	if(!empty($array) && $array["cpf_admin"] == $_POST["cpf_admin"] && $array["password_admin"] == $array["password_admin"]){
 		$_SESSION["cpf_admin"] = $array["cpf_admin"];
		header("Location: cadus.html");
	}
	else
		echo "Pode não mano veio!";
}
?>