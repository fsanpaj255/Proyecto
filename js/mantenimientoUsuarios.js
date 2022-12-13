window.onload = function(){
    //creamos la tabla
    let table = document.createElement('table');
    table.setAttribute("class","styled-table");
    let thead = document.createElement('thead');
    let tbody = document.createElement('tbody');

    table.appendChild(thead);
    table.appendChild(tbody);
     //anadimos la tabla a php

    document.getElementById('cuerpousuarios').appendChild(table);

    // Anadimos los nombres de la primera fila de la tabla
let fila_1 = document.createElement('tr');
let encabezado_1 = document.createElement('th');
encabezado_1.innerHTML = "ID";
let encabezado_2 = document.createElement('th');
encabezado_2.innerHTML = "Identificador";
let encabezado_3 = document.createElement('th');
encabezado_3.innerHTML = "Admin";
let encabezado_4 = document.createElement('th');
encabezado_4.innerHTML = "Correo";
let encabezado_5 = document.createElement('th');
encabezado_5.innerHTML = "Contraseña";
let encabezado_6 = document.createElement('th');
encabezado_6.innerHTML = "Localización";
let encabezado_7 = document.createElement('th');
encabezado_7.innerHTML = "Imagen";
let encabezado_8 = document.createElement('th');
encabezado_8.innerHTML = "Nombre";
let encabezado_9 = document.createElement('th');
encabezado_9.innerHTML = "Editar";
let encabezado_10 = document.createElement('th');
encabezado_10.innerHTML = "Eliminar";


fila_1.appendChild(encabezado_1);
fila_1.appendChild(encabezado_2);
fila_1.appendChild(encabezado_3);
fila_1.appendChild(encabezado_4);
fila_1.appendChild(encabezado_5);
fila_1.appendChild(encabezado_6);
fila_1.appendChild(encabezado_7);
fila_1.appendChild(encabezado_8);
fila_1.appendChild(encabezado_9);
fila_1.appendChild(encabezado_10);
thead.appendChild(fila_1);

    //pedimos el json y el status
    let ajax=new XMLHttpRequest();
    ajax.open('GET','./api/participantes/getparticipantes.php',true);
    ajax.send();
    ajax.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200 ){
    let ajax=new XMLHttpRequest();
    ajax.open('GET','./api/participantes/getparticipantes.php',true);
    ajax.send();
    ajax.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            let data=JSON.parse(this.responseText);

            for(var i=0;i<data.length;i++){

                let row_2 = document.createElement('tr');
                let row_2_data_1 = document.createElement('td');
                row_2_data_1.innerHTML = data[i].id;
                let row_2_data_2 = document.createElement('td');
                row_2_data_2.innerHTML = data[i].identificador;
                let row_2_data_3 = document.createElement('td');
                row_2_data_3.innerHTML = data[i].admin;
                let row_2_data_4 = document.createElement('td');
                row_2_data_4.innerHTML = data[i].correo;
                let row_2_data_5 = document.createElement('td');
                row_2_data_5.innerHTML = data[i].contrasena;
                let row_2_data_6 = document.createElement('td');
                row_2_data_6.innerHTML = data[i].localizacion;
                let row_2_data_7 = document.createElement('td');
                row_2_data_7.innerHTML = data[i].imagen;
                let row_2_data_8 = document.createElement('td');
                row_2_data_8.innerHTML = data[i].nombre;
                //Editar
                let row_2_data_9 = document.createElement('td');
                let aeditar = document.createElement('a');
                let imgedit = document.createElement('img');
                imgedit.setAttribute("src","./source/editar.png");
                imgedit.setAttribute("class","editele")
                row_2_data_9.appendChild(aeditar);
                aeditar.appendChild(imgedit);
                 //botoneditar
                aeditar.addEventListener("click",function(){
                    var fila = this.parentElement.parentElement;
                    var celdaid = fila.children[0];
                    var identificador = fila.children[1];
                    var admin = fila.children[2];
                    var correo = fila.children[3];
                    var contrasena = fila.children[4];
                    var localizacion = fila.children[5];
                    var imagen = fila.children[6];
                    var nombre = fila.children[7];
                    creaFormulario(celdaid.innerText,identificador.innerText,admin.innerText,correo.innerText,contrasena.innerText,localizacion.innerText,imagen.innerText,nombre.innerText);
                    
                    
             })
                
                //Eliminar
                let row_2_data_10 = document.createElement('td');
                let aeliminar = document.createElement('a');
                let imgeliminar = document.createElement('img');
                imgeliminar.setAttribute("src","./source/borrarphp.png");
                imgeliminar.setAttribute("class","editele")
                row_2_data_10.appendChild(aeliminar);
                aeliminar.appendChild(imgeliminar)

                row_2.appendChild(row_2_data_1);
                row_2.appendChild(row_2_data_2);
                row_2.appendChild(row_2_data_3);
                row_2.appendChild(row_2_data_4);
                row_2.appendChild(row_2_data_5);
                row_2.appendChild(row_2_data_6);
                row_2.appendChild(row_2_data_7);
                row_2.appendChild(row_2_data_8);
                row_2.appendChild(row_2_data_9);
                row_2.appendChild(row_2_data_10);
                tbody.appendChild(row_2);
                //botoneliminar
                aeliminar.addEventListener("click",function(){
                    var fila = this.parentElement.parentElement;
                    var celdaid = fila.children[0];
                    eliminarusuario(celdaid.innerText);
                    location.reload(); 
                    
             })
            }
        }
    }
}
}
var buttonanadir = this.document.getElementById("anadirusuarios");

    buttonanadir.onclick = function (){
        creaFormulario(0,0,0,0,0,0,0,0);
     
}
function creaFormulario(id,identificador,admin,correo,contrasena,localizacion,imagen,nombre){
        //Creamos los elementos

        let formulario=document.createElement("form"); 
        formulario.id = 'formulario_'+id;

        //ESTOESUNPOCODESEPARACIONTRAMPA
        let espacio1 = document.createElement("br");
        let espacio2 = document.createElement("br");
        let espacio3 = document.createElement("br");
        let espacio4 = document.createElement("br");
        let espacio5 = document.createElement("br");
        let espacio6 = document.createElement("br");
        let espacio7 = document.createElement("br");
        //me he quedado cambiando codigo aqui
    
        //identificador
        let label1 = document.createElement("label");
        let input1 = document.createElement("input");
        input1.value = identificador;
    
         //admin
         let label2 = document.createElement("label");
         let input2 = document.createElement("input");
         input2.value = admin;
         
         //correo
    
        let label3 = document.createElement("label");
        let input3 = document.createElement("input");
        input3.value = correo;

        let label4 = document.createElement("label");
        let input4 = document.createElement("input");
        input4.value = contrasena;

        let label5 = document.createElement("label");
        let input5 = document.createElement("input");
        input5.value = localizacion;

        let label6 = document.createElement("label");
        let input6 = document.createElement("input");
        input6.value = imagen;

        let label7 = document.createElement("label");
        let input7 = document.createElement("input");
        input7.value = nombre;


        //atributos de formulario
        formulario.setAttribute('method', "post");
        formulario.setAttribute('action', "#");
        formulario.setAttribute('id','form');
        //boton
            let botoninsertar=document.createElement("input");
        
            //Atributos  identificador
            label1.innerHTML = "Identificador";
            input1.setAttribute('type', "text");
            input1.setAttribute('name', "identificador");
            input1.setAttribute('id', "identificador");
    
            //Atributos  admin
            label2.innerHTML= "Admin";
            input2.setAttribute('type', "text");
            input2.setAttribute('name', "admin");
            input2.setAttribute('id', "admin");
    
            //Atributos  correo
            label3.innerHTML= "Correo";
            input3.setAttribute('type', "text");
            input3.setAttribute('name', "correo");
            input3.setAttribute('id', "correo");

            //Atributos  contrasena
            label4.innerHTML= "Contraseña";
            input4.setAttribute('type', "text");
            input4.setAttribute('name', "contrasena");
            input4.setAttribute('id', "contrasena");

            //Atributos  localizacion
            label5.innerHTML= "Localización";
            input5.setAttribute('type', "text");
            input5.setAttribute('name', "localizacion");
            input5.setAttribute('id', "localizacion");

            //Atributos  imagen
            label6.innerHTML= "Imagen";
            input6.setAttribute('type', "text");
            input6.setAttribute('name', "imagen");
            input6.setAttribute('id', "imagen");

            //Atributos  nombre
            label7.innerHTML= "Nombre";
            input7.setAttribute('type', "text");
            input7.setAttribute('name', "nombre");
            input7.setAttribute('id', "nombre");
        
            ////Asignar atributos al objeto boton
            botoninsertar.setAttribute('type', "button");	
            botoninsertar.setAttribute('value', "ingresar");
            botoninsertar.setAttribute("class","button-azul");
           // botoninsertar.setAttribute('onclick', "location.reload()");
            
            //Unimos todo
            formulario.appendChild(label1);
            formulario.appendChild(input1);
            formulario.appendChild(espacio1);

            formulario.appendChild(label2);
            formulario.appendChild(input2);
            formulario.appendChild(espacio2);

            formulario.appendChild(label3);
            formulario.appendChild(input3);
            formulario.appendChild(espacio3);

            formulario.appendChild(label4);
            formulario.appendChild(input4);
            formulario.appendChild(espacio4);

            formulario.appendChild(label5);
            formulario.appendChild(input5);
            formulario.appendChild(espacio5);

            formulario.appendChild(label6);
            formulario.appendChild(input6);
            formulario.appendChild(espacio6);

            formulario.appendChild(label7);
            formulario.appendChild(input7);
            formulario.appendChild(espacio7);

            formulario.appendChild(botoninsertar);
            document.getElementById('formulariouser').appendChild(formulario);
         
           if(id == 0){
            botoninsertar.addEventListener("click",function(){
                    var newusuario =  {
                        identificador: input1.value,
                        admin: input2.value,
                        correo: input3.value,
                        contrasena: input4.value,
                        localizacion: input5.value,
                        imagen: input6.value,
                        nombre: input7.value
                    }
                    insertausuarios(newusuario);
            })
        }else{
            botoninsertar.addEventListener("click",function(){
                var editusuario =  {
                    id:id,
                    identificador: input1.value,
                    admin: input2.value,
                    correo: input3.value,
                    contrasena: input4.value,
                    localizacion: input5.value,
                    imagen: input6.value,
                    nombre: input7.value

                }
                editarusuario(editusuario);

            })
        }
    
            
        modal(formulario);
}
function editarusuario(editusuario){
    const ajaxedit  =  new XMLHttpRequest();
    ajaxedit.onreadystatechange = function(){
        if (ajaxedit.readyState == 4 && ajaxedit.status == 200){
        
        }
    }
    ajaxedit.open("POST","./api/participantes/actualizarparticipantes.php");
    ajaxedit.send(JSON.stringify(editusuario));
    location.reload(); 
}
function eliminarusuario(id_usuario){
    const ajaxelimi =  new XMLHttpRequest();
    ajaxelimi.onreadystatechange = function(){
        if (ajaxelimi.readyState == 4 && ajaxelimi.status == 200){
        
        }
    }
    //la id que le tengo que pasar a la api es la idband en este caso;
    var idBorrarbanda = {
        idusuario : id_usuario
    };
    
    ajaxelimi.open("POST","./api/participantes/eliminarparticipantes.php");
    ajaxelimi.send(JSON.stringify(idBorrarbanda));
}

function insertausuarios(newusuario){
  
    const ajaxinsert = new XMLHttpRequest();
    ajaxinsert.onreadystatechange = function(){
        if (ajaxinsert.readyState == 4 && ajaxinsert.status == 200){
        
        }
    }
    
    ajaxinsert.open("POST","./api/participantes/ingresarparticipantes.php");
    ajaxinsert.send(JSON.stringify(newusuario));
    location.reload(); 

}
function modal(div) {
var modal = this.document.createElement("div");
modal.setAttribute("class","div1");
document.body.appendChild(modal,titulo);

var caja = document.createElement("div");
var left = parseInt((window.innerWidth - 600) / 2) + "px";
var top = parseInt((window.innerHeight - 400) / 2) + "px";
caja.setAttribute("class","div2");
caja.style.left = left;
caja.style.top = top;

document.body.appendChild(caja);

var titulo = document.createElement("div");
titulo.setAttribute("class","div3");
titulo.innerHTML="Nuevo usuario";
caja.appendChild(titulo);

var cerrar = document.createElement("span");
cerrar.innerHTML="X";
cerrar.setAttribute("class","span1");
 cerrar.onclick=function(){
     var caja =this.parentElement.parentElement;
    caja.parentElement.removeChild(caja);
    modal.parentElement.removeChild(modal);
    location.reload();  
} 
titulo.appendChild(cerrar);

var contenido = document.createElement("div");
contenido.setAttribute("class","div5")
caja.appendChild(contenido);
contenido.appendChild(div)
}
}


