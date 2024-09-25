/*function entrarLogin() {
    var senha = $('#senha').val();
    var login = $('#email').val();
    var data = {
        login: login,
        senha: senha,
    }
    $.ajax({
        type: 'POST',
        url: 'users/login/',
        data: data,
        dataType: 'json',
        success: (response) => {
            console.log("sucesso, " + JSON.stringify(response, null, 2));
        },
        error: (response) => {
            console.log("erro, " + JSON.stringify(response, null, 2));
        }
    })
}*/
function sair() {
    $.ajax({
        method: "POST",
        url: "users/logout",
        success: function(response) {
            window.location.href = 'http://localhost/igutCRUD/';
        },
        error: function(response) {
            console.log("Erro ao tentar fazer logout");
        }
    })

}