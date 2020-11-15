<?php 
session_start();
if (!isset($_SESSION['session_user_id'])) {
    echo "<script>location.href = 'login.php';</script>";
}
include('edit.php');
?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    require('covidsucks-connectdb.php');
    $covid_status = $_POST['covid_status'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $country = $_POST['country'];

    $query = "UPDATE user SET covid_status='$covid_status' current_location_street='$street' current_location_city='$city'
                    current_location_state='$state' current_location_zipcode='$zipcode' current_location_country='$country'";
    $statement = $db->prepare($query);
    $statement->bindValue(':covid_status', $covid_status);
    $statement->bindValue(':current_location_street', $street);
    $statement->bindValue(':current_location_city', $city);
    $statement->bindValue(':current_location_state', $state);
    $statement->bindValue(':current_location_zipcode', $zipcode);
    $statement->bindValue(':current_location_country', $country);
    $statement->execute();
    $statement->closeCursor();

    echo("<script>location.href = 'profile.php';</script>");
}


?>
