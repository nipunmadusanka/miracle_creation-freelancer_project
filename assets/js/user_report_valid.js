  function user_Function() {
  document.getElementById("report").classList.toggle("show");
}

  function validatereport() {
    


    var reasen = document.forms['repo']['re_reasen'];
  

    var reasen_error = document.getElementById('re_reasen_error');

            if (reasen.value == "") {
               reasen_error.style.color = "black";
  reasen_error.textContent = "✖ reasen is required ";
  reasen.focus();
  return false;
    }
}