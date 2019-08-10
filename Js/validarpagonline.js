function validateForm(e){
    var elements = e.elements;
    for(var i = 0; i < elements.length; i++) {
        if(elements[i].tagName === "INPUT" || elements[i].tagName === "SELECT"){
            if(elements[i].value.trim() === "" && elements[i].required === true) {
                var title = elements[i].getAttribute('title');
                alert("Por favor ingrese " + title + " en el campo");
                //var usuario = elements[i].getAttribute('usuario');
                //alert("Por favor ingrese " + usuario + " en el campo");
                
                elements[i].focus();
                elements[i].style.borderColor = "red";
                elements[i].style.borderStyle = "dashed";
                return false;
            }
        }
    }
}