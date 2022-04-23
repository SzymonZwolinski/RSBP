
function validate()
{
    var username=document.getElementById("login").value;
    var password=document.getElementById("psw").value;
    if(username=="admin"&& password=="admin")
    {
        event.preventDefault();
        zalogA();
    }
    else if(username=="user"&&password=="user")
    {
        event.preventDefault();
        zalogU();
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

function zalogA() {
    document.location.href ="PanelAdministrator.html";
}   
function zalogU()
{
    document.location.href ="PanelUser.html";
}