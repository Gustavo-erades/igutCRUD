<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clínicas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-info">
		<div class="container-fluid">
			<a class="navbar-brand" href="#" id="getHome">Home</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
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
					<li class="nav-item">
						<a class="nav-link" href="#" id="logout" onclick="sair()">Sair</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<?php echo $this->fetch('content'); ?>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

	<script src="js/app_chamadas.js"></script>
	<script src="js/app_del.js"></script>
	<script src="js/app_add.js"></script>
	<script src="js/app_edit.js"></script>
	<script src="js/app_paginacao.js"></script>
	<script src="js/app_login.js"></script>
	<script src="js/app_msg.js"></script>
</body>

</html>