<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clínicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid bg-info">
        <div id="alert"></div>
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div>
                <div style="width:30em;padding:20px" class="card shadow-lg">
                    <div>
                        <h1 class="display-6 mb-3">Cadastro de Usuário</h1>
                    </div>
                    <div>
                        <form>
                            <div class="form-floating mb-3">
                                <input type="text" id="email" name="login" class="form-control shadow-sm" placeholder=""
                                    required>
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" id="senha" name="senha" class="form-control shadow-sm"
                                    placeholder="" required>
                                <label for="senha">Senha</label>
                            </div>
                            <button type="button" onclick="cadastrarUser()" class="btn btn-info shadow-sm w-100 text-light">
                                cadastrar
                            </button>
                        </form>
                        <div class="mt-3">
                            <p>Já possui cadastro?
                                <a href="http://localhost/igutCRUD/">Faça seu login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var alerta = document.querySelector("#alert");

        function contemArroba(str) {
            return str.includes('@');
        }
        function novoAlerta(texto) {
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

        function cadastrarUser() {
            var email = $('#email').val();
            var senha = $('#senha').val();
            if (email != '' && senha != '') {
                if (senha.length >= 8 && contemArroba(email)) {
                    data = {
                        username: email,
                        password: senha
                    }
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/igutCRUD/users/add/',
                        contentType: 'application/json',
                        data: JSON.stringify(data),
                        success: (response) => {
                            window.location.href = "/igutCRUD/"
                        },
                        error: (response) => {
                            console.log("Erro ao cadastrar!")
                        }
                    })
                } else {
                    var emailCampo = document.querySelector("#email");
                    emailCampo.style.borderColor = "red";
                    var senhaCampo = document.querySelector("#senha");
                    senhaCampo.style.borderColor = "red";
                    if(senha.length<8){
                        novoAlerta("A senha deve conter no mínimo 8 caracteres");
                    }
                    if(!contemArroba(email)){

                        novoAlerta("O Email deve ser um email válido! exemplo@email.com")
                    }
                }
            } else {
                var emailCampo = document.querySelector("#email");
                emailCampo.style.borderColor = "red";
                var senhaCampo = document.querySelector("#senha");
                senhaCampo.style.borderColor = "red";
                novoAlerta("Por favor, preencha todos os campos.");
            }
        }
    </script>
</body>