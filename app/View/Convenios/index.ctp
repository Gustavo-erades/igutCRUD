<h1 class="display-6 mt-3">Convenios já cadastrados:</h1>
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
            <button class="btn btn-outline-secondary">
                <img width="16" height="16" src="https://img.icons8.com/stencil/16/trash.png" alt="trash" />
            </button>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>
<hr>
<h1 class="display-6 mt-3">Cadastrar novo convênio</h1>
<form class="form-group mt-2 mb-5">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nome do novo convênio" aria-label="Recipient"
            aria-describedby="button-addon2" id="convenioNome">
        <button class="btn btn-info" type="button" id="button-addon1" onclick="addConvenio()">cadastrar novo convênio</button>
    </div>
</form>
<!-- Modal -->
<?php foreach ($convenios as $convenio): ?>
<div class="modal fade" id="modalEdit-<?=$convenio['Convenio']['id']?>" tabindex="1" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Editar Convenio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nome do novo convenio" value="<?=$convenio['Convenio']['nome']?>" id="convenioNome-<?=$convenio['Convenio']['id']?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-info" onclick="editConvenio(<?=$convenio['Convenio']['id']?>)" data-bs-dismiss="modal" aria-label="Close">Salvar Alterações</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>