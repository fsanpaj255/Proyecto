var contenido = document.querySelector('#contenido')
 function traer(){
    fetch('./api/bandas/getbandas.php')
    .then(response=> response.json())
    .then(datos =>{
      // console.log(datos)
      tabla(datos)
    });
}
 function tabla(datos){
    console.log(datos)
 }