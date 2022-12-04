async function getAllBandas(){
    let response = await fetch('./api/getbandas.php')
    .then(response=> response.json())
    .catch(err=>console.log('FALLASTE',err));
    let data = await JSON.parse(JSON.stringify(response));
    return data;
    console.log(data);
}

function addTable() {
    var myTableDiv = document.getElementById("listadobandas")
    var table = document.createElement('table')
    var tableBody = document.createElement('tbody')
    
    table.border = '1'
    table.appendChild(tableBody);
    
    var columna = new Array();
    columna[0] = "Id"
    columna[1] = "Distancia"
    columna[2] = "Rango Mínimo"
    columna[3] = "Rango Máximo"

    
    var bandas =  getAllBandas();

    
    //header son las columnas de la tabla
    var tr = document.createElement('TR');
    tableBody.appendChild(tr);
    for (i = 0; i < columna.length; i++) {
        var th = document.createElement('TH')
        th.width = '75';
        th.appendChild(document.createTextNode(columna[i]));
        tr.appendChild(th);
    }
    
    //bandas es el json que se pliega en filas de la tabla con este for
    for (i = 0; i < bandas.length; i++) {
        var tr = document.createElement('TR');
        for (j = 0; j < bandas[i].length; j++) {
            var td = document.createElement('TD')
            td.appendChild(document.createTextNode(bandas[i][j]));
            tr.appendChild(td)
        }
        tableBody.appendChild(tr);
    }  
    myTableDiv.appendChild(table)
    }