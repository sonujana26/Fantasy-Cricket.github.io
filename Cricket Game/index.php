<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>my11</title>
        <link rel='stylesheet' type='text/css' href='homecss.css' >
        <script src="homescript.js"></script>
    </head>    
    <?php 
    session_start();
    if(isset($_SESSION['id']))
    {
    //echo "<script> alert('USER ALREADY LOGGED IN'); </script> ";
    header('Location: dash/index.php');
    }
    ?>

    
    <body>
    <div id="mainimg">
        <div id="logo">MY11</div>
        <input id="login" type="button" value="LOG IN" onclick="homelog()" style="width:auto">
        <input id="register" class="gobutton" type="button" value="Register & play" onclick="homereg()">
        <div id="head">PLAY FANTASY CRICKET.<br> WIN CASH DAILY!</div>
        <input id="gobut" class="gobutton" type="button" value="Let's Play" onclick="homelog()">
    </div>    
    <div class="howtoplay">
        <h1>How to Play</h1>
        <hr>
        <h3 class="sub">1.Select the match<br>2.Create you my11 team<br>3.Score points and win cool prizes</h3>
        <input id="gobut1" class="gobutton" type="button" value="Let's Play" onclick="homelog()">
    </div>

    <div id="homelogin" class="modal">
            <form class="modal-content animate" action="authenticate.php" method="post" name="login_form">
              <div class="closecontainer"> 
                <span onclick="closelog()" class="close" title="Close Modal">&times;</span>
              </div>
                <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                  
                <button type="submit" class="loginbutton" name="submit_login">Login</button>
                <br>
              </div>
          
              <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="clearlog()" class="cancelbtn">Cancel</button>
              </div>
            </form>
          </div>
          
          <div id="homereg" class="modal">
                <form class="modal-content animate" action="register.php" method="post" name="registration_form" onsubmit="return validateform()">
                <div class="closecontainer"> 
                      <span onclick="closereg()" class="close" title="Close Modal">&times;</span>
                    </div>
                  <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter username" name="uname" required>

                    <label for="text"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" required>
              
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    
                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
              
                    <div class="clearfix">
                      <button type="button" onclick="clearreg()" class="cancel2btn">Cancel</button>
                      <button type="submit" class="signupbtn" name="submit_register">Sign Up</button>
                    </div>
                  </div>
                </form>
              </div>

</body>    
</html>    
