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
            console.log("sucesso, "+JSON.stringify(response, null, 2));

           /* if (response.success) {
                getConsultas(); 
            } */
        }, 
        error: (response) => {
            console.log("erro, "+JSON.stringify(response, null, 2));
           /*
            if (response.error) {
                getConsultas(); 
            }*/
            /*
            alert("erro!");
            console.log(data);*/
        }
    })
}