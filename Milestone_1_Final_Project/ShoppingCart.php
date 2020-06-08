<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<html>
<body>
Welcome to the Shopping caet menu:<br>
<form action="CheckOutPage.php" method="post">



Payment Information:<br>
Credit Card #: <input type="text" name="credit"><br> 

<input type = "submit"><br>


Your Cart:<br>
<?php 
require_once 'Orders.php';


$order = new Orders();

$order->placeOrder($_POST['Ray was able to place a shopping cart item of'], '$100.00', $_POST['quantity']);
$order->displayOrder1();
?>






</form>

</body>
</html>