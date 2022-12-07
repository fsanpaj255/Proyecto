window.addEventListener("load",function() {
  const btncapturar = document.getElementById("btncapturar");
  const latitudx  = document.getElementById("latitudex");
  const longitudy  = document.getElementById("longitudey");

  function getLocation() {
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition);
    }else{
        alert("Tu navegador no es compatible con la geolocalización");
    }
  }
  function showPosition(position){
    latitudx.value = position.coords.latitude;
    longitudy.value = position.coords.longitude;
  }

  btncapturar.addEventListener("click", function(){
    getLocation();
  })
})

