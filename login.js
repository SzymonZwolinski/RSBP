function validate()
{
    var username=document.getElementsById("Login").value;
    var password=document.getElementsById("psw").value;
    if(username=="admin"&& password=="admin")
    {
        alert("Zalogowano jako administrator")
        closeForm();
        return false;
    }
    else
    {
        alert("Wprowadzono złe dane")
    }
}
function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  jQuery(window).load(function() {
  sessionStorage.setItem('status','loggedIn') 
 });