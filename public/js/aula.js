let buscou = false

buscarAulasMaisAssistidas()

function montaRow(row){
    const table = document.getElementById('table')

    let tr = document.createElement('tr')
    tr.setAttribute("scope","row")
    let tdAula = document.createElement('td')
    let tdVisualizacoes = document.createElement('td')

    tdAula.innerText = row.idAula
    tdVisualizacoes.innerText = row.visualizacoes

    tr.appendChild(tdAula)
    tr.appendChild(tdVisualizacoes)

    table.appendChild(tr)
    
}

function buscarAulasMaisAssistidas(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        let ret = [];
        try
        {
            ret = JSON.parse(xhr.responseText)
            if(buscou == false){
                ret.forEach(element => {
                    montaRow(element)
                });
            }
        buscou = true
        }catch(e){}
    
    }
    xhr.open("GET", "/FullStack/Aula/aulasMaisAssistidas/buscar");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send();
}