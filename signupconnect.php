<?php
require_once("connection.php");
?>

<?php
if(isset($_POST["signupbtn"])){



                  $firstname=$_POST['firstname'];
                  $lastname=$_POST['lastname'];
                  $email=$_POST["email"];
                  $pass=$_POST["password"];
                  $day=$_POST["day"];
                  $month=$_POST["month"];
                  $year=$_POST["year"];
                  $birthdate=$year."-".$month."-".$day;

              if(!empty($_POST['gender'])){
                  $gender=$_POST['gender'];
              }
     if(preg_match("/^[A-Z a-z]+$/",$firstname) and !empty($firstname and $lastname and $email and $pass and $day and $year and $month and !empty($gender))){




        $sql_e = "SELECT * FROM signup WHERE mobile_email='$email'";
  	$res_e = mysqli_query($connect, $sql_e);

  	if (mysqli_num_rows($res_e) > 0) {
  	      $name_error = "<p class='meow'>Email already Exist!</p>";
          echo $name_error;
  	}
         else{

           $sql= "insert into signup (first_name,last_name,mobile_email,password,birthdate,gender)
            VALUES ('$firstname','$lastname','$email','".md5($pass)."','$birthdate','$gender')";

            mysqli_query($connect, $sql);

              $last_id=mysqli_insert_id($connect);
  $info="select * from signup where id=$last_id";
  $records=mysqli_query($connect,$info);
  $count=mysqli_num_rows($records);

  if($count){
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


         }


                 }
                 elseif(!preg_match("/^[A-Z a-z]+$/",$firstname) or !preg_match("/^[A-Z a-z]+$/",$lastname)){
                     echo "<p class='meow'>Enter Valid Name</p>";
                 }
                 else{
                     echo "<p class='meow'>Please Fill out all required Fields</p>";
                 }


                 }


?>

<?php

require_once ('sign_up.php');


?>
