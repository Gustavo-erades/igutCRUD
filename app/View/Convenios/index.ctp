<div id="alert"></div>
<h1 class="display-6 mt-3">Convenios já cadastrados:</h1>
<hr>
<table class="table table-hover">
    <tr>
        <th>
            Nome do convênio
        </th>
        <th>
            Cadastrar
        </th>
    </tr>
    <?php foreach ($convenios as $convenio): ?>
    <tr>
        <td>
            <?php
                echo $convenio['Convenio']['nome']
            ?>
        </td>
        <td>
            <button type="button" class="btn btn-outline-secondary" onclick="getEditConvenio(<?=$convenio['Convenio']['id']?>)">
                <img width="16" height="16" src="https://img.icons8.com/stencil/16/pencil.png" alt="pencil" />
            </button>
            <button type="button" class="btn btn-outline-secondary" onclick="delConvenio(<?=$convenio['Convenio']['id']?>)">
                <img width="16" height="16" src="https://img.icons8.com/stencil/16/trash.png" alt="trash" />
            </button>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>
<!-- paginação -->
<?php if($totalPages>0): ?>
<div>
    <span class="d-flex flex-row-reverse">
        página <?= $currentPage ?> de <?= $totalPages ?> páginas
    </span>
    <nav aria-label="Page navigation" data-id="convenios" id="navPaginacao">
        <?=$this->element('paginacao')?>
    </nav>
</div>
<?php endif; ?>
<h1 class="display-6 mt-3">Cadastrar novo convênio</h1>
<form class="form-group mt-2 mb-5">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nome do novo convênio" aria-label="Recipient"
            aria-describedby="button-addon2" id="convenioNome">
        <button class="btn btn-info" type="button" id="button-addon1" onclick="addConvenio()">cadastrar novo convênio</button>
    </div>
</form>
<!-- Modal -->
<?= $this->element('modalConvenios') ?>