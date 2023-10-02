
  function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }

  function mostrarSidebar(){
    document.getElementById('sidebar').style.display = 'block';
    document.getElementById('sidebar').style.transition = 'all .5s ease';
    document.getElementById('cancel-btn').style.display = 'block';
    document.getElementById('btn').style.display = 'none';
    
}
function ocultarSidebar(){
    document.getElementById('sidebar').style.display = 'none';
    document.getElementById('sidebar').style.transition = 'all .5s ease';
    document.getElementById('cancel-btn').style.display = 'none';
    document.getElementById('btn').style.display = 'block';
}