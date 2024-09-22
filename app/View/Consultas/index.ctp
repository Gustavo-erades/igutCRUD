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
<?php if($totalPages>0): ?>
<div>
    <span class="d-flex flex-row-reverse">
        página <?= $currentPage ?> de <?= $totalPages ?> páginas
    </span>
    <nav aria-label="Page navigation" data-id="consultas" id="navPaginacao">
        <?=$this->element('paginacao')?>
    </nav>
</div>
<?php endif; ?>
<button type="button" class="btn btn-info text-dark mb-4" onclick="getNewConsulta()">
    Nova Consulta
</button>