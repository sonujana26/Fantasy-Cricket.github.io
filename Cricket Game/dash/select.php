<?php
include '../connect.php';

session_start();
$uid=$_SESSION['id'];

  $b = $_POST['bats'];
  $w = $_POST['wick'];
  $a = $_POST['alls'];
  $bo = $_POST['bowls'];

$total=array();
$total=array_merge($b,$a,$w,$bo);

$tot=implode(", ", $total);
$len=sizeof($total);
echo '<br>';
if($len<11){
    echo "Select 11 players";
    header("Refresh:1; url=play.php");
}
elseif($len>11){
    echo "Do not select more than  11 players";
    header("Refresh:1; url=play.php");
}
else{
    $q1="select * from scorecard where id='$uid'";
    $result=mysqli_query($connect,$q1);
    $num=mysqli_num_rows($result);
    if($num == 1){
        $q="UPDATE scorecard SET selplay='$tot' WHERE id='$uid'";
        if(mysqli_query($connect,$q)){
            echo "success";}
        header("Refresh:1; url=play.php");
      }
    else{
        $q="INSERT INTO scorecard (sid,id,matchid, selplay, points) VALUES(NULL,$uid,1,'$tot',0)";
        if(mysqli_query($connect,$q)){
            echo "success";}
        header("Refresh:1; url=play.php");
    }    
}
?>