function homeValidation(thisform){
    with(thisform){
        if(indexNumberValidation(indexNumber) == false){
            indexNumber.focus();
            return false;
        }
    }
}

function indexNumberValidation(indexNumber){
    var errorMessage = document.getElementById("errormeg");
    with(document.homeValidationForm){
        var indexNumberLength = (indexNumber.value).length;
        if(indexNumber.value == ""){
            errorMessage.innerHTML = "Index number cannot be empty";
            return false;
        }
        else
            if(indexNumberLength != 5){
                errorMessage.innerHTML = "Index number should be 5 digits";
                return false;
            }
            else
                if(isNaN(indexNumber.value)){
                    errorMessage.innerHTML = "Index number should be digits";
                    return false;
                }
                else
                    return true;
    }
}
