// declare the modal
var modal;

// When the user clicks anywhere outside of the modal, close it

function getmodal(x){
  modal = document.getElementById(x);
  modal.style.display='block';
//https://www.w3schools.com/howto/howto_css_login_form.asp
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}

function login(x,y){
  document.getElementById(x).style.display="none";
  document.getElementById(y).style.display="block";
  getmodal(y);
}

function checkpass() {
  var psw = document.getElementById('psw1').value;
  var psw_repeaat = document.getElementById('psw_repeaat1').value;

  if (psw == psw_repeaat)
    document.getElementById('msg').innerHTML = null;

   else
     if(psw_repeaat=="")
     document.getElementById('msg').innerHTML = null;
     else
    document.getElementById('msg').innerHTML = ' كلمة المرور غير متطابقة *';

}
