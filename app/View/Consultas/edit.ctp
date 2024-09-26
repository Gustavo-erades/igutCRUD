<div id="alert"></div>
<h1 class="display-5">Reagendar Consulta</h1>
<hr>
<h3 class="display-6">Paciente <?= $consultas['Paciente']['nome']; ?> </h3>
<form class="form-group mt-2 mb-5">
    <div class="form-floating mb-3">
        <input required type="date" class="form-control" id="consultaDia" placeholder="" value="<?=$consultas['Consulta']['dia']?>">
        <label for="consultaDia">Dia</label>
    </div>
    <div class="form-floating mb-3">
        <input required type="time" class="form-control" id="consultaHora" placeholder="" value="<?=$consultas['Consulta']['hora']?>">
        <label for="consultaHora">Hora</label>
    </div>
    <div class="form-floating mb-3">
        <select id="selectMedico" class="form-control">
            <option value="<?=$consultas['Consulta']['medico_id']?>" selected><?=$consultas['Medico']['nome']?></option>
            <?php foreach($medicos as $id=>$nome): ?>
                <option value="<?=$id?>"><?=$nome?></option>
            <?php endforeach; ?>
        </select>
        <label for="selectMedico">Médico</label>
    </div>
    <div class="form-floating mb-3">
        <select id="selectPaciente" class="form-control">
        <option value="<?=$consultas['Consulta']['paciente_id']?>" selected><?=$consultas['Paciente']['nome']?></option>
            <?php foreach($pacientes as $id=>$nome): ?>
                <option value="<?=$id?>"><?=$nome?></option>
            <?php endforeach; ?>
        </select>
        <label for="selectPaciente">Paciente</label>
    </div>
    <div class="form-floating mb-3">
        <select id="selectConvenio" class="form-control">
        <option value="<?=$consultas['Consulta']['convenio_id']?>" selected><?=$consultas['Convenio']['nome']?></option>
            <?php foreach($convenios as $id=>$nome): ?>
                <option value="<?=$id?>"><?=$nome?></option>
            <?php endforeach; ?>
        </select>
        <label for="selectConvenio">Convenio</label>
    </div>
    <div class="form-floating mb-3">
        <select id="selectAtendimento" class="form-control">
        <option value="<?=$consultas['Consulta']['atendimento_id']?>" selected><?=$consultas['Atendimento']['nome']?></option>
            <?php foreach($atendimentos as $id=>$nome): ?>
                <option value="<?=$id?>"><?=$nome?></option>
            <?php endforeach; ?>
        </select>
        <label for="selectAtendimento">Atendimento</label>
    </div>
    <button class="btn btn-info" type="button" onclick="editConsulta(<?=$consultas['Consulta']['id']?>)" >Regendar consulta</button>
</form>