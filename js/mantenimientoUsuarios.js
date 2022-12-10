window.onload = function(){
    //creamos la tabla
    let table = document.createElement('table');
    table.setAttribute("class","styled-table");
    let thead = document.createElement('thead');
    let tbody = document.createElement('tbody');

    table.appendChild(thead);
    table.appendChild(tbody);
     //anadimos la tabla a php

    document.getElementById('cuerpo').appendChild(table);

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
            //console.log(this.responseText);
            document.getElementById('conuser').innerHTML=this.responseText;
    let ajax=new XMLHttpRequest();
    ajax.open('GET','./api/participantes/getparticipantes.php',true);
    ajax.send();
    ajax.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            console.log(this.responseText);
            let data=JSON.parse(this.responseText);
            //console.log(data);
            con.innerHTML='';
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
                    eliminarbanda(celdaid.innerText);
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
        //me he quedado cambiando codigo aqui
    
        //Distancia
        let label1 = document.createElement("label");
        let input1 = document.createElement("input");
        input1.value = distancia;
    
         //Rangomin
         let label2 = document.createElement("label");
         let input2 = document.createElement("input");
         input2.value = rangomin;
          //Rangomax
    
        let label3 = document.createElement("label");
        let input3 = document.createElement("input");
        input3.value = rangomax;
        //atributos de formulario
        formulario.setAttribute('method', "post");
        formulario.setAttribute('action', "#");
        formulario.setAttribute('id','form');
        //boton
            let botoninsertar=document.createElement("input");
        
            //Atributos  distancia
            label1.innerHTML = "Distancia";
            input1.setAttribute('type', "text");
            input1.setAttribute('name', "distancia");
            input1.setAttribute('id', "distancia");
    
            //Atributos  rango minimo
            label2.innerHTML= "Rango mínimo";
            input2.setAttribute('type', "text");
            input2.setAttribute('name', "rangomin");
            input1.setAttribute('id', "rangomin");
    
            //Atributos  rango maximo
            label3.innerHTML= "Rango máximo";
            input3.setAttribute('type', "text");
            input3.setAttribute('name', "rangomax");
            input1.setAttribute('id', "rangomax");
        
            ////Asignar atributos al objeto boton
            botoninsertar.setAttribute('type', "button");	
            botoninsertar.setAttribute('value', "ingresar");
            botoninsertar.setAttribute("class","button-azul");
            botoninsertar.setAttribute('onclick', "location.reload()");
            
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
            formulario.appendChild(botoninsertar);
            document.getElementById('formulariouser').appendChild(formulario);
         
           if(id == 0){
            botoninsertar.addEventListener("click",function(){
                    var newbanda =  {
                        distancia: input1.value,
                        rangomin: input2.value,
                        rangomax: input3.value
                    }
                    insertabandas(newbanda);
            })
        }else{
            botoninsertar.addEventListener("click",function(){
                var editbanda =  {
                    id:id,
                    distancia: input1.value,
                    rangomin: input2.value,
                    rangomax: input3.value
                }
                editarbanda(editbanda);

            })
        }
    
            
        modal(formulario);
}
function editarbanda(editbanda){
    const ajaxedit  =  new XMLHttpRequest();
    ajaxedit.onreadystatechange = function(){
        if (ajaxedit.readyState == 4 && ajaxedit.status == 200){
        
        }
    }
    ajaxedit.open("POST","./api/bandas/actualizarbandas.php");
    ajaxedit.send(JSON.stringify(editbanda));
}
function eliminarbanda(id_banda){
    const ajaxelimi =  new XMLHttpRequest();
    ajaxelimi.onreadystatechange = function(){
        if (ajaxelimi.readyState == 4 && ajaxelimi.status == 200){
        
        }
    }
    //la id que le tengo que pasar a la api es la idband en este caso;
    var idBorrarbanda = {
        idbanda : id_banda
    };
    
    ajaxelimi.open("POST","./api/bandas/eliminabandas.php");
    ajaxelimi.send(JSON.stringify(idBorrarbanda));
}

function insertabandas(newbanda){
   
    const ajaxinsert = new XMLHttpRequest();
    ajaxinsert.onreadystatechange = function(){
        if (ajaxinsert.readyState == 4 && ajaxinsert.status == 200){
        
        }
    }
 
    ajaxinsert.open("POST","./api/bandas/ingresarbandas.php");
    ajaxinsert.send(JSON.stringify(newbanda));
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
titulo.innerHTML="Nueva Banda";
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
contenido.setAttribute("class","div4")
caja.appendChild(contenido);
contenido.appendChild(div)
}
}


