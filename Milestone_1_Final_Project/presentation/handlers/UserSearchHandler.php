<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'autoLoader.php';


$searchPhrase = $_GET['name'];

$bs = new UserBusinessService();

$persons = $bs->findByFirstName($searchPhrase)



?>

<h2>Search Results</h2>
<p>Here is the given search result from what was found for the given search.</p>


<?php
if ($persons){
    include ('_displayUserSearchResults.php');
     
    
    
}
else{
    echo "There was no record of that user here<br>";
}

?>