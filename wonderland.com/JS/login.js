var regnameInput = document.getElementById("regname");
var nameInput = document.getElementById("username");
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var mail = document.getElementById("email-check");
var namenoti = document.getElementById("name-check");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

nameInput.onfocus = function() {
  document.getElementById("email-check").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
nameInput.onblur = function() {
  document.getElementById("email-check").style.display = "none";
}

regnameInput.onfocus = function() {
  document.getElementById("name-check").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
regnameInput.onblur = function() {
  document.getElementById("name-check").style.display = "none";
}


// When the user starts to type something inside the password field
function validation() {
  // Validate lowercase letters
  var x, y, z, t = false;
  
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.style.display = "none";
    x = true;
  } else {
    letter.style.display = "block";
    letter.style.color = "var(--orange)";
    x = false;
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.style.display = "none";
    y = true;
  } else {
    capital.style.display = "block";
    capital.style.color = "var(--orange)";
    y = false;
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.style.display = "none";
    z = true;
  } else {
    number.style.display = "block";
    number.style.color = "var(--orange)";
    z = false;
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.style.display = "none";
    t = true;
  } else {
    length.style.display = "block";
    length.style.color = "var(--orange)";
    t = false;
  }
  var noti = document.getElementById("message")
  if (x && y && z && t) {
    noti.style.display = "none";
    return true;
  }
  else {
      noti.style.display = "block";
      return false;
  }
}

function validEmail() {
  var email = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!nameInput.value.match(email) || nameInput.value == '') {
      mail.style.display = "block";
      mail.style.color = "var(--orange)";
      return false;
  } else {
      mail.style.display = "none";
      return true;
  }
}

function mustfill() {
  if (regform.Regname.value  == "") {
    namenoti.style.display = "block";
    namenoti.style.color = "var(--orange)";
    return false;
  } else {
    namenoti.style.display = "none";
    return true;
}
}

function checksubmit() {
  return mustfill() && validEmail() && validation();
}

(function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }
        return check;
    });


    $('.validate-form .input').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }    
    
})(jQuery);