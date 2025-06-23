function login(){
    var user = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

    if(user=="faizal"&& pass=="12345"){
        window.location.assign("dashboard.php");
        alert("login sucessful");

    }
     else if(user=="shukry"&& pass=="12345"){
        window.location.assign("dashboard.php");
        alert("login sucessful");

    }
    else if(user=="mufeez"&& pass=="12345"){
        window.location.assign("dashboard.php");
        alert("login sucessful");

    }
    else if(user=="husny"&& pass=="12345"){
        window.location.assign("dashboard.php");
        alert("login sucessful");

    }
    else if(user=="afham"&& pass=="12345"){
        window.location.assign("dashboard.php");
        alert("login sucessful");

    }
    else if(user=="aadhil"&& pass=="12345"){
        window.location.assign("dashboard.php");
        alert("login sucessful");

    }

    else{
        alert("incorrect username or password");
    }
}