<?php
if(isset($_POST['updateinfo'])){
    header('location:updateprofile.php');
}

?>
<?php
if(isset($_POST["logout"])){
    header('location:Facebook.php');
    session_destroy();
}

?>

<?php
if(isset($_POST["home"])){
    header('location:Facebook.php');

}

?>





