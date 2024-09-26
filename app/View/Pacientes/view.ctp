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
                    $dadoCpf=$pacientes['Paciente']['cpf'];
                    $dadoFormatadoCpf=sprintf('%s.%s.%s-%s', substr($dadoCpf, offset: 0, length: 3), substr($dadoCpf, 3, 3), substr($dadoCpf,5,3),substr($dadoCpf,8,2));
                    echo $dadoFormatadoCpf;
                ?>
            </span>
        </li>
        <li class="list-group-item">
            <h4 class="text-info">Contato:</h4>
            <span class="fs-4">
                <?php 
                    $dado=$pacientes['Paciente']['telefone'];
                    $dadoFormatado=sprintf('(%s) %s-%s', substr($dado, offset: 0, length: 2), substr($dado, 2, 5), substr($dado, 7));
                    echo $dadoFormatado;
                ?>
            </span>
        </li>
    </ul>
</div>