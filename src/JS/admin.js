function adminValidation(thisform){
    with(thisform){
        if(fnameValidation(fname) == false){
            fname.focus();
            return false;
        }
        if(lnameValidation(lname) == false){
            lname.focus();
            return false;            
        }
        if(userNameValidation(userName) == false){
            userName.focus();
            return false;            
        }
        if(passValidation(pass) == false){
            pass.focus();
            return false;            
        }
        if(repasswordValidation(repassword) == false){
            repassword.focus();
            return false;            
        }
    }
}

function fnameValidation(fname){
    var errorMessage = document.getElementById("errormeg");
    with(document.adminDetails){
        if(fname.value == ""){
            errorMessage.innerHTML = "first name cannot be empty";
            return false;
        }
    }
}

function lnameValidation(lname){
    var errorMessage = document.getElementById("errormeg");
    with(document.adminDetails){
        if(lname.value == ""){
            errorMessage.innerHTML = "last name cannot be empty";
            return false;
        }
        else
            return true;
    }
}

function userNameValidation(userName){
    var errorMessage = document.getElementById("errormeg");
    with(document.adminDetails){
        if(userName.value == ""){
            errorMessage.innerHTML = "user Name cannot be empty";
            return false;            
        }
        else
            return true;
    }
}

function passValidation(pass){
    var errorMessage = document.getElementById("errormeg");
    with(document.adminDetails){
        var passwordLength = (pass.value).length;
        if(pass.value == ""){
            errorMessage.innerHTML = "password cannot be empty";
            return false;      
        }
        else
            if(passwordLength < 10 || passwordLength >20){
                errorMessage.innerHTML = "password length should be between 10 to 20";
                return false;
            }
            else
                return true;
    }
}

function repasswordValidation(repassword){
    var errorMessage = document.getElementById("errormeg");
    with(document.adminDetails){
        if(repassword.value == ""){
            errorMessage.innerHTML = "re password cannot be empty";
            return false;            
        }
        else 
            if(pass.value != repassword.value){
                errorMessage.innerHTML = "password miss matched";
                return false;   
            }
            else 
                return true;
    }
}
