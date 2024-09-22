<div class="mt-3 d-flex justify-content-center bg-info bg-opacity-10 border border-info  rounded-start rounded-end">
    <h1 class="display-4">
        <?php echo $pacientes['Paciente']['nome'] ?>
    </h1>
</div>
<div class="mt-3">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <h4 class="text-info">Nascimento:</h4>
            <span class="fs-4">
                <?php 
        echo date('d/m/Y',strtotime($pacientes['Paciente']['dt_nasc']));
    ?>
            </span>
        </li>
        <li class="list-group-item">
            <h4 class="text-info">CPF:</h4>
            <span class="fs-4">
                <?php 
        echo $pacientes['Paciente']['cpf']
    ?>
            </span>
        </li>
        <li class="list-group-item">
            <h4 class="text-info">Contato:</h4>
            <span class="fs-4">
                <?php 
        echo $pacientes['Paciente']['telefone']
    ?>
            </span>
        </li>
</div>