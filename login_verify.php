<?php
    session_start();
    include('login.php');
?>


<?php
    function validate($emailAttempt, $passwordAttempt)
    {
        require('covidsucks-connectdb.php');
        $query = "SELECT * FROM user";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closecursor();

        foreach ($results as $result)
        {
            if ($emailAttempt == $result['email'] && $passwordAttempt == $result['password']){
                $_SESSION['session_user_id'] = $result['user_id']; 
                $_SESSION['session_name'] = $result['name'];
                $_SESSION['session_covid_status'] = $result['covid_status'];
                $_SESSION['session_current_location_street'] = $result['current_location_street'];
                $_SESSION['session_current_location_city'] = $result['current_location_city'];
                $_SESSION['session_current_location_state'] = $result['current_location_state'];
                $_SESSION['session_current_location_zipcode'] = $result['current_location_zipcode'];
                $_SESSION['session_current_location_country'] = $result['current_location_country'];
                return true;
                }
        }
    }

?>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == "POST")
  {
    require('covidsucks-connectdb.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (validate($email, $password) == false)
    {
    echo "<script type='text/javascript'>
    alert('Error: That is not a valid username and password ')
    </script>";
    }

    else
    {
    //$_SESSION['session_name'] = $name;
    $_SESSION['session_email'] = $email;
    $_SESSION['session_password'] = $password;

    echo("<script>location.href = 'profile.php';</script>");
    }

  }
?>