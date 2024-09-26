function sair() {
    $.ajax({
        method: "POST",
        url: "users/logout",
        success:()=>{
            console.log("sucesso");
            window.location.href="/igutCRUD/";
        },
        error:()=>{
            console.log("erro");
        }
    })
}