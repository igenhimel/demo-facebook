
<?php
session_start();
?>

<?php
$host="localhost";
$user="root";
$password="";
$databasename="facebook";

$connect=mysqli_connect($host,$user,$password);

$m=mysqli_select_db($connect,$databasename);

if($m){
    echo "";
}

else{
    echo "Not connected";
}







?>
