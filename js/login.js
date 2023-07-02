var count = 6;
var direct = true;
function checkPasswordOK(selectObject) {
    var errorMsg1 = $("#8char");
    var errorMsg2 = $("#mixChar");
    var value = selectObject.value;
    var error1 = true;
    var error1 = true;
    if (selectObject.value == "") {
        errorMsg1.html("At least 8 characters");
        errorMsg2.html("You must mix character and number")
    } else {
        if (checkMoreThanEight(value)) {
            errorMsg1.html('<i class="correct far fa-check-circle"> &nbsp;</i>At least 8 characters');
            error1 = false;
        } else {
            errorMsg1.html('<i class="incorrect far fa-times-circle"> &nbsp;</i>At least 8 characters');
            error1 = true;
        }
        if (includeOneLetter(value)) {
            errorMsg2.html('<i class="correct far fa-check-circle"> &nbsp;</i>You must mix character and number');
            error2 = false;
        } else {
            errorMsg2.html('<i class="incorrect far fa-times-circle"> &nbsp;</i>You must mix character and number');
            error2 = true;
        }
    }
    if (error1 == true || error2 == true) {
        error = true;
    } else {
        error = false;
    }
    return error;
}

function checkLogin(){
        var userData = JSON.parse(users);
        var agentData = JSON.parse(agents);
        var managerData = JSON.parse(managers);
        var loginType = null;
        var requiredEmail = null;
        var requiredPassword = null;
        var error = false;
        var email = $("#loginEmail").val();
        var password = $("#loginPassword").val();
        $.each(userData, function(key, values){
          if(email==values.email){
            loginType = "u";
            requiredEmail = userData[key].email;
            requiredPassword = userData[key].password;
            return false;
          }
        });
        $.each(agentData, function(key, values){
          if(email==values.email){
            loginType = "a";
            requiredEmail = agentData[key].email;
            requiredPassword = agentData[key].password;
            return false;
          }
        });
        $.each(managerData, function(key, values){
          if(email==values.email){
            loginType = "m";
            requiredEmail = managerData[key].email;
            requiredPassword = managerData[key].password;
            return false;
          }
        });
        if(loginType==null){
          error = true;
        }else if(email!=requiredEmail || password != requiredPassword){
          error = true;
        }else if(email==requiredEmail && password == requiredPassword){
          error =false;
        }
        if(error){
          $("#passwordCheck").removeClass("hidden");
        }else{
          $("#passwordCheck").addClass("hidden");
          if(loginType=="u"){window.location.href = "user-profile.html";}
          else if(loginType=="a"){window.location.href = "agent-profile.html";}
          else if(loginType=="m"){window.location.href = "manager-profile.html";}
        }
      }

function ValidateEmail(mail) {
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail)) {
        return (true)
    }
    return (false)
}

function timer() {
  count = count -1;
  if(count < 0) {
    location.reload();
    clearInterval(counter);
  }
  document.getElementById("timer").innerHTML= "You registered an account successfully.<br/> We will redirect you to the login page in <span class='blue'>"
        + count + "</span> secs." + "<br/><a href='signin.html'>redirect now</a>";
  if(direct) {
    $(window).scrollTop(0)
    direct = false;
  }
}

function checkMoreThanEight(str) {
    return str.match(/^[0-9A-Za-z.@]{8,}$/);
}

function includeOneLetter(str) {
    return str.match(/[a-zA-Z.@)]+/);
}

function switchLoginForm(){
  $("#signinNav").click(function(){
    $(this).addClass("selected-link");
    $("#signupNav").removeClass("selected-link");
    $("#registerFormContainer").addClass("hidden");
    $("#signinFormContainer").removeClass("hidden");
  });
  $("#signupNav").click(function(){
    $(this).addClass("selected-link");
    $("#signinNav").removeClass("selected-link");
    $("#registerFormContainer").removeClass("hidden");
    $("#signinFormContainer").addClass("hidden");
  });
}
