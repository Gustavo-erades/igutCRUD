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
                        <?php echo $this->Form->create('User', [
                            'id' => 'usuarioLoginAdForm',
                            'class' => 'needs-validation',
                            'novalidate' => true,
                            'type' => 'post'
                        ]); ?>
                        <div class="form-floating mb-3">
                            <?php echo $this->Form->input('username', [
                                'id' => 'username',
                                'type' => 'text',
                                'class' => 'form-control shadow-sm ',
                                'placeholder' => 'E-mail',
                                'required' => true,
                                'label' => false,
                            ]); ?>
                        </div>
                        <div class="form-floating mb-3">
                            <?php echo $this->Form->input('password', [
                                'id' => 'password',
                                'type' => 'password',
                                'class' => 'form-control shadow-sm',
                                'placeholder' => 'Senha',
                                'required' => true,
                                'label' => false
                            ]); ?>
                        </div>
                        <?php echo $this->Form->button(__('Login'), [
                            'type' => 'submit',
                            'class' => 'btn btn-info w-100 shadow-sm text-light'
                        ]); ?>
                        <?php echo $this->Form->end(); ?>
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
    <script>
        /*function entrarLogin() {
            var senha = $('#password').val();
            var login = $('#username').val();
            var data = {
                username: login,
                password: senha,
            }
            $.ajax({
                type: 'POST',
                url: '/igutCRUD/users/login/',
                data: JSON.stringify(data),
                success: (response) => {
                    response = JSON.parse(response);
                    if (response.success) {
                        console.log("Login bem-sucedido");
                        window.location.href = "/igutCRUD/"; // Redireciona após o login
                    } else {
                        console.log(response.message);
                    }
                },
                error: (response) => {
                    console.log("Erron na requisição");
                    console.log(response);
                }
            })
        }*/
    </script>
    <script defer>
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>
</html>