
function validate()
{
    var username=document.getElementById("login").value;
    var password=document.getElementById("psw").value;
    if(username=="admin"&& password=="admin")
    {
        zalog();
        return false;
    }
    else
    {
        alert("Wprowadzono złe dane");
    }
}
function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
function zalog() {
    jQuery(window).load(function() {
        sessionStorage.setItem('status','loggedIn') 
       });
    alert("Zalogowano jako administrator");
    for (let el of document.querySelectorAll('.appBanner')) el.style.visibility = 'hidden';

}   