<!-- app/View/Users/add.ctp -->
<div class="container-fluid bg-info">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div>
            <div style="width:30em;padding:20px" class="card shadow-lg">
                <div>
                    <h1 class="display-6 mb-3">Cadastro</h1>
                </div>
                <div>
                    <form>
                        <div class="form-floating mb-3">
                            <input type="text" id="email" id="email" name="login" class="form-control shadow-sm"
                                placeholder="" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" id="senha" name="senha" class="form-control shadow-sm" placeholder=""
                                required>
                            <label for="senha">Senha</label>
                        </div>
                        <button type="button" onclick="cadastrarUser()" class="btn btn-info shadow-sm">
                            cadastrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function cadastrarUser(){
        var email=$('#senha').val();
        var senha=$('#email').val();
        data=[
            username:email,
            password:senha
        ];
        $.ajax({
            type:'POST',
            url:'http://localhost/igutCRUD/users/add/',
            data:JSON.stringify(data),
            success:(response)=>{
                console.log("cadastrado! "+response);
            },
            error:(response)=>{
                console.log("Erro ao cadastrar! "+response)
            }
        })
    }
</script>