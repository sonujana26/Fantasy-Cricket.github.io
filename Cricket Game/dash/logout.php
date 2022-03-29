<html>
<head>
    <meta charset="utf-8">
    <title>Logout</title>
</head>
<?php
include '../connect.php';
session_start();
if(!$_SESSION['uname']){
    echo "<script> alert('Please login first') </script>";
    header('Location: ../index.php');
}
?>
<body>
<?php
include('index.php');
// remove all session variables
session_unset();
// destroy the session 
session_destroy();
// Redirect the user to login page after logout.
header('Location: ../index.php');
?>
</body>
</html>