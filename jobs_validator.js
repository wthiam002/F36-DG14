function chkName(event) {
    
      var myName = event.currentTarget;
      // match any char set from a-z lower and upper and SPACE char, + match 1 or more of the preceding token
      var pos = myName.value.search(/^[A-Za-z ]+$/);
    
      if (pos != 0) {
        alert("The name you entered (" + myName.value + 
              ") is not in the correct form. \n" +
              "Name should contains alphabet characters and character spaces only.");
        myName.focus();
        myName.select();
        myName.value='';
        return false;
      } 
    }
    
function chkEmail(event) {

    var myEmail = event.currentTarget;
    // Matches any character not in the set containing <>..., + . + not in the set + '@' <.. + 0-9 char, 1-3 . repeat 3more times + a-zA-z at least 2 chars
    var pos = myEmail.value.search(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    
    if (pos != 0) {
        alert("The email you entered (" + myEmail.value +
                ") is not in the correct form. \n" +
                "Please enter a valid email address.");
        myEmail.focus();
        myEmail.select();
        myEmail.value='';
        return false;
    } 
}

function chkPhone(event) {

    var myPhone = event.currentTarget;
    // allow 0-9 and exactly 8 numbers
    var pos = myPhone.value.search(/^[0-9]{8}$/);
    
    if (pos != 0) {
        alert("The number you entered (" + myPhone.value +
                ") is not in the correct form. \n" +
                "Please enter a valid phone number.");
        myPhone.focus();
        myPhone.select();
        myPhone.value='';
        return false;
    } 
}

