$(function(){
  $('[data-toggle="tooltip"]').tooltip()
  })
  
  //Smooth scrolling
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
          e.preventDefault();
  
          document.querySelector(this.getAttribute("href")).scrollIntoView({
              behavior: "smooth",
          });
      });
  });

var btnM1=document.getElementById("btnM1")
function mostrar(btnM1)
{
    var text=document.getElementById("textM1");
    if(btnM1.value=="Mostrar más")
    {
        text.style.visibility="visible"
        btnM1.value="Mostrar menos";
    }
    else
    {
        text.style.visibility="hidden";
        btnM1.value="Mostrar más"
    }
}