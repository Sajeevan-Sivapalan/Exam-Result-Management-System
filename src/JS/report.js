function reportFormValidation(thisform){
    with(thisform){
        if(indexNumberValidation(indexNumber) == false){
            indexNumber.focus();
            return false;
        }
        if(reportValidation(report) == false){
            report.focus();
            return false;
        }
    }
}

function indexNumberValidation(indexNumber){
    var errorMessage = document.getElementById("errormeg");
    with(document.reportForm){
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

function reportValidation(report){
    var errorMessage = document.getElementById("errormeg");
    with(document.reportForm){
        if(report.value == ""){
            errorMessage.innerHTML = "report cannot be empty";
            return false;
        }
        else
            return true;
    }
}