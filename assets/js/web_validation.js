
var username = document.forms['webform']['name'];
var email = document.forms['webform']['email'];
var mobilenumber = document.forms['webform']['mobile'];
var city = document.forms['webform']['city'];
var package = document.forms['webform']['package'];
var why_website = document.forms['webform']['why_website'];
var brief_description = document.forms['webform']['brief_description'];
var payment = document.forms['webform']['payment'];




var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var mobile_error = document.getElementById('mobile_error');
var city_error = document.getElementById('city_error');
var package_error = document.getElementById('package_error');
var why_website_error = document.getElementById('why_website_error');
var brief_description_error = document.getElementById('brief_description_error');
var payment_error = document.getElementById('payment_error');

// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);


    // SELECTING ALL TEXT ELEMENTS


// validation function
function web_Validate() {


  // validate username
  if (username.value == "") {
    username.style.border = "1px solid orange";
    document.getElementById('name_div').style.color = "orange";
    name_error.textContent = "✖ User name is required";
    username.focus();
    return false;
  }

  // validate username
  if (username.value.length < 3) {
    username.style.border = "1px solid orange";
    document.getElementById('name_div').style.color = "orange";
    name_error.textContent = "✖ User name must be at least 3 characters";
    username.focus();
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

  // validate mobilenumber
    if (mobilenumber.value == "") {
    mobilenumber.style.border = "1px solid orange";
    document.getElementById('mobile_div').style.color = "orange";
    mobile_error.textContent = "✖ Mobile number is required";
    mobilenumber.focus();
    return false;
  }

    if (mobilenumber.value.length < 10 || 10 < mobilenumber.value.length) {
    mobilenumber.style.border = "1px solid orange";
    document.getElementById('mobile_div').style.color = "orange";
    mobile_error.textContent = "✖ Invalid mobile number";
    mobilenumber.focus();
    return false;
  }
   // validate city
        if (city.value == "") {
    city.style.border = "1px solid orange";
    document.getElementById('city_div').style.color = "orange";
    city_error.textContent = "✖ City is required";
    city.focus();
    return false;
  } 
     // validate package
        if (package.value == "") {
    package.style.border = "1px solid orange";
    document.getElementById('package_div').style.color = "orange";
    package_error.textContent = "✖ package is required";
    package.focus();
    return false;
  } 
       // validate why_website
        if (why_website.value == "") {
    why_website.style.border = "1px solid orange";
    document.getElementById('why_website_div').style.color = "orange";
    why_website_error.textContent = "✖ why_website is required";
    why_website.focus();
    return false;
  } 
         // validate brief_description
        if (brief_description.value == "") {
    brief_description.style.border = "1px solid orange";
    document.getElementById('brief_description_div').style.color = "orange";
    brief_description_error.textContent = "✖ brief_description is required";
    brief_description.focus();
    return false;
  } 

          // payment 
        if (payment.value == "") {
    payment.style.border = "1px solid orange";
    document.getElementById('payment_div').style.color = "orange";
    payment_error.textContent = "✖ Payment is required";
    payment.focus();
    return false;
  }




}