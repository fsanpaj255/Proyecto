window.addEventListener("load", function () {
    //capturamos los elementos
    const btnFoto = this.document.getElementById("btnFoto");
    const video = this.document.getElementById("video");
    const input = this.document.getElementById("inpFile");
    video.style.borderRadius = "50%";
    const canvas = document.getElementById('canvas');
    canvas.style.borderRadius = "50%";
  
  
    const constraints = {
      audio: true,
      video: {
        width: 200, height: 200
      }
    };
  
  
    // Acceder a la camara
    async function init() {
      try {
        const stream = await navigator.mediaDevices.getUserMedia(constraints);
        handleSuccess(stream);
      } catch (e) {
      }
    }
    function handleSuccess(stream) {
      window.stream = stream;
      video.srcObject = stream;
  
    }
    init();
  
    btnFoto.addEventListener("click", function (ev) {
      ev.preventDefault();
      video.style.display = "none";
      canvas.style.display = "block";
      //foto.style.display = "none";
      var ctx = canvas.getContext('2d');  
      ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

      canvas.toBlob((blob)=>{
        const file= new File([blob],"imagen.png");
        const dT=new DataTransfer();
        dT.items.add(file);
        input.files=dT.files;
      })
  
    });
  
  })