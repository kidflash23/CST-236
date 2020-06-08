<?php

require_once 'UserBusinessService.php';

//gets the search form from the business form.
$searchPattern = $_GET['name'];

//creates an instance of UserBusinessService. 
$bs = new UserBusinessService();

//the find method returns an array of persons.
$persons = $bs->findByFirstName($searchPattern); 
?>


 

<h2>Search Results</h2>
<p>Here is what we found!</p>


//display	
<?php
if ($persons) {
   include ('_displayUserSearchResults.php');
}
else{
    echo "Nobody was found!";
    
}

?>