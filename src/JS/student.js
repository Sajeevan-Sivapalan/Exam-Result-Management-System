function studentFormValidation(thisform) {
  with (thisform) {
    if (indexNumberValidation(indexNumber) == false) {
      indexNumber.focus();
      return false;
    }
    if (nameValidation(name) == false) {
      name.focus();
      return false;
    }
    if (tamilValidation(tamil) == false) {
      tamil.focus();
      return false;
    }
    if (ITValidation(IT) == false) {
      IT.focus();
      return false;
    }
    if (historyValidation(history) == false) {
      history.focus();
      return false;
    }
    if (scienceValidation(science) == false) {
      science.focus();
      return false;
    }
    if (englishValidation(english) == false) {
      english.focus();
      return false;
    }
    if (mathsValidation(maths) == false) {
      maths.focus();
      return false;
    }
  }
}

function indexNumberValidation(indexNumber) {
  var errorMessage = document.getElementById("errormeg");
  with (document.studentDetails) {
    var indexNumberLength = indexNumber.value.length;
    if (indexNumber.value == "") {
      errorMessage.innerHTML = "Index number cannot be empty";
      return false;
    } else if (indexNumberLength != 5) {
      errorMessage.innerHTML = "Index number should be 5 digits";
      return false;
    } else if (isNaN(indexNumber.value)) {
      errorMessage.innerHTML = "Index number should be digits";
      return false;
    } else return true;
  }
}

function nameValidation(name) {
  var errorMessage = document.getElementById("errormeg");
  with (document.studentDetails) {
    if (name.value == "") {
      errorMessage.innerHTML = "Name cannot be empty";
      return false;
    } else return true;
  }
}

function tamilValidation(tamil) {
  var errorMessage = document.getElementById("errormeg");
  with (document.studentDetails) {
    if (tamil.value == "") {
      errorMessage.innerHTML = "tamil marks cannot be empty";
      return false;
    } else if (tamil.value > 100 || tamil.value < 0) {
      errorMessage.innerHTML = "tamil marks should be between 0 to 100";
      return false;
    } else if (isNaN(tamil.value)) {
      errorMessage.innerHTML = "tamil marks should be dights";
      return false;
    } else return true;
  }
}

function ITValidation(IT) {
  var errorMessage = document.getElementById("errormeg");
  with (document.studentDetails) {
    if (IT.value == "") {
      errorMessage.innerHTML = "IT marks cannot be empty";
      return false;
    } else if (IT.value > 100 || IT.value < 0) {
      errorMessage.innerHTML = "IT marks should be between 0 to 100";
      return false;
    } else if (isNaN(IT.value)) {
      errorMessage.innerHTML = "IT marks should be dights";
      return false;
    } else return true;
  }
}

function historyValidation(history) {
  var errorMessage = document.getElementById("errormeg");
  with (document.studentDetails) {
    if (history.value == "") {
      errorMessage.innerHTML = "history marks cannot be empty";
      return false;
    } else if (history.value > 100 || history.value < 0) {
      errorMessage.innerHTML = "history marks should be between 0 to 100";
      return false;
    } else if (isNaN(history.value)) {
      errorMessage.innerHTML = "history marks should be dights";
      return false;
    } else return true;
  }
}

function scienceValidation(science) {
  var errorMessage = document.getElementById("errormeg");
  with (document.studentDetails) {
    if (science.value == "") {
      errorMessage.innerHTML = "science marks cannot be empty";
      return false;
    } else if (science.value > 100 || science.value < 0) {
      errorMessage.innerHTML = "science marks should be between 0 to 100";
      return false;
    } else if (isNaN(science.value)) {
      errorMessage.innerHTML = "science marks should be dights";
      return false;
    } else return true;
  }
}

function englishValidation(english) {
  var errorMessage = document.getElementById("errormeg");
  with (document.studentDetails) {
    if (english.value == "") {
      errorMessage.innerHTML = "english marks cannot be empty";
      return false;
    } else if (english.value > 100 || english.value < 0) {
      errorMessage.innerHTML = "english marks should be between 0 to 100";
      return false;
    } else if (isNaN(english.value)) {
      errorMessage.innerHTML = "english marks should be dights";
      return false;
    } else return true;
  }
}

function mathsValidation(maths) {
  var errorMessage = document.getElementById("errormeg");
  with (document.studentDetails) {
    if (maths.value == "") {
      errorMessage.innerHTML = "maths marks cannot be empty";
      return false;
    } else if (maths.value > 100 || maths.value < 0) {
      errorMessage.innerHTML = "maths marks should be between 0 to 100";
      return false;
    } else if (isNaN(maths.value)) {
      errorMessage.innerHTML = "maths marks should be dights";
      return false;
    } else return true;
  }
}
