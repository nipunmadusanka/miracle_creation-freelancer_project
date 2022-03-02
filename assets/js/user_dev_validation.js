
var city = document.forms['dform']['type_project'];
var reason = document.forms['dform']['reason'];
var description = document.forms['dform']['description'];
var status = document.forms['dform']['status_of_the_project'];
var date = document.forms['dform']['date'];
var payment = document.forms['dform']['payment'];

var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

// SELECTING ALL ERROR DISPLAY ELEMENTS

var type = document.getElementById('type_error');
var reason_error = document.getElementById('reason_error');
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
function Validate() {



   // validate type
        if (type.value == "") {
    type.style.border = "1px solid orange";
    document.getElementById('type_div').style.color = "orange";
    type_error.textContent = "✖ Order type is required";
    type.focus();
    return false;
  } 

  
 // reason 
        if (reason.value == "") {
    reason.style.border = "1px solid orange";
    document.getElementById('reason_div').style.color = "orange";
    reason_error.textContent = "✖ Reason is required";
    reason.focus();
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
    payment_error.textContent = "✖ Payment method is required";
    payment.focus();
    return false;
  }
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
