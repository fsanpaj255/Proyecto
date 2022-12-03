async function getAllParticipantes(){
    let response = await fetch('./api/getparticipantes.php')
    .then(response=> response.json())
    .catch(err=>console.log('FALLASTE',err));
    let data = await JSON.parse(JSON.stringify(response));
    return data;
    console.log(data);
}

function addTable() {
    var myTableDiv = document.getElementById("listadoparticipantes")
    var table = document.createElement('TABLE')
    var tableBody = document.createElement('TBODY')
    
    table.border = '1'
    table.appendChild(tableBody);
    
    var columna = new Array();
    columna[0] = "Id"
    columna[1] = "Identificador"
    columna[2] = "Admin"
    columna[3] = "Correo"
    columna[4] = "Contraseña"
    columna[5] = "Localización"
    columna[6] = "Imagen"
    columna[7] = "Nombre"

    
    var participantes =  getAllParticipantes();
    console.log(participantes);
    
    //header son las columnas de la tabla
    var tr = document.createElement('TR');
    tableBody.appendChild(tr);
    for (i = 0; i < columna.length; i++) {
        var th = document.createElement('TH')
        th.width = '75';
        th.appendChild(document.createTextNode(columna[i]));
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