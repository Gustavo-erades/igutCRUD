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
                        <h1 class="display-6 mb-3">Login</h1>
                    </div>
                    <div>
                        <form action="/igutCRUD/users/login" id="usuarioLoginAdForm" class="needs-validation" novalidate="novalidate"
                            method="post" accept-charset="utf-8">
                            <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>
                            <div class="form-floating mb-3">
                                <input name="data[User][username]" id="username"
                                    class="form-control shadow-sm " placeholder="E-mail" required="required" maxlength="50" type="text" />
                                <label for="username">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="data[User][password]" id="password"
                                    class="form-control shadow-sm" placeholder="Senha" required="required" type="password" />
                                <label for="password">Senha</label>
                            </div>
                            <button type="submit" class="btn btn-info w-100 shadow-sm text-light">Login</button>
                        </form>
                        <div class="mt-3">
                            <p>Não possui uma conta?
                                <a href="http://localhost/igutCRUD/users/add">Faça seu cadastro</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <script defer>
        var alerta = document.querySelector("#alert");

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
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation');
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('erro') && urlParams.get('erro') === 'error') {
                novoAlerta("Usuário ou senha incorretos! Tente novamente.");
                urlParams.delete('erro');
                window.history.replaceState({}, document.title, 'http://localhost/igutCRUD/');
            }
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                        novoAlerta("Preencha os campos para efetuar login!");
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

</body>

</html>