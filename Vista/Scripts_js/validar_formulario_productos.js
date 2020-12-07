function validarFormularioProductos(){
    var descripcion = document.getElementById('caja_descripcion_producto').value;
    var precio = document.getElementById('caja_precio').value;
    var existencias = document.getElementById('caja_existencias').value;
   
    if(descripcion==null || descripcion.length==0 ||   /^\d+$/.test(descripcion)){
        return false;
    }

    if(precio==null || precio.length==0 || isNaN(precio)){
        return false;
    }

    if(existencias==null || existencias.length==0 || isNaN(existencias)){
        return false;
    }

    
    if(producto==null || prod.length==0 || isNaN(producto)){
        return false;
    }
    
    var genero = document.getElementById('select_tipo_producto').value;

    if(genero="0"){
        return false;
        genero.focus();
    }


    return true;
}

function validarIniciarSesion(){
    var usuario = document.getElementById('caja_usuario').value;
    var contraseña = document.getElementById('caja_contraseña').value;

    if(usuario==null || usuario.length==0 ){
        return false;
    }

    if(contraseña==null || contraseña.length==0 ){
        return false;
    }

    return true;
}

function validarRegistrarUsuario(){
    var nombre = document.getElementById('caja_nombre_completo').value;
    var correo = document.getElementById('caja_email').value;
    var usuario = document.getElementById('caja_nombre_usuario').value;
    var contraseña = document.getElementById('caja_password').value;

    if(nombre==null || nombre.length==0 || /^\s+$/.test(nombre)){
        return false;
    }

    if(correo==null || correo.length==0 ){
        return false;
    }

    if(usuario==null || usuario.length==0 ){
        return false;
    }

    if(contraseña==null || contraseña.length==0 ){
        return false;
    }
    return true;
}

function validarFormularioClientes(){
    var nombre = document.getElementById('caja_nombre_cliente').value;
    if(nombre==null || nombre.length==0 || /^\s+$/.test(nombre)){
        return false;
    }
}



