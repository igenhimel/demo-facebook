<?php
session_start();
require_once('logout.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="Facebook.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
     <header class="header">
          <div class="containeruser">
              <div class="logouser">
                  <img src="assest/logo.png">
              </div>
              <div class="login_area">
                  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                     <?php
                      if(isset($_SESSION['first_name'])){


                      ?>
                      <div class="logout">
                          <input type="submit" value="Logout" name="logout">

                      </div>


                      <?php
                      }
                      else{
                          echo "";
                      }


                          ?>
                  </form>
              </div>
          </div>
      </header>

</form>



</body>
</html>



































