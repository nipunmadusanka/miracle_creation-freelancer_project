

var whatsapp = document.forms['selectform']['whatsapp'];

var type = document.forms['selectform']['type_project'];
var description = document.forms['selectform']['description'];
var status = document.forms['selectform']['status'];
var date = document.forms['selectform']['date'];
var file = document.forms['selectform']['file'];
var payment = document.forms['selectform']['payment'];

var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

// SELECTING ALL ERROR DISPLAY ELEMENTS

var whatsapp_error = document.getElementById('whatsapp_error');

var type_error = document.getElementById('type_error');
var description_error = document.getElementById('description_error');
var status_error = document.getElementById('status_error');
var date_error = document.getElementById('date_error');
var file_error = document.getElementById('file_error');
var payment_error = document.getElementById('payment_error');
// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);


    // SELECTING ALL TEXT ELEMENTS


// validation function
function select_Validate() {




  // validate mobilenumber
    if (whatsapp.value == "") {
    whatsapp.style.border = "1px solid orange";
    document.getElementById('whatsapp_div').style.color = "orange";
    whatsapp_error.textContent = "✖ Whatsapp number is required";
    whatsapp.focus();
    return false;
  }

    if (whatsapp.value.length < 10 || 10 < whatsapp.value.length) {
    whatsapp.style.border = "1px solid orange";
    document.getElementById('whatsapp_div').style.color = "orange";
    whatsapp_error.textContent = "✖ Invalid whatsapp number";
    whatsapp.focus();
    return false;
  }


   // validate type
        if (type.value == "") {
    type.style.border = "1px solid orange";
    document.getElementById('type_div').style.color = "orange";
    type_error.textContent = "✖ Order type is required";
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
  // file 
        if (file.value == "") {
    file.style.border = "1px solid orange";
    document.getElementById('file_div').style.color = "orange";
    file_error.textContent = "✖ File is required";
    file.focus();
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

function filvalid() {
    var formData = new FormData();
    var file_error = document.getElementById('file_error');
    var file = document.getElementById("file").files[0];
 
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();

        if (file == " ") {
  document.getElementById('file_div').style.color = "orange";
  file_error.textContent = "✖ file is required ";
  file.focus();
  return false;
    }


    return true;
}