<?php
require_once("userpageheader.php");
require_once("logout.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="Facebook.css">
</head>
<body>


    <?php

if(isset($_SESSION['first_name'])){


echo "<h2 style='color:red'>";
echo "Welcome To Your Profile ".$_SESSION['first_name'];
echo "</h2> <br>";
?>



<div class="userprofile">
<?php

    echo "First Name: ".$_SESSION['first_name']."<br>";
echo "<br>Surname: ".$_SESSION['last_name']."<br>";



?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">  <input type="submit" value="Update" name="updateinfo">  </form>



<?php
}
    else{
        echo "<p class='meow'>You are not logged in<br>. Please Log in and try again</p>";



    ?>
     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="home">
         <input type="submit" value="Home" name="home">
         </div>


    <?php

    }
    ?>

</div>



</body>
</html>


<?php

require_once("footer.php");
?>
