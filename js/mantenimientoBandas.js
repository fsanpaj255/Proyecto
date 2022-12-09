
window.onload = function(){
    //creamos la tabla
    let table = document.createElement('table');
    table.setAttribute("class","styled-table")
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
encabezado_2.innerHTML = "Distancia";
let encabezado_3 = document.createElement('th');
encabezado_3.innerHTML = "Rango Mínimo";
let encabezado_4 = document.createElement('th');
encabezado_4.innerHTML = "Rango Máximo";
let encabezado_5 = document.createElement('th');
encabezado_5.innerHTML = "Editar";
let encabezado_6 = document.createElement('th');
encabezado_6.innerHTML = "Eliminar";

fila_1.appendChild(encabezado_1);
fila_1.appendChild(encabezado_2);
fila_1.appendChild(encabezado_3);
fila_1.appendChild(encabezado_4);
fila_1.appendChild(encabezado_5);
fila_1.appendChild(encabezado_6);
thead.appendChild(fila_1);

    //pedimos el json y el status
    let ajax=new XMLHttpRequest();
    ajax.open('GET','./api/bandas/getbandas.php',true);
    ajax.send();
    ajax.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200 ){
            //console.log(this.responseText);
            document.getElementById('con').innerHTML=this.responseText;
    let ajax=new XMLHttpRequest();
    ajax.open('GET','./api/bandas/getbandas.php',true);
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
                row_2_data_2.innerHTML = data[i].distancia;
                let row_2_data_3 = document.createElement('td');
                row_2_data_3.innerHTML = data[i].rangoMin;
                let row_2_data_4 = document.createElement('td');
                row_2_data_4.innerHTML = data[i].rangoMax;
                //Editar
                let row_2_data_5 = document.createElement('td');
                let aeditar = document.createElement('span');
                let imgedit = document.createElement('img');
                imgedit.setAttribute("src","./source/editar.png");
                imgedit.setAttribute("class","editele")
                row_2_data_5.appendChild(aeditar);
                aeditar.appendChild(imgedit);
                 
                
                //Eliminar
                let row_2_data_6 = document.createElement('td');
                let aeliminar = document.createElement('span');
                let imgeliminar = document.createElement('img');
                imgeliminar.setAttribute("src","./source/borrarphp.png");
                imgeliminar.setAttribute("class","editele")
                row_2_data_6.appendChild(aeliminar);
                aeliminar.appendChild(imgeliminar)

                row_2.appendChild(row_2_data_1);
                row_2.appendChild(row_2_data_2);
                row_2.appendChild(row_2_data_3);
                row_2.appendChild(row_2_data_4);
                row_2.appendChild(row_2_data_5);
                row_2.appendChild(row_2_data_6);
                tbody.appendChild(row_2);

            }
        }
    }
}
}
var buttonanadir = this.document.getElementById("anadir");

    buttonanadir.onclick = function (){
    //Creamos los elementos

    let formulario=document.createElement("form"); 

    //ESTOESUNPOCODESEPARACIONTRAMPA
    let espacio1 = document.createElement("br");
    let espacio2 = document.createElement("br");
    let espacio3 = document.createElement("br");

    //Distancia
    let label1 = document.createElement("label");
    let input1 = document.createElement("input");

     //Rangomin
     let label2 = document.createElement("label");
     let input2 = document.createElement("input");

      //Rangomax

    let label3 = document.createElement("label");
    let input3 = document.createElement("input");

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
        document.getElementById('formulario').appendChild(formulario);
     

        botoninsertar.addEventListener("click",function(){
                var newbanda =  {
                    distancia: input1.value,
                    rangomin: input2.value,
                    rangomax: input3.value
                }
                insertabandas(newbanda);
        })
        
    modal(formulario); 
}
function insertabandas(newbanda){
   

    const formData = new FormData();
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

