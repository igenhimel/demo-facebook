<?php
require_once('connection.php');

 $id= $_SESSION['id'];

 $sql= "select * from signup where id = $id";
 $record=mysqli_query($connect,$sql);
 $count= mysqli_num_rows($record);

 if($count>0){
     $m=mysqli_fetch_assoc($record);
     $firstname=$m['first_name'];
     $lastname=$m['last_name'];
 }




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">

</head>

<body>


    <section class="fbheader clearfix">
        <div class="firstitem">
            <div class="icon">
               <a href="Facebook.php">
                <span class="material-icons">
                    facebook
                </span>
                </a>
            </div>
            <div class="search-box">
                <form action="#" method="get" name="form" id="form">
                    <input class="search-text" type="text" placeholder="Search Facebook" name="search" required>
                    <button class="search-button" name="submit"><span class="material-icons">
                            search
                        </span></button>
                </form>
            </div>
        </div>
        <div class="navicon">

            <ul>
                <li><a href="#"><span class="material-icons">home</span></a></li>
                <li><a href="#"><span class="material-icons"> ondemand_video</span></a></li>
                <li><a href="#"><span class="material-icons">storefront</span></a></li>
                <li><a href="#"><span class="material-icons">group</span></a></li>
                <li><a href="#"><span class="material-icons">sports_esports</span></a></li>
            </ul>


        </div>



        <div class="profileicon">

            <img width="35px" src="https://www.pandasecurity.com/en/mediacenter/src/uploads/2013/11/pandasecurity-facebook-photo-privacy.jpg">
            <span style=""><?php echo $firstname." ".$lastname    ?></span>

        </div>
    </section>

    <section class="coverpart clearfix">
        <div class="container clearfix">
            <div class="coverphoto">
                <img class="img-fluid" src="https://coverfiles.alphacoders.com/903/90384.jpg">
                <button class="btn coverbtn"><span class="material-icons">
                        camera_alt</span>Edit Cover Photo</button>
                <div class="profilepic">
                    <img src="https://images.unsplash.com/photo-1555445091-5a8b655e8a4a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="dp">
                    <button class="btn pp"><span class="material-icons">
                            camera_alt</span></button>

                </div>
            </div>
            <div class="biodata clearfix">
                <h2 class="text-center"><?php echo $firstname." ".$lastname    ?>(Nick Name)</h2>
                <h6 class="text-center text-gray">About Yourself</h6>
                <div class="text-center">
                    <a href="">Edit</a>
                </div>

            </div>

            <div class="horizontalline">
                <hr>
                <ul>
                    <li class="mr-2 p-3 my-2"><a class="text-dark" href="#">Posts</a></li>
                    <li class="mr-2 p-3 my-2"><a class="text-dark" href="#">About</a></li>
                    <li class="mr-2 p-3 my-2"><a class="text-dark" href="#">Friends</a></li>
                    <li class="mr-2 p-3 my-2"><a class="text-dark" href="#">Photos</a></li>
                     </ul>
                        <div class="dropdown mr-0">
                       <button type="button" class=" text-dark btn dropdown-toggle m-0 p-0 more p-3" data-toggle="dropdown">More</button>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Story Archive</a>
                        <a class="dropdown-item" href="#">Videos</a>
                        <a class="dropdown-item" href="#">Check-in</a>
                    </div>
                    </div>

                     <button class="btn btn-secondary float-right mt-3 editprof">Edit Profile</button>




            </div>


        </div>
    </section>

    <section class="newsection">

    </section>
    <?php

      if(isset($_GET['submit'])){
          $name=$_GET['search'];
          header("location:test.php?search=$name");
      }

?>











    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>
