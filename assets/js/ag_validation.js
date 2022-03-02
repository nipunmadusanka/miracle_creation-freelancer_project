

    // function Validate() {
    //     var password = document.getElementById("pass1").value;
    //     var confirmPassword = document.getElementById("pass2").value;
    //     if (password != confirmPassword) {
    //       alert('password do not match');
    //         return false;
    //     }
    //     return true;
    // }



var fullname = document.forms['Aform']['fullname'];
var email = document.forms['Aform']['email'];
var mobilenumber = document.forms['Aform']['mobilenumber'];
var address = document.forms['Aform']['address'];
var livecity = document.forms['Aform']['livecity'];
var studying = document.forms['Aform']['studying'];
var description = document.forms['Aform']['description'];
var password = document.forms['Aform']['password'];
var confirmpassword = document.forms['Aform']['confirmpassword'];
var profile = document.forms['Aform']['profile'];
var workimg = document.forms['Aform']['workimg'];

var terms = document.forms['Aform']['tatc'];
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
 var phoneno = /^\d{10}$/;
// SELECTING ALL ERROR DISPLAY ELEMENTS
var fullname_error = document.getElementById('fullname_error');
var email_error = document.getElementById('email_error');
var mobilenumber_error = document.getElementById('mobilenumber_error');
var address_error = document.getElementById('address_error');
var livecity_error = document.getElementById('livecity_error');
var studying_error = document.getElementById('studying_error');
var description_error = document.getElementById('description_error');
var password_error = document.getElementById('password_error');
var profile_error = document.getElementById('profile_error');
var workimg_error = document.getElementById('workimg_error');
var terms_error = document.getElementById('terms_error');
// SETTING ALL EVENT LISTENERS
// fullname.addEventListener('blur', nameVerify, true);
// email.addEventListener('blur', emailVerify, true);
// password.addEventListener('blur', passwordVerify, true);


    // SELECTING ALL TEXT ELEMENTS


// validation function
function Validate() {


  // validate username
  if (fullname.value == "") {
    fullname.style.border = "1px solid orange";
    document.getElementById('fullname_div').style.color = "orange";
    fullname_error.textContent = "Username is required ✖";
    fullname.focus();
    return false;
  }
   // validate username
  if (fullname.value.length < 3) {
    fullname.style.border = "1px solid orange";
    document.getElementById('fullname_div').style.color = "orange";
    fullname_error.textContent = "fullname must be at least 3 characters ✖";
    fullname.focus();
    return false;
  }
  // validate email
  if (email.value.length == "") {
    email.style.border = "1px solid orange";
    document.getElementById('email_div').style.color = "orange";
    email_error.textContent = "email is required ✖";
    email.focus();
    return false;
  }
  if(email.value.match(mailformat))
{

}
else
{
    email.style.border = "1px solid orange";
    document.getElementById('email_div').style.color = "orange";
    email_error.style.border = "1px solid red";
    email_error.textContent = "You have entered an invalid email address! ✖";
    email.focus();
return false;
}

  // validate mobilenumber
    if (mobilenumber.value == "") {
    mobilenumber.style.border = "1px solid orange";
    document.getElementById('mobilenumber_div').style.color = "orange";
    mobilenumber_error.textContent = "Mobile number is required ✖";
    mobilenumber.focus();
    return false;
  }

    if (mobilenumber.value.length < 10) {
    mobilenumber.style.border = "1px solid orange";
    document.getElementById('mobilenumber_div').style.color = "orange";
    mobilenumber_error.textContent = "Invalid mobile number ✖";
    mobilenumber.focus();
    return false;
  }
       if(mobilenumber.value.match(phoneno))
{

}
else
{
    mobilenumber.style.border = "1px solid orange";
    document.getElementById('mobilenumber_div').style.color = "orange";
    mobilenumber_error.style.border = "1px solid red";
    mobilenumber_error.textContent = "You have entered an invalid mobile number! ✖";
    mobilenumber.focus();
return false;
}

  // validate address
      if (address.value == "") {
    address.style.border = "1px solid orange";
    document.getElementById('address_div').style.color = "orange";
    address_error.textContent = "address is required ✖";
    address.focus();
    return false;
  }

  // validate city
        if (livecity.value == "") {
    livecity.style.border = "1px solid orange";
    document.getElementById('livecity_div').style.color = "orange";
    livecity_error.textContent = "livecity is required ✖";
    livecity.focus();
    return false;
  }

  // validate email
  if (studying.value == "") {
    studying.style.border = "1px solid orange";
    document.getElementById('studying_div').style.color = "orange";
    studying_error.textContent = "studying is required ✖";
    studying.focus();
    return false;
  }



  if (description.value == "") {
    description.style.border = "1px solid orange";
    document.getElementById('description_div').style.color = "orange";
   description_error.textContent = "description is required ✖";
   description.focus();
    return false;
  }

 // validate password
  if (password.value == "") {
    password.style.border = "1px solid orange";
    document.getElementById('password_div').style.color = "orange";
    password.style.border = "1px solid red";
   password_error.textContent = "password is required ✖";
   password.focus();
    return false;
  }

  // check if the two passwords match
  if (password.value != confirmpassword.value) {
    confirmpassword.style.border = "1px solid orange";
    document.getElementById('confirmpassword_div').style.color = "orange";
    confirmpassword.style.border = "1px solid red";
    password_error.textContent = "The confirm passwords do not match ✖";
    password.focus();
    return false;
  }
    if (confirmpassword.value.length < 8) {
    confirmpassword.style.border = "1px solid orange";
    document.getElementById('confirmpassword_div').style.color = "orange";
    confirmpassword_div.style.border = "1px solid red";
    password_error.textContent = "Password must be at least 8 characters ✖";
    confirmpassword.focus();
    return false;
  }
// profilepic
          if (profile.value == "") {
    profile.style.border = "1px solid orange";
    document.getElementById('profile_div').style.color = "orange";
    profile_error.textContent = "✖ profile picture is required";
    profile.focus();
    return false;
  }

// workimg
          if (workimg.value == "") {
    workimg.style.border = "1px solid orange";
    document.getElementById('workimg_div').style.color = "orange";
    workimg_error.textContent = "✖ work iamage is required";
    workimg.focus();
    return false;
  }

     if (terms.checked == false) 
    {
  terms.style.border = "1px solid orange";
  document.getElementById('terms_div').style.color = "orange";
  terms_error.textContent = "✖ T&C is required ";
  terms.focus();terms
  return false;
    }

 
}
function validateImage() {
    var formData = new FormData();
    var profile_error = document.getElementById('profile_error');
    var file = document.getElementById("profile").files[0];
 
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();

        if (file == " ") {
      document.getElementById('profile_div').style.color = "orange";
  profile_error.textContent = "✖ profile picture is required ";
  file.focus();
  return false;
    }
    if (t != "jpeg" && t != "jpg" && t != "JPG"  && t != "png" && t != "bmp" && t != "gif") {

        // document.getElementById("img").value = '';
  // terms.style.border = "1px solid orange";
  document.getElementById('profile_div').style.color = "orange";
  profile_error.textContent = "✖ Please select a valid image file ";
  file.focus();
  return false;
    }

    return true;
}
function validateworkImage() {
    var formData = new FormData();
    var workimg_error = document.getElementById('workimg_error');
    var file = document.getElementById("workimg").files[0];
 
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();

        if (file == " ") {
      document.getElementById('workimg_div').style.color = "orange";
  workimg_error.textContent = "✖ work screenshot is required ";
  file.focus();
  return false;
    }
    if (t != "jpeg" && t != "jpg" && t != "JPG" && t != "png" && t != "bmp" && t != "gif") {

        // document.getElementById("img").value = '';
  // terms.style.border = "1px solid orange";
  document.getElementById('workimg_div').style.color = "orange";
  workimg_error.textContent = "✖ Please select a valid work image ";
  file.focus();
  return false;
    }

    return true;
}
 function e_job(){
  document.getElementById("e_job").classList.toggle("show");
}  
 function p_job(){
  document.getElementById("p_job").classList.toggle("show");
}  
 function v_job(){
  document.getElementById("v_job").classList.toggle("show");
}  
 function g_job(){
  document.getElementById("g_job").classList.toggle("show");
} 
 function t_job(){
  document.getElementById("t_job").classList.toggle("show");
}  
 function w_job(){
  document.getElementById("w_job").classList.toggle("show");
}  
 function soft_job(){
  document.getElementById("soft_job").classList.toggle("show");
}  

//     if(mobilenumber.value.match(phoneno))
// {

// }
// else
// {
//     mobilenumber.style.border = "1px solid orange";
//     document.getElementById('mobile_div').style.color = "orange";
//     mobilenumber_error.style.border = "1px solid red";
//     mobilenumber_error.textContent = "You have entered an invalid mobile number! ✖";
//     mobilenumber.focus();
// return false;
// }
//
// event handler functions
function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
    email.style.border = "1px solid #5e6e66";
    document.getElementById('email_div').style.color = "#5e6e66";
    email_error.innerHTML = "";
    return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    document.getElementById('password_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
  if (password.value === password_confirm.value) {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
}


 var myInput = document.getElementById("pass1");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}














// function printError(elemId, hintMsg) {
//     document.getElementById(elemId).innerHTML = hintMsg;
// }

// function validateForm() {
//    var name = document.contactForm.name.value;
//     var email = document.contactForm.email.value;
//     var mobile = document.contactForm.mobile.value;
//     var country = document.contactForm.country.value;
//     var gender = document.contactForm.gender.value;
//     var hobbies = [];
//     var checkboxes = document.getElementsByName("hobbies[]");
//     for(var i=0; i < checkboxes.length; i++) {
//         if(checkboxes[i].checked) {
//             hobbies.push(checkboxes[i].value);
//         }
//     }
    
//    var nameErr = emailErr = mobileErr = countryErr = genderErr = true;
    
//     if(name == "") {
//         printError("nameErr", "Please enter your name");
//     } else {
//         var regex = /^[a-zA-Z\s]+$/;                
//         if(regex.test(name) === false) {
//             printError("nameErr", "Please enter a valid name");
//         } else {
//             printError("nameErr", "");
//             nameErr = false;
//         }
//     }
    
//     if(email == "") {
//         printError("emailErr", "Please enter your email address");
//     } else {
//         var regex = /^\S+@\S+\.\S+$/;
//         if(regex.test(email) === false) {
//             printError("emailErr", "Please enter a valid email address");
//         } else{
//             printError("emailErr", "");
//             emailErr = false;
//         }
//     }
    
//    if(mobile == "") {
//         printError("mobileErr", "Please enter your mobile number");
//     } else {
//         var regex = /^[1-9]\d{9}$/;
//         if(regex.test(mobile) === false) {
//             printError("mobileErr", "Please enter a valid 10 digit mobile number");
//         } else{
//             printError("mobileErr", "");
//             mobileErr = false;
//         }
//     }
    
//     if(country == "Select") {
//         printError("countryErr", "Please select your country");
//     } else {
//         printError("countryErr", "");
//         countryErr = false;
//     }
    
//     if(gender == "") {
//         printError("genderErr", "Please select your gender");
//     } else {
//         printError("genderErr", "");
//         genderErr = false;
//     }
    
//     if((nameErr || emailErr || mobileErr || countryErr || genderErr) == true) {
//        return false;
//     } else {
//        var dataPreview = "You've entered the following details: \n" +
//                           "Full Name: " + name + "\n" +
//                           "Email Address: " + email + "\n" +
//                           "Mobile Number: " + mobile + "\n" +
//                           "Country: " + country + "\n" +
//                           "Gender: " + gender + "\n";
//         if(hobbies.length) {
//             dataPreview += "Hobbies: " + hobbies.join(", ");
//         }
//         alert(dataPreview);
//     }
// };