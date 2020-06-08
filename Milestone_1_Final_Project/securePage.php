<?php

include 'header.php';

if (isset($_SESSION['principal']) == false || $_SESSION['principal'] == false)
{
    header("Location: loginSuccess.php");
}
else {
    header("Location: loginFailed.php");
}

?>
