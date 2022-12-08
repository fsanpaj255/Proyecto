window.addEventListener("load", function () {

    var nuevo = document.getElementById("añadir");

    nuevo.onclick = function () {
        //Creamos los elementos

        let body = document.createElement("body");
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

        //boton
            let boton=document.createElement("input");
        

       
 
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
            boton.setAttribute('type', "submit");	
            boton.setAttribute('value', "ingresar");
            boton.setAttribute("class","button-azul");
            //boton.setAttribute('onclick', "alert('Se ha añadido un nuevo bandas')");
 
          
            
            //Unimos todo
            body.appendChild(formulario);
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

            boton.addEventListener("click",function(e){
              e.preventDefault();
              const url = "./api/bandas/ingresarbandas.php";
              const data = new FormData();

              const distancia = document.getElementById("distancia").value;
              const rangomin = document.getElementById("rangomin").value;
              const rangomax = document.getElementById("rangomax").value;

              data.append('distancia',distancia);
              data.append('rangomin',rangomin);
              data.append('rangomax',rangomax);

              fetch(url,{method:'POST',body:data});
            })
            
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