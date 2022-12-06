window.addEventListener("load", function () {

    var nuevo = document.getElementById("añadir");

    nuevo.onclick = function () {
        //Creamos los elementos


        let formulario=document.createElement("form");
        let titulo=document.createElement("label");

        let table = document.createElement("table");
        table.setAttribute("class","styled-table");

        //Distancia
        let tr1 = document.createElement("tr");

        let td1 = document.createElement("td");
        let label1 = document.createElement("label");

        let td2 = document.createElement("td");
        let input1 = document.createElement("input");

         //Rangomin
         let tr2 = document.createElement("tr");

         let td3 = document.createElement("td");
         let label2 = document.createElement("label");
 
         let td4 = document.createElement("td");
         let input2 = document.createElement("input");

          //Rangomax
        let tr3 = document.createElement("tr");

        let td5 = document.createElement("td");
        let label3 = document.createElement("label");

        let td6 = document.createElement("td");
        let input3 = document.createElement("input");

        //boton
        let boton=document.createElement("input");
 
        
        //Asignar atributos al objeto formulario
        formulario.setAttribute('method', "post");
        formulario.setAttribute('action', "#");
       
 
            //Atributos  distancia
            label1.innerHTML = "Distancia";
            input1.setAttribute('type', "text");
            input1.setAttribute('name', "distancia");
 
            //Atributos  rango minimo
            label2.innerHTML= "Rango mínimo";
            input2.setAttribute('id', "contrasena");
            input2.setAttribute('name', "rangomin");
 
            //Atributos  rango maximo
            label3.innerHTML= "Rango máximo";
            input3.setAttribute('type', "text");
            input3.setAttribute('name', "rangomax");
        
            ////Asignar atributos al objeto boton
            boton.setAttribute('type', "submit");	
            boton.setAttribute('value', "Añadir");
            boton.setAttribute("class","button-azul");
            //boton.setAttribute('onclick', "alert('Se ha añadido un nuevo bandas')");
 
            titulo.innerHTML='<h1>Bandas</h1>';
            formulario.appendChild(table);

            //unimos distancia
            table.appendChild(tr1);
            tr1.appendChild(td1);
            td1.appendChild(label1);
            tr1.appendChild(td2);
            td2.appendChild(input1);

             //unimos rangomin
             table.appendChild(tr2);
             tr1.appendChild(td3);
             td1.appendChild(label2);
             tr1.appendChild(td4);
             td2.appendChild(input2);

              //unimos rangomax
            table.appendChild(tr3);
            tr1.appendChild(td5);
            td1.appendChild(label3);
            tr1.appendChild(td6);
            td2.appendChild(input3);

            titulo.innerHTML='<h1>Bandas</h1>';
            formulario.appendChild(boton);
            document.getElementById('cuerpo').appendChild(formulario);//Agregar el formulario a la etiqueta con el ID		
            
        modal(formulario);
    }

})
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
    cerrar.setAttribute("class","span1")
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