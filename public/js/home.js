buscarAulasAssistidas()

function markAsWatched(videoId,sendRequest = true) {
    var button = document.querySelector('#watch' + videoId);
    button.classList.add('none');
    var button = document.querySelector('#watched' + videoId);
    button.classList.remove('none');
    
    if(sendRequest){
        alert('Parabéns, aula ' + videoId + ' - Concluída!');
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "/FullStack/Aula/assistir");
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
                console.log("Status atualizado com sucesso");
        };
        xhr.send("videoId=" + videoId);
    }
}


function buscarAulasAssistidas(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        let ret = [];
        try{ret = JSON.parse(xhr.responseText)}catch(e){}
        ret.forEach(element => {
            markAsWatched(element.idAula,false)
        });
    }
    xhr.open("POST", "/FullStack/Aula/aulasAssistidas");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send();
}