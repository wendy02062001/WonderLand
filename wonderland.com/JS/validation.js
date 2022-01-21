function onReg() {
 var divReg = document.getElementById("registerForm");
 var divLogin = document.getElementById("loginForm");

 divReg.style.display = "block";
 divLogin.style.display = "none";
}

function onLog() {
    var divReg = document.getElementById("registerForm");
    var divLogin = document.getElementById("loginForm");
   
    divReg.style.display = "none";
    divLogin.style.display = "block";
}

function mustFill() {
    var pnoti = document.getElementById("pnoti");
    var job = document.getElementById("job");
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var otherGend = document.getElementById("other")
    if (regform.name.value == "" || regform.usernameReg.value == "" || regform.passwordReg.value == ""|| regform.email.value == "") {
        pnoti.style.display = "block";
        pnoti.style.background = "yellow";
        pnoti.innerHTML += "Please fill all required information" + "<br/>";
        if (regform.name.value == "") regform.name.style.border = "solid 1.5px red";
        if (regform.email.value == "") regform.email.style.border = "solid 1.5px red";
        if (regform.usernameReg.value == "") regform.usernameReg.style.border = "solid 1.5px red";
        if (regform.passwordReg.value == "") regform.passwordReg.style.border = "solid 1.5px red";
        return false;
    } else if (job.selectedIndex == 0) {
        pnoti.style.display = "block";
        pnoti.innerHTML += "Please select your job <br/>";
        return false;
    } else if (!male.checked && !female.checked && !otherGend.checked) {
        pnoti.style.display = "block";
        pnoti.innerHTML += "Please select your gender <br/>";
        return false;
    } else {
        pnoti.style.display = "none";
        pnoti.innerHTML = "";
        return true;
    }
}

function validEmail(idTag) {
    var input = document.getElementById(idTag);
    var pnoti = document.getElementById("pnoti");
    var email = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!input.value.match(email)) {
        pnoti.style.display = "block";
        pnoti.style.border = "solid 1.5px red";
        pnoti.innerHTML += "Unvalid Email Address <br/>";
        return false;
    } else {
        pnoti.style.display = "none";
        pnoti.innerHTML = "";
        return true;
    }
}

function regValidation(idTag) {
    return mustFill() && validEmail(idTag);
}

function logValidation() {
   if (logform.usernameLog.value == "" || logform.passwordLog.value == "") {
       if (logform.usernameLog.value == "") logform.usernameLog.style.border = "solid 1.5px red";
       if (logform.passwordLog.value == "") logform.passwordLog.style.border = "solid 1.5px red";
       pLogNoti.style.display = "block";
       pLogNoti.innerHTML += "Please fill all required information" + "<br/>";
       return false;
   } else {
       pLogNoti.style.display = "none";
       return true;
   }
}


