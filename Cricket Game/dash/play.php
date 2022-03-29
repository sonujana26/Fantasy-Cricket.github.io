<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account
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
    <div class='playarea'>
        Current match :
        <?php
            $q="select * from matches where matchid=1";
            $result=mysqli_query($connect,$q);
            $row_users = mysqli_fetch_array($result);
        $_SESSION['matchid'] = $row_users['matchid'];
        $team1=$_SESSION['team1'] = $row_users['team1'];
        $team2=$_SESSION['team2'] = $row_users['team2'];
        $_SESSION['datetime'] = $row_users['datetime'];

        $userid=$_SESSION['id'];
        $q1="SELECT * from scorecard WHERE id='$userid'";
        $result1=mysqli_query($connect,$q1);
        $row_users1 = mysqli_fetch_array($result1);
        $_SESSION['points']=$row_users1['points'];

        
        echo $team1 ," vs ", $team2;
        echo "<br>";
        
        ?>
        <div class='time'>
            <br>
        Timings: 
        <p id='timer'></p></div>
        <hr class='sep1'>

        <div class='cont'>


        
        
        <div class='side1'>
        <form method='post' action='select.php'>
          
        <div class='bats'>
        <?php 
            $q1="select * from playingplayers where (ppcountry='$team1' && pptype='Batsman') || (ppcountry='$team2' && pptype='Batsman')";
            $result1=mysqli_query($connect,$q1);
            $no=1;
            echo "Playing Players:";
            echo "<br>";
            echo "Batsman:";
            echo "<table border='1' class='ptab'>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Country</th>
            <th class='checkbox-td'>Select</th>";
            echo "</tr>";
 
            while($row = mysqli_fetch_array($result1))
             {
                $id=$row['playid']; 
             echo "<tr>";
             echo "<td>" . $no++ . "</td>";
             echo "<td>" . $row['ppname'] . "</td>";
             echo "<td>" . $row['ppcountry'] . "</td>";
             echo "<td class='checkbox-td'>
                <input type='checkbox' name='bats[]' value='$id'> 
                </td>";
             echo "</tr>";
            }
            echo "</table>";
        ?>
        </div>
        <div class='wick'>
        <?php 
            $q1="select * from playingplayers where (ppcountry='$team1' && pptype='WKT Keeper') || (ppcountry='$team2' && pptype='WKT Keeper')";
            $result1=mysqli_query($connect,$q1);
            $no=1;
            echo "Wicket Keeper:";
            echo "<table border='1' class='ptab'>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Country</th>";
                echo "
            <th class='checkbox-td'>Select</th>";
            echo "</tr>";
 
            while($row = mysqli_fetch_array($result1))
             {
                $id=$row['playid']; 
             echo "<tr>";
             echo "<td>" . $no++ . "</td>";
             echo "<td>" . $row['ppname'] . "</td>";
             echo "<td>" . $row['ppcountry'] . "</td>";
             echo "<td class='checkbox-td'>
                <input type='checkbox' name='wick[]' value='$id'> 
                 </td>";
             echo "</tr>";
            }
            echo "</table>";
        ?>
        </div>
        <div class='allrounder'>
        <?php 
            $q1="select * from playingplayers where (ppcountry='$team1' && pptype='All Rounder') || (ppcountry='$team2' && pptype='All Rounder')";
            $result1=mysqli_query($connect,$q1);
            $no=1;
            echo "All Rounders:";
            echo "<table border='1' class='ptab'>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Country</th>";
                echo "
            <th class='checkbox-td'>Select</th>";
            echo "</tr>";
 
            while($row = mysqli_fetch_array($result1))
             {
                $id=$row['playid']; 
             echo "<tr>";
             echo "<td>" . $no++ . "</td>";
             echo "<td>" . $row['ppname'] . "</td>";
             echo "<td>" . $row['ppcountry'] . "</td>";
             echo "<td class='checkbox-td'>
                <input type='checkbox' name='alls[]' value='$id'> 
                 </td>";
             echo "</tr>";
            }
            echo "</table>";
        ?>
        </div>
        <div class='bowler'>
        <?php 
            $q1="select * from playingplayers where (ppcountry='$team1' && pptype='Bowler') || (ppcountry='$team2' && pptype='Bowler')";
            $result1=mysqli_query($connect,$q1);
            $no=1;
            echo "Bowler:";
            echo "<table border='1' class='ptab'>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Country</th>";
                echo "
            <th class='checkbox-td'>Select</th>";
            echo "</tr>";
 
            while($row = mysqli_fetch_array($result1))
             {
                $id=$row['playid']; 
             echo "<tr>";
             echo "<td>" . $no++ . "</td>";
             echo "<td>" . $row['ppname'] . "</td>";
             echo "<td>" . $row['ppcountry'] . "</td>";
             echo "<td class='checkbox-td'>
                <input type='checkbox' name='bowls[]' value='$id'> 
                 </td>";
             echo "</tr>";
            }
            echo "</table>";
            echo "<hr>"
        ?>
        </div>
        <input type='submit'  class='submit_but'>
        </form>     
        </div>
        
        <div class='side2'>
        <div class='your11'>
        <?php 

            $id=$_SESSION['id'];
            $sss="select * from scorecard where id='$id'";
            $res=mysqli_query($connect,$sss);
            $row1 = mysqli_fetch_array($res);
            $pp=$row1['selplay'];
            $ppp=explode(",",$pp);
            


            $q1="select * from playingplayers where playid in ('".implode("', '", $ppp)."' )";
            $result1=mysqli_query($connect,$q1);
            $no=1;
            $poin=0;
            echo "Your Fantasy team:";
            echo "<table border='1' class='ptab'>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Country</th>
            <th>Type</th>
            </tr>";
 
            while($row = mysqli_fetch_array($result1))
             {
             echo "<tr>";
             echo "<td>" . $no++ . "</td>";
             echo "<td>" . $row['ppname'] . "</td>";
             echo "<td>" . $row['ppcountry'] . "</td>";
             echo "<td>" . $row['pptype'] . "</td>";
             echo "</tr>";
             $_SESSION['points']=$poin += (int)$row['points'];
            }
            echo "</table>";
            
            $q2="select * from users where id='$id'";
            $result2=mysqli_query($connect,$q2);
            $row2 = mysqli_fetch_array($result2);

            $mainsco=(int)$row2['points']+$poin;

            $q3="UPDATE users SET points='$mainsco' WHERE id='$id'";
            mysqli_query($connect,$q3);


        ?>
        </div>
        
        <div class='usscore'>
        &emsp; <br>&emsp;Points earned:<h1 class='ptext'><?php echo $_SESSION['points']; ?></h1>
        </div>

        </div>

        </div>
    </div>    
    
</div>
</div>
</body>
<script>
    var countDownDate = new Date("<?php echo $_SESSION['datetime']; ?>").getTime();
// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element "
  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.querySelectorAll('.submit_but, .checkbox-td').forEach(element => {
        element.style.visibility = 'hidden';
    });
    document.getElementById("timer").innerHTML = "Started";
  }
}, 1000);


</script>    
</html>