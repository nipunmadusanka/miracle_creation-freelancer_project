
var username = document.forms['outform']['name'];
var mobilenumber = document.forms['outform']['mobile'];
var email = document.forms['outform']['email'];
var address = document.forms['outform']['address'];
var city = document.forms['outform']['city'];
var type = document.forms['outform']['type_project'];
var description = document.forms['outform']['description'];
var status = document.forms['outform']['status'];
var date = document.forms['outform']['date'];
var payment = document.forms['outform']['payment'];

var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var mobilenumber_error = document.getElementById('mobile_error');
var email_error = document.getElementById('email_error');
var address_error = document.getElementById('address_error');
var city_error = document.getElementById('city_error');
var type_error = document.getElementById('type_error');
var description_error = document.getElementById('description_error');
var status_error = document.getElementById('status_error');
var date_error = document.getElementById('date_error');
var payment_error = document.getElementById('payment_error');
// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);


    // SELECTING ALL TEXT ELEMENTS


// validation function
function out_Validate() {


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
  // validate address
  if (address.value == "") {
    address.style.border = "1px solid orange";
    document.getElementById('address_div').style.color = "orange";
    address_error.textContent = "✖ Address is required";
    address.focus();
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

   // validate type
        if (type.value == "") {
    type.style.border = "1px solid orange";
    document.getElementById('type_div').style.color = "orange";
    type_error.textContent = "✖ order type is required";
    type.focus();
    return false;
  } 

// description 
        if (description.value == "") {
    description.style.border = "1px solid orange";
    document.getElementById('description_div').style.color = "orange";
    description_error.textContent = "✖ Description is required";
    description.focus();
    return false;
  }
 // status 
        if (status.value == "") {
    status.style.border = "1px solid orange";
    document.getElementById('status_div').style.color = "orange";
    status_error.textContent = "✖ Status is required";
    status.focus();
    return false;
  }

 // date 
        if (date.value == "") {
    date.style.border = "1px solid orange";
    document.getElementById('date_div').style.color = "orange";
    date_error.textContent = "✖ Date is required";
    date.focus();
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