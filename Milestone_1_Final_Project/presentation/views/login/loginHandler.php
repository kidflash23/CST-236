<?php

include_once '../header.php';
require_once '../../autoLoader.php';
require_once '../../securePage.php';



$nameAttempt = $_POST['username'];
$passwordAttempt = $_POST['password'];

$service = new SecurityService($nameAttempt, $passwordAttempt);
$status = $service->Authenticate();
//This is the given code logic in which we see if the login was correct for the given password and username

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