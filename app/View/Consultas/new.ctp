<h1 class="display-6 mt-3">Agendar consulta</h1>
<form class="form-group mt-2 mb-5">
    <div class="form-floating mb-3">
        <input required type="date" class="form-control" id="consultaDia" placeholder="">
        <label for="consultaDia">Dia</label>
    </div>
    <div class="form-floating mb-3">
        <input required type="time" class="form-control" id="consultaTime" placeholder="">
        <label for="consultaTime">Hora</label>
    </div>
    <div class="mb-3">
        <?php
        echo $this->Form->input('Médico', array(
            'type' => 'select',
            'class' => 'form-control',
            'options' => $medicos
        ))
        ?>
    </div>
    <div class="form-floating mb-3">
        <input required type="select" class="form-control" id="pacientesNome" placeholder="">
        <label for="pacientesNome">Paciente</label>
    </div>
    <div class="form-floating mb-3">
        <input required type="select" class="form-control" id="atendimentosNome" placeholder="">
        <label for="atendimentosNome">Atendimento</label>
    </div>
    <div class="form-floating mb-3">
        <input required type="select" class="form-control" id="conveniosNome" placeholder="">
        <label for="conveniosNome">Convenio</label>
    </div>
    <button class="btn btn-info" type="button">Agendar consulta</button>
</form>