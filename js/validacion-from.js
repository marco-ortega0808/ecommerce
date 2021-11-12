document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });
function validarFormulario(evento) {
    evento.preventDefault();
    var name = document.getElementById('name').value;
    if(name.length == 0) {
      alert('Es necesario que escriba su nombre');
      return;
    }
    var email = document.getElementById('email').value;
    if (email.length == 0) {
      alert('Es necesario que escriba su email');
      return;
     }
     var p1 = document.getElementById("password");
     var p2 = document.getElementById("password1");
     if (p1.length == 0 || p2.length == 0) {
        alert("Los campos de la password no pueden quedar vacios");
        return;
      }
    /* var all = document.getElementById('pasword2', 'name', 'email', 'pasword').value;
    if(all.length == 0) {
      alert('Favor de llenar todos los campos');
      return;
    } */
    this.submit();
}