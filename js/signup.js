// Verify Button Disabled
function verify(){
    email = document.getElementById("verify-code");
    submit = document.getElementById('verify-submit');
    if(email.value===""){
        submit.disabled = true;
    } else { 
        submit.disabled = false;
    }
}
// Eye Function
document.getElementById("eye").addEventListener("click",function(){
  var icon =  document.getElementById("psw");
  if(icon.type=="password"){
    icon.type="text";
    this.classList.add("fa-eye");
    this.classList.remove("fa-eye-slash");
  }else{
    icon.type="password";
    this.classList.add("fa-eye-slash");
    this.classList.remove("fa-eye");
  }
});