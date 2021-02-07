<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
       <meta name="viewport" content="width=device-width , intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Facebook.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <section class="sign_up">
    <div class="contain">
     <div class="image_left">
        <p>Facebook helps you connect and share with the people in your life.</p>
        <img src="assest/newtwork.png" alt="network">


     </div>
     <div class="account_right">
        <h2>Create an account</h2>
        <h4>It's free and always will be</h4>
        <form action="<?php echo ($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <div class="fullnames">
            <div class="f_name">
                <input type="text" placeholder="First name" name="firstname">
            </div>
            <div class="sur_name">
              <input type="text" placeholder="Surname" name="lastname">

            </div>
        </div>
        <input type="text" placeholder="Mobile number or email address" name="email">
        <input type="password" placeholder="New Password" name="password">


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
            <div class="birth-link">
                <a href="#"> Why do I need to provide my date of birth?
                </a>
            </div>


        </div>

        <div class="gender">
            <input id="female" type="radio" name="gender" value="Female">
            <label for="female">Female</label>
            <input id="male" type="radio"  name="gender" value="Male">
            <label for="male">Male</label>
        </div>
        <br>
        <div class="textbox">
            <p>By clicking Sign Up, you agree to our <a href="#">Terms</a>, <a href="#">Data Policy</a> and <a href="#">Cookie Policy</a>. You may receive SMS notifications from us and can opt at any time.</p>
        </div>

        <div class="button">
        <input type="submit" value="Sign Up" name='signupbtn'>
        </div>



        </form>
        <span class="page"><a href="#">Create a Page</a> for a celebrity, band or business</span>

     </div>
     </div >
 </section>

</body>
</html>
