function validate(){
    var elementList = document.getElementsByClassName("inputs-field");
    for(var i = 0; i<elementList.length; i++){
        elementList[i].addEventListener('keyup',function(event){
            usernameValue = event.target.value;
            console.log(event.target.value);
        });
    }
}
function validate(number){
    console.log('hyri ne funksion');
    var inputElements = document.getElementsByClassName('inputs');
    if(number==0){
        var usernameValue = inputElements[0].value;
        var passwordValue = inputElements[1].value;
        console.log(inputElements);
        console.log("Username eshte: " + usernameValue)
        console.log("Password eshte: " + passwordValue)
        if(usernameValue.length < 5 || passwordValue.length < 6){
            alert("Ju lutem mbushini te gjitha te dhenat sic duhet");
        }
        else{
            alert("U kyqet me sukses");
        }
    }
    else if (number==1){
        var rNameValue = inputElements[3].value;
        var rLastnameValue = inputElements[4].value;
        var rUsernameValue = inputElements[5].value;
        var rPasswordValue = inputElements[6].value;
        console.log(inputElements);
        console.log("Emri eshte: " + rNameValue)
        console.log("Mbiemri eshte: " + rLastnameValue)
        console.log("Username eshte: " + rUsernameValue)
        console.log("Passwordi eshte: " + rPasswordValue)
        if(rNameValue.length <3 || rLastnameValue.length <3 || rPasswordValue.length <6 || rUsernameValue.length <5){
            alert("Ju lutem mbushini te gjitha te dhenat sic duhet");
        }
        else{
            alert("Regjistrimi u krye me sukses");
        }
    }
}



function changeForm(number){
    var format = document.getElementsByClassName('forms');
    if(number == 0){
      format[0].classList.remove("hidden");
      format[0].classList.add("form-style");
      format[1].classList.add("hidden");
      format[1].classList.remove("form-style");
    }
    else if(number == 1){
      format[1].classList.remove("hidden");
      format[1].classList.add("form-style");
      format[0].classList.add("hidden");
      format[0].classList.remove("form-style");
    }
}
var inputElements = document.getElementsByClassName("inputs");
var usernameValue = inputElements[0].value;
var passwordValue = inputElements[1].value;
console.log("username "+usernameValue);
console.log("password "+passwordValue);

const username = document.querySelector("#username-input");
const password = document.querySelector("#password-input");
const mbiemri = document.querySelector("#mbiemri-input");
const emri = document.querySelector("#emri-input");
const rusername = document.querySelector("#rusername-input");
const rpassword = document.querySelector("#rpassword-input");

function usernamecheck(){
    if(username.value.length <5){
      username.style.border = "solid 1px red";
    }
    else{
        username.style.border = "";
    }
}
function passwordcheck(){
    if(password.value.length < 6){
        password.style.border = "solid 1px red";
      }
      else{
        password.style.border = "";
      }
}
function emricheck(){
    if(emri.value.length <3){
        emri.style.border = "solid 1px red";
    }
    else{
        emri.style.border = "";
    }
}
function mbiemricheck(){
    if(mbiemri.value.length <3){
        mbiemri.style.border = "solid 1px red";
    }
    else{
        mbiemri.style.border = "";
    }
}
function rusernamecheck(){
    if(rusername.value.length <5){
      rusername.style.border = "solid 1px red";
    }
    else{
        rusername.style.border = "";
    }
}
function rpasswordcheck(){
    if(rpassword.value.length < 6){
        rpassword.style.border = "solid 1px red";
      }
      else{
        rpassword.style.border = "";
      }
}

