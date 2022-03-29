<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css" >
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
<div class='container'>    
<div class='main'>
    <div class='tabs'>
        <a href="index.php">Home</a>
        <a href="play.php">PlayArea</a>
        <a href="account.php">Account</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class='head'>&ensp;Welcome , <?php echo $_SESSION['uname']; ?>!</div>
    <div class='points'>
    &emsp; <br>&emsp;Points earned:<h1 class='ptext'><?php
      $userid=$_SESSION['id'];
    $q1="SELECT * from users WHERE id='$userid'";
    $result1=mysqli_query($connect,$q1);
    $row_users1 = mysqli_fetch_array($result1);
    $_SESSION['points']=$row_users1['points'];
    echo $_SESSION['points'];
    ?></h1>
    </div>
    <div class='rank'>
    &emsp; <br>&emsp;Your rank:<h1 class='ptext'><?php echo $_SESSION['rank']; ?></h1>
    </div>
    <div class='leaderboard'>
        Leaderboard Top 10:
        <?php 
        $q="SELECT * FROM users ORDER BY points DESC";
        $result = mysqli_query($connect,$q);         
        $no=1;  
        echo "<table class='leadtable'>
        <tr>    
        <th>No</th>
        <th>Username</th>
        <th>Points</th>
        </tr>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['uname'] . "</td>";
            echo "<td>" . $row['points'] . "</td>";
            echo "</tr>";
            if($no>10){break;}
         }
        echo "</table>";
    ?>
    </div>
    <!--<div class='matchleaderboard'>
        Current match  Leaderboard Top 10:
        <?php 
        $q="SELECT * FROM scorecard";
        $result = mysqli_query($connect,$q);         
        $no=1;  
        echo "<table class='leadtable'>
        <tr>    
        <th>No</th>
        <th>User Id</th>
        <th>Points</th>
        </tr>";
        $q="SELECT * FROM scorecard";
        $result = mysqli_query($connect,$q);
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['points'] . "</td>";
            echo "</tr>";
            if($no>10){break;}
         }
        echo "</table>";
    ?>
    </div>-->    
</div>
</div>
</body>
</html>