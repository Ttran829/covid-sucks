<?php 
  session_start(); 
  include('signup.php');
?>

<?php
    function checkEmail($entry)
    {
      require('covidsucks-connectdb.php');
      $query = "SELECT * FROM user";
      $statement = $db->prepare($query);
      $statement->execute();
      $results = $statement->fetchAll();
      $statement->closecursor();

      foreach ($results as $result)
      {
          if ($entry == $result['email']){
              return true;
              }
      }
    }

    function incrementCases($covid_status, $city)
    {
      require ('covidsucks-connectdb.php');
      if ($covid_status == 1) {
        $query = "UPDATE city SET total_cases = total_cases+1 WHERE name = $city";
        $statement = $db->prepare($query);
        $statement->execute();
        $statement->closecursor();
      }
    }

?>
<?php
  if ($_SERVER['REQUEST_METHOD'] == "POST")
  {
    require('covidsucks-connectdb.php');
    $name = $_POST['name'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $covid_status = $_POST['covid_status'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($covid_status == 1) {
      $query = "UPDATE city SET total_cases = total_cases+1 WHERE name = '$city'";
      $statement = $db->prepare($query);
      $statement->execute();
      $statement->closecursor();
      $query2 = "UPDATE country SET total_cases = total_cases+1 WHERE name = 'United States'";
      $statement2 = $db->prepare($query2);
      $statement2->execute();
      $statement2->closecursor();
    }
    
    if (checkEmail($email) == true)
    {
    echo "<script type='text/javascript'>
    alert('Error: There is already an account with that email address ')
    </script>";
    }

    else
    {
    $query = "INSERT INTO user (name, email, password, covid_status, current_location_street, current_location_city, current_location_state, current_location_zipcode) VALUES (:name, :email, :password, :covid_status, :current_location_street, :current_location_city, :current_location_state, :current_location_zipcode)";
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':covid_status', $covid_status);
    $statement->bindValue(':current_location_street', $street);
    $statement->bindValue(':current_location_city', $city);
    $statement->bindValue(':current_location_state', $state);
    $statement->bindValue(':current_location_zipcode', $zipcode);
    $statement->execute();
    $statement->closeCursor();

    $_SESSION['session_name'] = $name;
    $_SESSION['session_email'] = $email;
    $_SESSION['session_password'] = $password;

    echo("<script>location.href = 'signup_success.php';</script>");
    }

  }
?>