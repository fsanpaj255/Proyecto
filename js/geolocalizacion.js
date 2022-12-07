window.addEventListener("load",function() {
    const capturarbtn = document.getElementsById("loclbtn");
    const latitudcmp = document.getElementsById("latitu");
    const longitudcmp = document.getElementsById("localizacio");


    function getLocation(){
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        }else{
            alert ("ALGO SALIO MAL WEY");
        }
        }
        function showPosition(position) {
            latitudcmp.value = position.coords.latitude;
            longitudcmp.value = position.coords.longitude;
        }
        capturarbtn.addEventListener("click",function(){
            getLocation();
        })
})

