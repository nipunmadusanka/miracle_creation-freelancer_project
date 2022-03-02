  function user_Function() {
  document.getElementById("report").classList.toggle("show");
}

  function validatereport() {
    

    var name = document.forms['repo']['u_name'];
    var tele = document.forms['repo']['u_telephone'];
    var reasen = document.forms['repo']['re_reasen'];
  
    var name_error = document.getElementById('re_name_error');
    var telephone_error = document.getElementById('re_telephone_error');
    var reasen_error = document.getElementById('re_reasen_error');

        if (name.value == "") {
          name_error.style.color = "black";
  name_error.textContent = "✖ user_name is required ";
  name.focus();
  return false;
    }
            if (tele.value == "") {
               telephone_error.style.color = "black";
  telephone_error.textContent = "✖ telephone_number is required ";
  tele.focus();
  return false;
    }
      if (tele.value.length < 10 || 10 < tele.value.length) {
              telephone_error.style.color = "black";
  telephone_error.textContent = "✖ invalid telephone_number";
 tele.focus();
    return false;
  }
            if (reasen.value == "") {
               reasen_error.style.color = "black";
  reasen_error.textContent = "✖ reasen is required ";
  reasen.focus();
  return false;
    }
}