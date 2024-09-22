<h1 class="display-6 mt-3">Atualizar médico</h1>
<hr>
<form class="form-group mt-2 mb-5" id="formMedico" method="post">
    <div class="form-floating mb-3">
        <input required type="text" class="form-control" id="medicoNome" placeholder="" value="<?= $medicos["Medico"]['nome'] ?>">
        <label for="medicoNome">Nome</label>
    </div>

    <div class="form-floating mb-3">
        <input required type="number" class="form-control" id="medicoCrm" placeholder=""  value="<?= $medicos["Medico"]['crm'] ?>">
        <label for="medicoCrm">Número de CRM</label>
    </div>

    <div class="form-floating mb-3">
        <input required type="text" class="form-control" id="medicoEspecialidade" placeholder="" value="<?= $medicos["Medico"]['especialidade'] ?>">
        <label for="medicoEspecialidade">Especialidade</label>
    </div>
    <button class="btn btn-info" type="button" onclick="editMedico(<?=$medicos['Medico']['id']?>)">atualizar médico</button>
</form>