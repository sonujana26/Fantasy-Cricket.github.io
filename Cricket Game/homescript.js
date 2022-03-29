//create login pop up window
function homelog(){
    document.getElementById('homelogin').style.display='block'
}

//create register pop up window
function homereg(){
    document.getElementById('homereg').style.display='block'
}

//close login window
function closelog(){
    document.getElementById('homelogin').style.display='none'
}

//close register window
function closereg(){
    document.getElementById('homereg').style.display='none'
}

//cancel login button
function clearlog(){
    document.getElementById('homelogin').style.display='none'
}

//cancel register button
function clearreg(){
    document.getElementById('homereg').style.display='none'
}


// When the user clicks anywhere outside of the modal, close it
var modal1 = document.getElementById('homelogin');
var modal2 = document.getElementById('homereg');
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

//form validation


function validateform(){
    var uname = document.forms["registration_form"]["uname"].value;
    var email = document.forms["registration_form"]["email"].value;
    var password = document.forms["registration_form"]["password"].value;
    var pasrepeat = document.forms["registration_form"]["psw-repeat"].value;
    
    
    uname = uname.trim();
    if (uname.length < 8) {
        alert("Username should contian 8 char");
        return false;
    }

    //password = password.trim();
    if (password.length < 8) {
        alert("password should contian 8 char");
        return false;
    }

    //pasrepeat = pasrepeat.trim();
    if(password != pasrepeat){
        alert("Both password does not match");
        return false;
    }


}



