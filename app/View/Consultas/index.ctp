<h1 class="display-6 mt-3">Consultas já agendadas</h1>
<hr>
<table class="table table-hover" id="tableConsultas">
    <tr>
        <th>Id</th>
        <th>Dia</th>
        <th>Hora</th>
        <th>Médico</th>
        <th>Tipo da consulta</th>
        <th>Paciente</th>
        <th>Cadastrar</th>
    </tr>
    <?php foreach ($consultas as $consulta): ?>
        <tr>
            <td>
                <?= $consulta['Consulta']['id'] ?>
            </td>
            <td>
                <?= date('d/m/Y', strtotime($consulta['Consulta']['dia'])) ?>
            </td>
            <td>
                <?= date('H:i', strtotime($consulta['Consulta']['hora'])) ?>
            </td>
            <td>
                <a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" onclick="getMedico(<?= $consulta['Consulta']['medico_id'] ?>)">
                    <?= $consulta['Medico']['nome'] ?>
                </a>
            </td>
            <td>
                <?= $consulta['Atendimento']['nome'] ?>
            </td>
            <td>
                <a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" onclick="getPaciente(<?= $consulta['Paciente']['id'] ?>)">
                    <?= $consulta['Paciente']['nome'] ?>
                </a>
            </td>
            <td>
                <button class="btn btn-outline-secondary" type="button" onclick="getEditConsulta(<?= $consulta['Consulta']['id'] ?>)">
                    <img width="16" height="16" src="https://img.icons8.com/stencil/16/pencil.png" alt="pencil" />
                </button>
                <button class="btn btn-outline-secondary" type="button" onclick="delConsulta(<?= $consulta['Consulta']['id'] ?>)">
                    <img width="16" height="16" src="https://img.icons8.com/stencil/16/trash.png" alt="trash" />
                </button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<div>
    <span class="d-flex flex-row-reverse">
        página <?= $currentPage ?> de <?= $totalPages ?> páginas
    </span>
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" onclick="paginacao('first',1)">Primeiro</a>
            </li>
            <li class="page-item">
                <a class="page-link"  href="#" onclick="paginacao('prev',<?=$currentPage - 1?>)">&laquo;</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" onclick="paginacao('next',<?=$currentPage + 1?>)">&raquo;</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" onclick="paginacao('last',$totalPages)">Último</a>
            </li>
        </ul>
    </nav>
</div>
<button type="button" class="btn btn-info text-dark mb-4" onclick="getNewConsulta()">
    Nova Consulta
</button>