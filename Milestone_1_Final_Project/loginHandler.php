<?php

include_once '../header.php';
require_once 'autoLoader.php';
require_once '../../securePage.php';



$nameAttempt = $_POST['username'];
$passwordAttempt = $_POST['password'];

$service = new SecurityService($nameAttempt, $passwordAttempt);
$status = $service->Authenticate();

if ($status == true)
{
    include "loginSuccess.php";
    $_SESSION['principal'] = true;
}
else
{
    include "loginFailed.php";
    $_SESSION['principal'] = false;
        
}

?>