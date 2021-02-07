<?php
require_once('connection.php');
require_once('userpageheader.php');
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
    <section class="sign_up">
    <div class="contain">
     <div class="account_right">
        <h2>Update Your Profile <?php echo $_SESSION['last_name']  ?></h2>
        <h4>Whenever you want</h4>
        <form action="<?php echo ($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <div class="fullnames">
            <div class="f_name">
                <input type="text" placeholder="First name" name="firstname" value="<?php echo $_SESSION['first_name'] ?>">
            </div>
            <div class="sur_name">
              <input type="text" placeholder="Surname" name="lastname" value="<?php echo $_SESSION['last_name'] ?>">

            </div>
        </div>
        <input type="text" placeholder="Mobile number or email address" name="email" value="<?php echo $_SESSION['email'] ?>" >



        <div class="birthday">
            <h4>Birthday</h4>
            <div class="birth-date">
                <select name="day">
                    <option value="Day">Day</option>
                    <option value="1">1</option>
                    <option value="2" selected>2</option>
                    <option value="3">3</option>

                </select>
                    <select name="month">
                    <option value="Month">Month</option>
                    <option value="Jan">Jan</option>
                    <option value="Feb" selected>Feb</option>
                    <option value="Mar">Mar</option>

                </select>
                        <select name="year">
                    <option value="Year">Year</option>
                    <option value="2020">2020</option>
                    <option value="2019" selected>2019</option>
                    <option value="2018">2018</option>

                </select>
            </div>


        </div>
<br>
        <div class="gender">
            <input id="female" type="radio" name="gender" value="Female">
            <label for="female">Female</label>
            <input id="male" type="radio"  name="gender" value="Male">
            <label for="male">Male</label>
        </div>
        <br>
        <br>

        <div class="button">
        <input type="submit" value="Update" name='updateprofile'>
        </div>



        </form>


     </div>
     </div >
 </section>

</body>
</html>




<?php

    require_once('updateback.php');


    ?>



<?php
    require_once('footer.php');

    ?>
