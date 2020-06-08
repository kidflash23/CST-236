
<?php
require_once 'autoLoader.php';

include ('UserSearchHandler.php');

for ($x = 0; $x < count($persons); $x++){
    
    echo "<tr>";
    
    echo "<td>" .$persons[$x]['ID'] . "</td>";

    echo "<td>" .$persons[$x]['FIRST_NAME'] . "</td>";
    
    echo "<td>" .$persons[$x]['LAST_NAME'] . "</td>";
    
    echo "<td>" .$persons[$x]['USERNAME'] . "</td>";
    
    echo "<td>" .$persons[$x]['ROLE'] . "</td>";
    
    echo "<td>" .$persons[$x]['PASSWORD'] . "</td>";
    
}
?>
<th>
 ID
</th>

<th>
First Name
</th>

<th>
 Last Name
</th>

<th>
 Username
</th>

<th>
 Role
</th>

<th>
 Password
</th>


