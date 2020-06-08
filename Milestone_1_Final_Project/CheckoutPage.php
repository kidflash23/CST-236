<?php 
require_once 'User.php';
require_once 'Orders.php';
require_once 'Checkout.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);?>
<html>
<body>
Welcome to the given  Checkout Page<br>

Information is being saved and now the orders are as well.


Your order is:


<?php 


$user = new User();

$user->setCreditCard($_POST['credit']);

$order = new Orders();

$order->displayOrder();


$check = new Checkout();
$check->displayCheckout();


$check->OrderTransaction();
$check->Banktransaction();




?>







</body>

</html>