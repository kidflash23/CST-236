
<?php
session_start();

include 'header.php';
include 'autoLoader.php';
require_once 'securePage.php';


?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>

</head>
<body>

<div>

<form action="loginHandler.php" method="POST" style="width:500px; text-align:center; margin-left: 25%;" >

<h3>LOGIN</h3>

        <div class="form-group">
            <input name="username" type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me?</label>
        </div> 

</form>

</div>

</body>
</html>