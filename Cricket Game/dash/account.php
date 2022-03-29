<?php
include '../connect.php';
session_start();
if(!$_SESSION['uname']){
    echo "<script> alert('Please login first') </script>";
    header('Location: ../index.php');
}


?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css" >
    <script src="../homescript.js"></script>
</head>

<body>
<div class='container'>    
<div class='main'>
    <div class='tabs'>
        <a href="index.php">Home</a>
        <a href="play.php">PlayArea</a>
        <a href="account.php">Account</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class='accounts'>
        Edit your account: 
        <hr>
        <?php 
        $id=$_SESSION['id'];
        $q="SELECT * from users where id=$id";
        $res=mysqli_query($connect,$q);
        $row=mysqli_fetch_array($res);
        $name=$row['uname'];
        $email=$row['email'];

        ?>
        <div class='accountupdate'>
        <form action="update.php" method="post" name="registration_form" onsubmit="return validateform()">
                    <label for="uname"><b>Username:</b></label><br>
                    <input type="text" placeholder="<?php echo $name; ?>" name="uname" required>
                    <br>

                    <label for="text"><b>Email:</b></label><br>
                    <input type="email" placeholder="<?php echo $email; ?>" name="email" required>
                    <br>

                    <label for="psw"><b>Password:</b></label><br>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <br>

                    <label for="psw-repeat"><b>Repeat Password:</b></label><br>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                    <br>

                    <div class="clearfix">
                      <button type="submit" class="signupbtn" name="submit_register">Update</button>
                    </div>
                  </div>
                </form>    
    </div>
</div>
</div>
</body>
</html>