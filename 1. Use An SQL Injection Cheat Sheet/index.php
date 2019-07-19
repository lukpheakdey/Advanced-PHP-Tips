<?php

// Initialize arrays for filtered and escaped data, respectively.
$clean = array();
$sql = array();

// Filter the name. (For simplicity, we require alphabetic names.)
if (ctype_alpha($_GET['name'])) {
    $clean['name'] = $_GET['name'];
} else {
    // The name is invalid. Do something here.
}

// Escape the name.
$sql['name'] = mysql_real_escape_string($clean['name']); 

// Construct the query.
$query = "SELECT *
          FROM   users
          WHERE  name = '{$sql['name']}'";


// Provide the query format.
// $query = $db->prepare('SELECT *
//                        FROM   users
//                        WHERE  name = :name');

// Provide the query data and execute the query.
// $query->execute(array('name' => $clean['name']));

?>