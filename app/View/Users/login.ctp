<nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" id="getHome">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#" id="getMedicos">Médicos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="getPacientes">Pacientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="getAtendimentos">Atendimentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="getConvenios">Convênios</a>
                </li>
                <li class="nav-item"></li>
                <a class="nav-link" href="#" id="logout">LogOut</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div id="mainContent">
        <div class="mt-5">
        <h1 class="display-6 mb-3">Login</h1>
        <form>
            <div class="form-floating mb-3">
                <input type="text" id="email" id="email" name="email" class="form-control shadow-sm" placeholder="" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" id="senha" name="senha" class="form-control shadow-sm" placeholder="" required>
                <label for="senha">Senha</label>
            </div>
            <button type="button" onclick="entrarLogin()" class="btn btn-info shadow-sm">
                entrar
            </button>
        </form>
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="http://localhost/igutCRUD/app/webroot/js/app_chamadas.js"></script>
<script src="http://localhost/igutCRUD/app/webroot/js/app_del.js"></script>
<script src="http://localhost/igutCRUD/app/webroot/js/app_add.js"></script>
<script src="http://localhost/igutCRUD/app/webroot/js/app_edit.js"></script>
<script src="http://localhost/igutCRUD/app/webroot/js/app_paginacao.js"></script>
<script src="http://localhost/igutCRUD/app/webroot/js/app_login.js"></script>
<script src="js/app_chamadas.js"></script>