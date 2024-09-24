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
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div>
                <div style="width:30em;padding:20px" class="card shadow-lg">
                    <div>
                        <h1 class="display-6 mb-3">Login</h1>
                    </div>
                    <div>
                        <?php /* echo $this->Session->flash('auth'); */ ?>
                        <form>
                            <div class="form-floating mb-3">
                                <input type="text" id="email" id="email" name="login" class="form-control shadow-sm"
                                    placeholder="" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" id="senha" name="senha" class="form-control shadow-sm"
                                    placeholder="" required>
                                <label for="senha">Senha</label>
                            </div>
                            <button type="button" onclick="entrarLogin()" class="btn btn-info shadow-sm">
                                entrar
                            </button>
                        </form>
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

    <script>
        function entrarLogin() {
            var senha = $('#senha').val();
            var login = $('#email').val();
            var data = {
                login: login,
                senha: senha,
            }
            $.ajax({
                type: 'POST',
                url: '/igutCRUD/users/login/',
                data: JSON.stringify(data),
                success: (response) => {
                    console.log("sucesso, " + JSON.stringify(response, null, 2));
                    window.location.href = "/igutCRUD/";
                    /* if (response.success) {
                         getConsultas(); 
                     } */
                },
                error: (response) => {
                    console.log("erro, " + JSON.stringify(response, null, 2));
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
    </script>
</body>

</html>