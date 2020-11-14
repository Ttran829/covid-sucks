<?php 

// CREATE TABLE friends (
//    name varchar(30) NOT NULL,
//    major varchar(10) NOT NULL,
//    year int NOT NULL,
//    PRIMARY KEY (name) );  

// Prepared statement (or parameterized statement) happens in 2 phases:
//   1. prepare() sends a template to the server, the server analyzes the syntax
//                and initialize the internal structure.
//   2. bind value (if applicable) and execute
//      bindValue() fills in the template (~fill in the blanks.
//                For example, bindValue(':name', $name);
//                the server will locate the missing part signified by a colon
//                (in this example, :name) in the template
//                and replaces it with the actual value from $name.
//                Thus, be sure to match the name; a mismatch is ignored.
//      execute() actually executes the SQL statement


/*function getAllFriends()
{
    global $db;
    
    $query = "SELECT * FROM friends";
    $statement = $db->prepare($query);
    $statement->execute();

    $results = $statement->fetchAll();   // returns an array of all rows

    $statement->closeCursor();

    return $results;
	
}

function addFriend($name, $major, $year)
{
    global $db;

    $query = "INSERT INTO friends VALUES(:name, :major, :year)";
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
	$statement->bindValue(':major', $major);
    $statement->bindValue(':year', $year);
    $statement->execute();      // runs query
    $statement->closeCursor();  // release hold on this connection
}
   
function getFriendInfo_by_name($name)
{
    global $db;
    
    $query = "SELECT * FROM friends WHERE name = :name";
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();

    $results = $statement->fetchAll();

    $statement->closeCursor();

    return $results;
	
}*/

function updateUser($covid_status, $current_location_street, $current_location_city, $current_location_state, $current_location_zipcode)
{
    global $db;

    $query = "UPDATE user SET covid_status='$covid_status' current_location_street='$current_location_street' current_location_city='$current_location_city'
                 current_location_state='$current_location_state' current_location_zipcode='$current_location_zipcode'";
    $statement = $db->prepare($query);
    $statement->bindValue(':covid_status', $covid_status);
    $statement->bindValue(':current_location_street', $current_location_street);
    $statement->bindValue(':current_location_city', $current_location_city);
    $statement->bindValue(':current_location_state', $current_location_state);
    $statement->bindValue(':current_location_zipcode', $current_location_zipcode);
    $statement->execute();
    $statement->closeCursor();
	
}

/*function deleteFriend($name)
{
    global $db;
    $query = "DELETE FROM friends WHERE name=:name";
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();      // runs query
    $statement->closeCursor();  // release hold on this connection
} */
?>
