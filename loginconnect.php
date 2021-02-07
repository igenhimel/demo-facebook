<?php
require_once('connection.php');
require_once('header.php');
session_start();
?>


<?php
if(isset($_POST['login'])){

    $username=validate($_POST['username']);
    $password=validate($_POST['password']);

   if(empty($username) and empty ($password)){
        echo "<p class='response'>username and password must not be empty</p>";
    }
    else if(empty($password)){
        echo "<p class='response'>Password must not be empty</p>";
    }

   else if(empty($username)){
        echo "<p class='response'>username must not be empty</p>";
    }

    else{

        $loginsql= "SELECT * from signup where mobile_email='$username' and
                  password='".md5($password)."'";

      $records=mysqli_query($connect,$loginsql);

      if(mysqli_num_rows($records)){
      $m=mysqli_fetch_assoc($records);
           $_SESSION[id]=$m[id];
      $_SESSION['first_name']=$m['first_name'];
      $_SESSION['last_name']=$m['last_name'];
      $_SESSION['email']=$m['mobile_email'];
      $_SESSION['birthdate']=$m['birthdate'];
      $_SESSION['password']=$m['password'];
      $_SESSION['gender']=$m['gender'];


      header('location:userpage.php');

                  }
                  else{
                      echo "<p class='response'>Incorrect Password or username</p>";

                  }
          }



  }



  function validate($data){

         $data1=trim($data);
         $data2=stripcslashes($data1);
         $data3=htmlspecialchars($data2);
         return $data3;

          }

?>


















