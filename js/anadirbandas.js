window.addEventListener("load", function () {

    var nuevo = document.getElementById("añadir");

    nuevo.onclick = function () {
        //Creamos los elementos


        let formulario=document.createElement("form");
        let titulo=document.createElement("label");

        //ESTOESUNPOCODESEPARACIONTRAMPA
        let espacio1 = document.createElement("br");
        let espacio2 = document.createElement("br");
        let espacio3 = document.createElement("br");

        //Distancia
        let label1 = document.createElement("label");

        let input1 = document.createElement("input");

         //Rangomin
         let label2 = document.createElement("label");
 
         let td4 = document.createElement("td");
         let input2 = document.createElement("input");

          //Rangomax

        let label3 = document.createElement("label");

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