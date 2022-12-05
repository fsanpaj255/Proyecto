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


    //anadimos la tabla a php

    //pedimos el json y el status
    let xhttp=new XMLHttpRequest();
    xhttp.open('GET','./api/bandas/getbandas.php',true);
    xhttp.send();
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200 ){
            //console.log(this.responseText);
            document.getElementById('con').innerHTML=this.responseText;
    let xhtml=new XMLHttpRequest();
    xhtml.open('GET','./api/bandas/getbandas.php',true);
    xhtml.send();
    xhtml.onreadystatechange=function(){
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

                row_2.appendChild(row_2_data_1);
                row_2.appendChild(row_2_data_2);
                row_2.appendChild(row_2_data_3);
                row_2.appendChild(row_2_data_4);
                tbody.appendChild(row_2);

            }
        }
    }
}
}

}