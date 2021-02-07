<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook - log in or sign up</title>
    <link rel="shortcut icon" type="image/x-icon" href="assest/fb-icon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Facebook.css">
      <link rel="stylesheet" href="responsive.css">

</head>

<body>
<!---Strat Header----->
   <?php
    require_once('loginconnect.php');

    ?>

  <!----end header---->


        <!----Start SignUp Area---->

   <?php
    require_once('signupconnect.php');

    ?>

 <!---End Sign Up------>


 <!---start footer--->

    <?php
    require_once('footer.php');

    ?>
</body>

</html>
