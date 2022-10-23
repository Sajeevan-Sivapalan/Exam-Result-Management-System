function LoginFormValidation(thisform){
    with(thisform){
        if(userNameValidation(userName) == false){
            userName.focus();
            return false;
        }
        if(passwordValidation(password) == false){
            password.focus();
            return false;
        }
    }
}

function userNameValidation(userName){
    var errorMessage = document.getElementById("errormeg");
    with(document.loginForm){
        if(userName.value == ""){
            errorMessage.innerHTML = "User name cannot be empty";
            return false;
        }
        else 
            return true;
    }
}

function passwordValidation(password){
    var errorMessage = document.getElementById("errormeg");
    with(document.loginForm){
        var passwordLength = (password.value).length;
        if(password.value == ""){
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