function validarFormulario(){
 
    var txtNombre = document.getElementById('nombre').value;
    var txtApellido = document.getElementById('apellido').value;
    var txtEdad = document.getElementById('edad').value;
    var txtCorreo = document.getElementById('correo').value;
    var txtFecha = document.getElementById('fecha').value;
    var cmbSelector = document.getElementById('selector').selectedIndex;
    var txtDireccion = document.getElementById('direccion').value;
    var chkEstado = document.getElementById('checkBox');
   
    var banderaRBTN = false;
   
    //Test campo obligatorio
    if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
      alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
      return false;
    }
   
    //Test campo obligatorio
    if(txtApellido == null || txtApellido.length == 0 || /^\s+$/.test(txtApellido)){
      alert('ERROR: El campo Apellido no debe ir vacío o lleno de solamente espacios en blanco');
      return false;
    }
   
    //Test edad
    if(txtEdad == null || txtEdad.length == 0 || isNaN(txtEdad)){
      alert('ERROR: Debe ingresar una edad');
      return false;
    }
   
    //Test correo
    if(!(/\S+@\S+\.\S+/.test(txtCorreo))){
      alert('ERROR: Debe escribir un correo válido');
      return false;
    }
   
    //Test fecha
    if(!isNaN(txtFecha)){
      alert('ERROR: Debe elegir una fecha');
      return false;
    }
   
    //Test comboBox
    if(cmbSelector == null || cmbSelector == 0){
      alert('ERROR: Debe seleccionar una opcion del combo box');
      return false;
    }
   
    if(txtDireccion == null || txtDireccion.length == 0 || /^\s+$/.test(txtDireccion)){
      alert('ERROR: El campo Direccion no debe ir vacío o lleno de solamente espacios en blanco');
      return false;
    }
   
    //Test checkBox
    if(!chkEstado.checked){
      alert('ERROR: Debe seleccionar el checkbox');
      return false;
    }
   
    return true;
   }