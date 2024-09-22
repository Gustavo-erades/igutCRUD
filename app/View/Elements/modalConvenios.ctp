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