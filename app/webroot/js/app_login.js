function entrarLogin(){
    var senha =$('#senha').val();
    var login =$('#email').val();
    var data={
        login:login,
        senha:senha,
    }
    $.ajax({
        type:'POST',
        url: 'users/login/',
        data: data, 
        dataType: 'json',
        success: (response) => {
            if (response.success) {
                getConsultas(); // Atualiza o conteúdo
            } 
        }, 
        error: (response) => {
            console.log("error");
            console.log(data);
            getConsultas();
        }
    })
}