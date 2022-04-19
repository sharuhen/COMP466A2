function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var pw1 = document.getElementById("pswd1").value;  
    var pw2 = document.getElementById("pswd2").value;  
    
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    //if email format match
    if (name == "") {
        alert("Please Enter Your name!");
        return false;
    } 
    else if (email == "") {
        alert("Please Enter Your Email Address!")
        return false;
    }
    else if (pw1 == "") {
        alert("Please Enter Your Password!")
        return false;
      }

    else if (pw2 == "") {
        alert("Please Enter Your Confirm Password!")
        return false;
      }

     else if (!email.match(mailformat)) {
       alert("Please Enter Your Email Address!")
       return true;
    }
     else if (pw1 !== pw2) {
        alert("Password do not match!")
        return false;

    }
   
     else{
        return true;
    }
}



