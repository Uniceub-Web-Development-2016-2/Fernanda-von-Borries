<?php
include('/opt/lampp/htdocs/sisref/request_controller.php');
$controller = new RequestController();
echo json_encode($controller->execute());
