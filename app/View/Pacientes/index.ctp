<h1  class="display-6 mt-3">Pacientes cadastrados</h1>
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
                <a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" onclick="getPaciente(<?=$paciente['Paciente']['id']?>)">
                    <?= $paciente['Paciente']['nome'] ?>
                </a>
            </td>
            <td><?php echo $paciente['Paciente']['cpf']; ?></td>
            <td><?php echo $paciente['Paciente']['telefone']; ?></td>
            <td><?php echo date('d/m/Y',strtotime($paciente['Paciente']['dt_nasc'])); ?></td>
            <td>
            <button class="btn btn-outline-secondary">
                <img width="16" height="16" src="https://img.icons8.com/stencil/16/pencil.png" alt="pencil" />
            </button>
            <button class="btn btn-outline-secondary">
                <img width="16" height="16" src="https://img.icons8.com/stencil/16/trash.png" alt="trash" />
            </button>
        </td>
        </tr>
    <?php endforeach; ?>
</table>
<div>
    <span class="d-flex flex-row-reverse">
        página x de y páginas
    </span>
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Primeiro</a></li>
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">Último</a></li>
        </ul>
    </nav>
</div>
    <button class="btn btn-info text-dark mb-4" onclick="getNewPaciente()" type="button">
        Novo paciente
    </button>
</div>