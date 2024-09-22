<h1 class="display-6 mt-3">Agendar consulta</h1>
<form class="form-group mt-2 mb-5">
    <div class="form-floating mb-3">
        <input required type="date" class="form-control" id="consultaDia" placeholder="">
        <label for="consultaDia">Dia</label>
    </div>
    <div class="form-floating mb-3">
        <input required type="time" class="form-control" id="consultaHora" placeholder="">
        <label for="consultaHora">Hora</label>
    </div>
    <div class="form-floating mb-3">
        <select id="selectMedico" class="form-control">
            <?php foreach($medicos as $id=>$nome): ?>
                <option value="<?=$id?>"><?=$nome?></option>
            <?php endforeach; ?>
        </select>
        <label for="selectMedico">Médico</label>
    </div>
    <div class="form-floating mb-3">
        <select id="selectPaciente" class="form-control">
            <?php foreach($pacientes as $id=>$nome): ?>
                <option value="<?=$id?>"><?=$nome?></option>
            <?php endforeach; ?>
        </select>
        <label for="selectPaciente">Paciente</label>
    </div>
    <div class="form-floating mb-3">
        <select id="selectConvenio" class="form-control">
            <?php foreach($convenios as $id=>$nome): ?>
                <option value="<?=$id?>"><?=$nome?></option>
            <?php endforeach; ?>
        </select>
        <label for="selectConvenio">Convenio</label>
    </div>
    <div class="form-floating mb-3">
        <select id="selectAtendimento" class="form-control">
            <?php foreach($atendimentos as $id=>$nome): ?>
                <option value="<?=$id?>"><?=$nome?></option>
            <?php endforeach; ?>
        </select>
        <label for="selectAtendimento">Atendimento</label>
    </div>
    <button class="btn btn-info" type="button" onclick="addConsulta()" >Agendar consulta</button>
</form>