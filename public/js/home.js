function markAsWatched(videoId,sendRequest = false) {
    var button = document.querySelector('#watch' + videoId);
    button.classList.add('none');
    var button = document.querySelector('#watched' + videoId);
    button.classList.remove('none');
    button.innerText = 'Assistido';
    alert('Parabéns, aula ' + videoId + ' - Concluída!');
    
    // Enviar a informação para o servidor
    if(sendRequest){
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update_status.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                console.log("Status atualizado com sucesso");
            }
        };
        xhr.send("video_id=" + videoId + "&status=Assistido");
    }
}