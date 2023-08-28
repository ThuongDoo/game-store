function validateForm() {
  var password = document.getElementById("password").value;
  var confirm_password = document.getElementById("confirm_password");
  if (password !== confirm_password.value) {
    confirm_password.setCustomValidity("Mật khẩu nhập lại không khớp.");
    console.log("hah");
    console.log(confirm_password.value);
    // return false;
  }
  else {
    confirm_password.setCustomValidity("haha");
    console.log("huh");
    // return true;
  }

  confirm_password.reportValidity();
  return confirm_password.checkValidity();
  
}