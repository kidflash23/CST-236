
<?php
require_once 'autoLoader.php';
include ('ProductSearchHandler.php');


for ($r = 0; $r < count($products); $r++){
    
    echo "<tr>";
    
    echo "<td>" .$products[$r]['ID'] . "</td>";
    
    echo "<td>" .$products[$r]['PRODUCT_NAME'] . "</td>";
    
    echo "<td>" .$products[$r]['DESCRIPTION'] . "</td>";
    
    echo "<td>" .$products[$r]['PRICE'] . "</td>";
    

    
    
}
?>

<table id="products">
  <tr>
  <th>
  ID
</th>

<th>
Product Name
</th>

<th>
Description 
</th>

<th>
Price
</th>

  </tr>
</table>

