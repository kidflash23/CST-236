<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'autoLoader.php';


$searchPhrase = $_GET['name'];

$bs = new ProductDataService();

$products = $bs->findByFirstName($searchPhrase)



?>

<h2>Search Results</h2>
<p>Here is the given search result from what was found for the given products.</p>


<?php
if ($products){
    //this is where the displayed search results are given.
    include ('_displayProductsResults.php');
    
    
}
else{
    echo "There was no record of that product here<br>";
}

?>