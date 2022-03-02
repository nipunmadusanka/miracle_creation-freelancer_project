
    // function Validate() {
    //     var password = document.getElementById("pass1").value;
    //     var confirmPassword = document.getElementById("pass2").value;
    //     if (password != confirmPassword) {
    //       alert('password do not match');
    //         return false;
    //     }
    //     return true;
    // }



var username = document.forms['vform']['name'];
var mobilenumber = document.forms['vform']['mobilenumber'];
var address = document.forms['vform']['address'];
var city = document.forms['vform']['city'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['confirmpassword'];
var date = document.forms['vform']['date'];
var profilepic = document.forms['vform']['profilepic'];
var terms = document.forms['vform']['terms'];
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var mobilenumber_error = document.getElementById('mobile_error');
var address_error = document.getElementById('address_error');
var city_error = document.getElementById('city_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
var date_error = document.getElementById('date_error');
var profilepic_error = document.getElementById('profilepic_error');
var terms_error = document.getElementById('terms_error');

// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);


    // SELECTING ALL TEXT ELEMENTS


// validation function
function Validate() {


  // validate username
  if (username.value == "") {
    username.style.border = "1px solid orange";
    document.getElementById('username_div').style.color = "orange";
    name_error.textContent = "✖ Username is required";
    username.focus();
    return false;
  }

  // validate username
  if (username.value.length < 3) {
    username.style.border = "1px solid orange";
    document.getElementById('username_div').style.color = "orange";
    name_error.textContent = "✖ Username must be at least 3 characters";
    username.focus();
    return false;
  }

  // validate mobilenumber
    if (mobilenumber.value == "") {
    mobilenumber.style.border = "1px solid orange";
    document.getElementById('mobile_div').style.color = "orange";
    mobilenumber_error.textContent = "✖ Mobile number is required";
    mobilenumber.focus();
    return false;
  }

    if (mobilenumber.value.length < 10 || 10 < mobilenumber.value.length) {
    mobilenumber.style.border = "1px solid orange";
    document.getElementById('mobile_div').style.color = "orange";
    mobilenumber_error.textContent = "✖ Invalid mobile number";
    mobilenumber.focus();
    return false;
  }

  // validate address
      if (address.value == "") {
    address.style.border = "1px solid orange";
    document.getElementById('address_div').style.color = "orange";
    address_error.textContent = "✖ address is required";
    address.focus();
    return false;
  }

  // validate city
        if (city.value == "") {
    city.style.border = "1px solid orange";
    document.getElementById('city_div').style.color = "orange";
    city_error.textContent = "✖ city is required";
    city.focus();
    return false;
  }

  // validate email
  if (email.value == "") {
    email.style.border = "1px solid orange";
    document.getElementById('email_div').style.color = "orange";
    email_error.textContent = "✖ Email is required";
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
    email_error.textContent = "✖ You have entered an invalid email address!";
    email.focus();
return false;
}

  // validate password
  if (password.value == "") {
    password.style.border = "1px solid orange";
    document.getElementById('password_div').style.color = "orange";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "✖ Password is required";
    password.focus();
    return false;
  }

  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid orange";
    document.getElementById('pass_confirm_div').style.color = "orange";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "✖ The confirm passwords do not match";
    return false;
  }
    if (password_confirm.value.length < 8) {
    password.style.border = "1px solid orange";
    document.getElementById('pass_confirm_div').style.color = "orange";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "✖ Password must be at least 8 characters";
    return false;
  }

  // profilepic
          if (profilepic.value == "") {
    profilepic.style.border = "1px solid orange";
    document.getElementById('profilepic_div').style.color = "orange";
    profilepic_error.textContent = "✖ profilepic is required";
    profilepic.focus();
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
    var profile_error = document.getElementById('profilepic_error');
    var file = document.getElementById("profilepic").files[0];
 
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();

        if (file == " ") {
      document.getElementById('profilepic_div').style.color = "orange";
  profile_error.textContent = "✖ profile picture is required";
  file.focus();
  return false;
    }

    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {

        // document.getElementById("img").value = '';
  // terms.style.border = "1px solid orange";
  document.getElementById('profilepic_div').style.color = "orange";
  profile_error.textContent = "✖ Please select a valid image file";
  file.focus();
  return false;
    }

    return true;
}
    if (file.length > 500) {
        document.getElementById('profilepic_div').style.color = "orange";
  profile_error.textContent = "✖ Please select a valid image file";
  file.focus();
  return false;
    }

Filevalidation = () => { 
        const fi = document.getElementById('file'); 
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (const i = 0; i <= fi.files.length - 1; i++) { 
  
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 4096) { 
                    alert( 
                      "File too Big, please select a file less than 4mb"); 
                } else if (file < 2048) { 
                    alert( 
                      "File too small, please select a file greater than 2mb"); 
                } else { 
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB'; 
                } 
            } 
        } 
    }
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