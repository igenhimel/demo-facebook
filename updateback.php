<?php

    $a=$_SESSION['id'];
?>

<?php

if(isset($_POST['updateprofile'])){


    $day=$_POST["day"];
                  $month=$_POST["month"];
                  $year=$_POST["year"];
                  $birthdate=$year."-".$month."-".$day;

    $sql= "update signup SET
    first_name='$_POST[firstname]',
    last_name='$_POST[lastname]',
    mobile_email='$_POST[email]',
    birthdate='$birthdate',
    gender='$_POST[gender]'


    where id ='$a'";

    $info=mysqli_query($connect,$sql);
    $newsql= "select * from signup where id ='$a'";
   $records=mysqli_query($connect,$newsql);
 $count=mysqli_num_rows($records);

  if($count==1){
  $m=mysqli_fetch_assoc($records);
      $_SESSION['id']=$m['id'];
      $_SESSION['first_name']=$m['first_name'];
      $_SESSION['last_name']=$m['last_name'];
      $_SESSION['email']=$m['mobile_email'];
      $_SESSION['birthdate']=$m['birthdate'];
      $_SESSION['password']=$m['password'];
      $_SESSION['gender']=$m['gender'];


      header('location:userpage.php');
    }

}


?>
