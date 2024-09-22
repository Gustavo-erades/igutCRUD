<h1 class="display-6 mt-3">Pacientes cadastrados</h1>
<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Nascimento</th>
        <th>Cadastrar</th>
    </tr>
    <?php foreach ($pacientes as $paciente): ?>
        <tr>
            <td><?php echo $paciente['Paciente']['id']; ?></td>
            <td>
                <a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" onclick="getPaciente(<?= $paciente['Paciente']['id'] ?>)">
                    <?= $paciente['Paciente']['nome'] ?>
                </a>
            </td>
            <td><?php echo $paciente['Paciente']['cpf']; ?></td>
            <td><?php echo $paciente['Paciente']['telefone']; ?></td>
            <td><?php echo date('d/m/Y', strtotime($paciente['Paciente']['dt_nasc'])); ?></td>
            <td>
                <button class="btn btn-outline-secondary" type="button" onclick="getEditPaciente(<?= $paciente['Paciente']['id'] ?>)">
                    <img width="16" height="16" src="https://img.icons8.com/stencil/16/pencil.png" alt="pencil" />
                </button>
                <button class="btn btn-outline-secondary" type="button" onclick="delPaciente(<?= $paciente['Paciente']['id'] ?>)">
                    <img width="16" height="16" src="https://img.icons8.com/stencil/16/trash.png" alt="trash" />
                </button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<!-- Paginação -->
<div>
    <span class="d-flex flex-row-reverse">
        página <?= $currentPage ?> de <?= $totalPages ?> páginas
    </span>
    <nav aria-label="Page navigation" data-id="pacientes" id="navPaginacao">
        <?=$this->element('paginacao')?>
    </nav>
</div>
<button class="btn btn-info text-dark mb-4" onclick="getNewPaciente()" type="button">
    Novo paciente
</button>
</div>