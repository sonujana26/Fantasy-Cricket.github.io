<?php
include 'connect.php';

//login
$uname=$_POST["uname"];
$password=$_POST["password"];

$sql_users= " select * from users  where uname = '$uname' && password = '$password' ";

$res_users = mysqli_query($connect, $sql_users);
if(mysqli_num_rows($res_users) != 1)
{
    echo "<script> alert('No user found with entered Username & password combination'); </script>";
    header("Refresh: 1; url=index.php");

}
else
{
    $row_users = mysqli_fetch_array($res_users);
    session_start();
    $_SESSION['id'] = $row_users['id'];
    $_SESSION['uname'] = $row_users['uname'];
    $_SESSION['email'] = $row_users['email'];
    $_SESSION['points'] = $row_users['points'];

    //ranking
    $q="SELECT * FROM users ORDER BY points DESC";
    $result = mysqli_query($connect,$q);         
    $rank=0;            
    while($row = mysqli_fetch_array($result))
    {
    ++$rank;    
    $id=$row['id'];
    $qy="UPDATE users SET rank='$rank' where id='$id'";
    mysqli_query($connect,$qy);
    }
    $_SESSION['rank'] = $row_users['rank'];

    header("Location: dash/index.php");

}


?>