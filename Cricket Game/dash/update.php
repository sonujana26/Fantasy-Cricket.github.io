<?php 
include '../connect.php';

session_start();
$id=$_SESSION['id'];

$uname=$_POST["uname"];
$email=$_POST["email"];
$password=$_POST["password"];

$q="select * from users where uname='$uname' && email='$email'";

$result=mysqli_query($connect,$q);


$num=mysqli_num_rows($result);

if($num == 1){
  echo " Duplicate data";
  header("Refresh:1; url=account.php");
}
else{
    $q1="UPDATE users SET uname='$uname',email='$email',password='$password' WHERE id='$id'";
    
    if(mysqli_query($connect,$q1)){
        echo "success";}
    $_SESSION['uname']=$uname;
    header("Refresh:1; url=account.php");

}



?>