function novoAlertaErro(texto) {
    var alerta=document.querySelector("#alert")
    console.log(alerta);
    alerta.innerHTML = '';
    const novoAlerta = document.createElement('div');
    novoAlerta.className = 'alert alert-danger d-grid col-6 offset-3';
    novoAlerta.role = 'alert';
    novoAlerta.style.position = 'absolute';
    novoAlerta.style.zIndex = '1000';
    novoAlerta.textContent = texto;
    alerta.appendChild(novoAlerta);
    showAlert();
}
function showAlert() {
    $('#alert').fadeIn().delay(3000).fadeOut();
}