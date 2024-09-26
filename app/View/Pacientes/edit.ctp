<div id="alert"></div>
<h1 class="display-6 mt-3">Atualizar Paciente</h1>
<hr>
<div class="form-group mt-2 mb-5">
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="pacienteNome" placeholder="" value="<?=$pacientes['Paciente']['nome']?>">
    <label for="pacienteNome">Nome</label>
  </div>

  <div class="form-floating mb-3">
    <input type="number" class="form-control" id="pacienteCpf" placeholder=""  value="<?=$pacientes['Paciente']['cpf']?>">
    <label for="pacienteCpf">CPF</label>
  </div>

  <div class="form-floating mb-3">
    <input type="tel" class="form-control" id="pacienteTelefone" placeholder=""  value="<?=$pacientes['Paciente']['telefone']?>">
    <label for="pacienteTelefone">Telefone</label>
  </div>

  <div class="form-floating mb-3">
 
    <input type="date" class="form-control" id="pacienteNascimento" placeholder="" value="<?=$pacientes['Paciente']['dt_nasc']?>">
    <label for="pacienteNascimento">Nascimento</label>
  </div>

  <button class="btn btn-info" type="button" onclick="editPaciente(<?=$pacientes['Paciente']['id']?>)">Salvar Alterações</button>
</div>