<h1 class="display-6 mt-3">Novo médico</h1>
<hr>
<form class="form-group mt-2 mb-5" id="formMedico" method="post">
  <div class="form-floating mb-3">
    <input required type="text" class="form-control" id="medicoNome" placeholder="">
    <label for="medicoNome">Nome</label>
  </div>

  <div class="form-floating mb-3">
    <input required type="number" class="form-control" id="medicoCrm" placeholder="">
    <label for="medicoCrm">Número de CRM</label>
  </div>

  <div class="form-floating mb-3">
    <input required type="text" class="form-control" id="medicoEspecialidade" placeholder="">
    <label for="medicoEspecialidade">Especialidade</label>
  </div>
  <button class="btn btn-info" type="button" onclick="addMedico()">cadastrar médico</button>
</form>