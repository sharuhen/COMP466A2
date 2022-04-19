 function validateEmail() {
    var email = document.getElementById("email").value;

    var password = document.getElementById("password").value;
    
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    var pass =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,15}$/;

    //if email format match
    if (email == "") {
        alert("Please Enter Your Email Address!")
        return false;
    }

    else if (  password == "") {
        alert("Please Enter Your Password !")
        return false;
    }

     else if (email.match(mailformat)) {
        return true;

    } else if (password.match(pass)) {

        return true;
    }
     else {
        alert("You have entered an invalid email address! & Password!");
        return false;
    }
}
