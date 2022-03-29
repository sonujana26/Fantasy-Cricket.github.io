<?php 
include 'connect.php';


$uname=$_POST["uname"];
$email=$_POST["email"];
$password=$_POST["password"];

$q="select * from users where uname='$uname' && email='$email'";

$result=mysqli_query($connect,$q);


$num=mysqli_num_rows($result);

if($num == 1){
  echo " Duplicate data";
  header("Refresh:1; url=index.php");
}
else{
  //$qy="insert into users(id,uname,email,password) values (NULL,'$uname','$email','$password')";
  $qy="INSERT INTO users (id,uname, email, password,points,rank) VALUES(NULL,'$uname', '$email', '$password',0,0)";
  ///mysqli_query($connect,$qy);
  if(mysqli_query($connect,$qy)){
  echo "success";}
  header("Refresh:1; url=index.php");

}

?>