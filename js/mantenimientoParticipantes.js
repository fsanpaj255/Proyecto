async function getAllParticipantes(){
    let response = await fetch('./api/getparticipantes.php')
    .then(response=> response.json())
    .catch(err=>console.log('FALLASTE',err));
    let data = await JSON.parse(JSON.stringify(response));
    return data;
}

function addTable() {
    var myTableDiv = document.getElementById("listadoparticipantes")
    var table = document.createElement('TABLE')
    var tableBody = document.createElement('TBODY')
    
    table.border = '1'
    table.appendChild(tableBody);
    
    var heading = new Array();
    heading[0] = "Id"
    heading[1] = "Identificador"
    heading[2] = "Admin"
    heading[3] = "Correo"
    heading[4] = "Contraseña"
    heading[5] = "Localización"
    heading[6] = "Imagen"
    heading[7] = "Nombre"

    
    var participantes = getAllParticipantes();
    
    //header son las columnas de la tabla
    var tr = document.createElement('TR');
    tableBody.appendChild(tr);
    for (i = 0; i < heading.length; i++) {
        var th = document.createElement('TH')
        th.width = '75';
        th.appendChild(document.createTextNode(heading[i]));
        tr.appendChild(th);
    }
    
    //participantes es el json que se pliega en filas de la tabla con este for
    for (i = 0; i < participantes.length; i++) {
        var tr = document.createElement('TR');
        for (j = 0; j < participantes[i].length; j++) {
            var td = document.createElement('TD')
            td.appendChild(document.createTextNode(participantes[i][j]));
            tr.appendChild(td)
        }
        tableBody.appendChild(tr);
    }  
    myTableDiv.appendChild(table)
    }