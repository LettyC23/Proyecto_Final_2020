function validarFormularioProductos(){
    var descripcion = document.getElementById('caja_descripcion_producto').value;
    var precio = document.getElementById('caja_precio').value;
    var existencias = document.getElementById('caja_existencias').value;
   
    if(descripcion==null || descripcion.length==0 || /^\s+$/.test(descripcion)){
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