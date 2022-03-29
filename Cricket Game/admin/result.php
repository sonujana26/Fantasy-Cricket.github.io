<?php
include '../connect.php';

$run=array('r1','r2','r3','r4','r5','r6','r7','r8','r9','r10','r11','r12','r13','r14','r15','r16','r17','r18','r19','r20','r21','r22');
$wick=array('w1','w2','w3','w4','w5','w6','w7','w8','w9','w10','w11','w12','w13','w14','w15','w16','w17','w18','w19','w20','w21','w22');

$runs=array();
$wicket=array();


for($i=0;$i<22;$i++){
    $ru=$run[$i];
    $wi=$wick[$i];
    $runs[$i]=$_POST[$ru];
    $wicket[$i]=$_POST[$wi];
}


$q="SELECT * FROM playingplayers";
$res=mysqli_query($connect,$q);

$o=0;
$id=1;
while($row = mysqli_fetch_array($res)){  
    $poi=(int)$runs[$o]+(int)$wicket[$o];
    $q1="UPDATE playingplayers SET runs='$runs[$o]',wickets='$wicket[$o]',points='$poi' WHERE ppid='$id'";
    if(mysqli_query($connect,$q1)){
        echo "success"; echo '<br>';}
    $o += 1;
    $id += 1;     
}
    

?>