window.addEventListener("load", function () {

    var nuevo = document.getElementById("añadir");

    nuevo.onclick = function () {
        ////Crear el objeto formulario, titulo, input y boton
        let formulario=document.createElement("form");
        formulario.setAttribute("class","styled-table");
        let titulo=document.createElement("label");
        let cajaTextNombres=document.createElement("input");
        let cajaTextContrasena=document.createElement("input");
        let cajaTextEmail=document.createElement("input");
        let cajaTextIndicativo=document.createElement("input");
        let cajaTextLocalizacion=document.createElement("input");
        let cajaTextImagen=document.createElement("input");
        let cajaTextRol=document.createElement("input");
        let boton=document.createElement("input");
 
        ////Asignar atributos al objeto formulario
            formulario.setAttribute('method', "post");
            formulario.setAttribute('action', "#");
            //formulario.setAttribute('id', "form");
            formulario.setAttribute('class', "styled-table");
 
            ////Asignar atributos al objeto caja de texto de NOMBRES
            cajaTextNombres.setAttribute('type', "text");
            cajaTextNombres.setAttribute('id', "nombre");
            cajaTextNombres.setAttribute('name', "nombre");
            cajaTextNombres.setAttribute('placeholder', "Nombre");
            cajaTextNombres.setAttribute('style', "width:100%;margin: 10px 0px;padding: 5px");
 
            ////Asignar atributos al objeto caja de texto de CONTRASENA
            cajaTextContrasena.setAttribute('type', "text");
            cajaTextContrasena.setAttribute('id', "contrasena");
            cajaTextContrasena.setAttribute('name', "contrasena");
            cajaTextContrasena.setAttribute('placeholder', "Contraseña");
            cajaTextContrasena.setAttribute('style', "width:100%;margin: 10px 0px;padding: 5px");
 
            ////Asignar atributos al objeto caja de texto de EMAIL
            cajaTextEmail.setAttribute('type', "text");
            cajaTextEmail.setAttribute('name', "email");
            cajaTextEmail.setAttribute('id', "email");
            cajaTextEmail.setAttribute('placeholder', "Email");
            cajaTextEmail.setAttribute('style', "width:100%;margin: 10px 0px;padding: 5px");
 
            ////Asignar atributos al objeto caja de texto de INDICATIVO
            cajaTextIndicativo.setAttribute('type', "text");
            cajaTextIndicativo.setAttribute('id', "indicativo");
            cajaTextIndicativo.setAttribute('name', "indicativo");
            cajaTextIndicativo.setAttribute('placeholder', "Indicativo");
            cajaTextIndicativo.setAttribute('style', "width:100%;margin: 10px 0px;padding: 5px");
 
            ////Asignar atributos al objeto area de texto de LOCALIZACION
            // cajaTextLocalizacion.setAttribute('type', "text");
            // cajaTextLocalizacion.setAttribute('id', "localizacion");
            // cajaTextLocalizacion.setAttribute('name', "localizacion");
            // cajaTextLocalizacion.setAttribute('placeholder', "Localizacion");
            // cajaTextLocalizacion.setAttribute('style', "width:100%;margin: 10px 0px;padding: 5px");

            ////Asignar atributos al objeto caja de texto de LOCALIZACION
            cajaTextLocalizacion.setAttribute('type', "text");
            cajaTextLocalizacion.setAttribute('id', "localizacion");
            cajaTextLocalizacion.setAttribute('name', "localizacion");
            cajaTextLocalizacion.setAttribute('placeholder', "Localiacion");
            cajaTextLocalizacion.setAttribute('style', "width:100%;margin: 10px 0px;padding: 5px");

            ////Asignar atributos al objeto caja de texto de IMAGEN
            cajaTextImagen.setAttribute('type', "text");
            cajaTextImagen.setAttribute('id', "imagen");
            cajaTextImagen.setAttribute('name', "imagen");
            cajaTextImagen.setAttribute('placeholder', "Imagen");
            cajaTextImagen.setAttribute('style', "width:100%;margin: 10px 0px;padding: 5px");
 
            ////Asignar atributos al objeto caja de texto de ROL
            cajaTextRol.setAttribute('type', "text");
            cajaTextRol.setAttribute('id', "rol");
            cajaTextRol.setAttribute('name', "rol");
            cajaTextRol.setAttribute('placeholder', "Rol");
            cajaTextRol.setAttribute('style', "width:100%;margin: 10px 0px;padding: 5px");
        
            ////Asignar atributos al objeto boton
            boton.setAttribute('type', "submit");	
            boton.setAttribute('value', "Enviar");
            boton.setAttribute('onlcick', "location.reload()");
            boton.setAttribute('style', "width:100px;margin: 10px 0px;padding: 10px;background:#F05133;color:#fff;border:solid 1px #000;");
            //boton.setAttribute('onclick', "alert('Se ha añadido un nuevo bandas')");
 
            titulo.innerHTML='<h1>Bandas</h1>';
            formulario.appendChild(titulo);
            formulario.appendChild(cajaTextNombres);
            formulario.appendChild(cajaTextContrasena);
            formulario.appendChild(cajaTextEmail);
            formulario.appendChild(cajaTextIndicativo);
            formulario.appendChild(cajaTextLocalizacion);
            formulario.appendChild(cajaTextImagen);
            formulario.appendChild(cajaTextRol);
            formulario.appendChild(boton);
            document.getElementById('cuerpo').appendChild(formulario);//Agregar el formulario a la etiqueta con el ID		
            

                //debugger;
            formulario.onsubmit = function(e){
                    e.preventDefault();
                    //alert("hola");
                    guardar();
                }
                async function guardar(){
                   // console.log("guardar datos...");
                  /* var indicativo = document.getElementById("indicativo").value;
                   var email = document.getElementById("email").value;
                   var localizacion = document.getElementById("localizacion").value;
                   var imagen = document.getElementById("imagen").value;
                   var nombre = document.getElementById("nombre").value;
                   var contrasena = document.getElementById("contrasena").value;
                   var rol = document.getElementById("rol").value;
           
                 if(indicativo == "" || email == "" || localizacion == "" || imagen == "" || nombre == "" || contrasena == "" || rol == ""){
                       alert("todos los campos son obligatorios");
                       return;
                   }*/
                   try{
                       const data = new FormData(formulario);
                       //
                       var respuesta = await fetch("http://localhost/concurso/helper/bandasApi.php",{
                           method: 'POST',
                           mode: 'cors',
                           cache: 'no-cache',
                           body: data,
                           headers: new Headers()
                           /*
                           success: function (data) {
                            //data es la respuesta del php
                            if(data){
                              window.location.replace("https://localhost/concurso/?menu=administradorbandass");
                            }
                        }*/
                  
                       })
                       /*.then(respuesta=>respuesta.json()).then(datos=>{
                        console.log("hola");


                       })*/
                       console.log(respuesta);
                       alert ("Nuevo bandas creado");

                   } catch(err){
                       console.log("Ocurrio un error: "+err);
                   }
                }
        modal(formulario);
    }

})
function modal(div) {
    var modal = this.document.createElement("div");
    modal.style.position = "fixed";
    modal.style.background = "#020202";
    modal.style.opacity = 0.5;
    modal.style.top = 0;
    modal.style.left = 0;
    modal.style.width = "100%";
    modal.style.height = "100%";
    modal.style.zIndex = 100;
    document.body.appendChild(modal,titulo);

    var caja = document.createElement("div");
    var left = parseInt((window.innerWidth - 400) / 2) + "px";
    var top = parseInt((window.innerHeight - 300) / 2) + "px";

    caja.style.position = "fixed";
    caja.style.background = "#FFFFFF";
    caja.style.top = top;
    caja.style.left = left;
    caja.style.width = "600px";
    caja.style.height = "400px";
    caja.style.zIndex = 101;
    document.body.appendChild(caja);

    var titulo = document.createElement("div");
    titulo.style.position = "absolute";
    titulo.style.background = "#BBBBBB";
    titulo.style.height = "40px";
    titulo.style.width = "100%";
    titulo.style.padding= "10px";
    titulo.innerHTML="Nueva Banda";
    caja.appendChild(titulo);

    var cerrar = document.createElement("span");
    cerrar.innerHTML="X";
    cerrar.style.position="absolute";
    cerrar.style.width="20px";
    cerrar.style.top=0;
    cerrar.style.right=0;
    cerrar.style.margin="10px";
    caja.style.overflow="hidden";
    cerrar.onclick=function(){
        var caja =this.parentElement.parentElement;
        caja.parentElement.removeChild(caja);
        modal.parentElement.removeChild(modal);
        location.reload();
    }
    titulo.appendChild(cerrar);

    var contenido = document.createElement("div");
    contenido.style.top="40px";
    contenido.style.position="absolute";
    contenido.style.height="370px";
    contenido.style.width="100%";
    contenido.style.padding ="15px";
    contenido.style.overflowY="scroll";
    caja.appendChild(contenido);
    contenido.appendChild(div)
}