<?php
/**
 * Created by PhpStorm.
 * User: 1611267
 * Date: 10/10/2016
 * Time: 15:45
 */

include 'dbConnect.php';

// Create a SQL Query as a String
$sql_query = "SELECT * FROM marvelmovies";
// Execute the SQL Query
$result = $db->query($sql_query);

// Iterate over $result object, one $row at a time
// Use fetch_array() to return an asociative array
while($row = $result->fetch_array()) {
    echo "<p>".$row['superheroName']."</p>";
}



// Create a SQL Query as a String
$sql_query = "SELECT * FROM marvelmovies WHERE productionStudio LIKE 'Marvel Studios'";
// Execute the SQL Query
$result = $db->query($sql_query);

// Iterate over $result object, one $row at a time
// Use fetch_array() to return an asociative array
while($row = $result->fetch_array()) {
    echo "<p>".$row['title']."</p>";
}


// Create a SQL Query as a String
$sql_query = "SELECT * FROM marvelmovies WHERE yearReleased > 2010";
// Execute the SQL Query
$result = $db->query($sql_query);

// Iterate over $result object, one $row at a time
// Use fetch_array() to return an asociative array
while($row = $result->fetch_array()) {
    echo "<p>".$row['title']."</p>";
}


// Create a SQL Query as a String
$sql_query = "SELECT * FROM marvelmovies WHERE title LIKE '%X-Men%'";
// Execute the SQL Query
$result = $db->query($sql_query);

// Iterate over $result object, one $row at a time
// Use fetch_array() to return an asociative array
while($row = $result->fetch_array()) {
    echo "<p>".$row['title']."</p>";
}

$result->close();
$db->close();

?>