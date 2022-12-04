window.onload = function(){
let boton=document.getElementById('botonListaBandas');
boton.onclick=function(){
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
                let con=document.getElementById('loseleccionado');
                //console.log(data[i].nombre);
                con.innerHTML=con.innerHTML+
                '<tr>'+
                '<td>'+data[i].id+'</th>'+
                '<td>'+data[i].distancia+'</td>'+
                '<td>'+data[i].rangoMin+'</td>'+
                '<td>'+data[i].rangoMax+'</td>'+
                '</tr>';

            }
        }
    }
}
}
}
}