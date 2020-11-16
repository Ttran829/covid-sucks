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
    $session = $_SESSION['session_user_id'];

    $query = "DELETE FROM user WHERE user_id = '$session'";

    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $session);
    $statement->execute();      // runs query
    $statement->closeCursor();

    echo("<script>location.href = 'login.php';</script>");
}


?>
