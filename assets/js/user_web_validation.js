

var package = document.forms['webform']['package'];
var why_website = document.forms['webform']['why_website'];
var brief_description = document.forms['webform']['brief_description'];
var payment = document.forms['webform']['payment'];




var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

// SELECTING ALL ERROR DISPLAY ELEMENTS

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