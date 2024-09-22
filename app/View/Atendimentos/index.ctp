<h1 class="display-6 mt-3">Atendimentos Cadastrados:</h1>
<table class="table table-hover">
    <th>
        Nome
    </th>
    <th>
        Cadastrar
    </th>
    <?php foreach ($atendimentos as $atendimento): ?>
        <tr>
            <td>
                <?= $atendimento['Atendimento']['nome'] ?>
            </td>
            <td>
                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="modalEdit" onclick="getEditAtendimento(<?=$atendimento['Atendimento']['id']?>)">
                    <img width="16" height="16" src="https://img.icons8.com/stencil/16/pencil.png" alt="pencil" />
                </button>
                <button class="btn btn-outline-secondary">
                    <img width="16" height="16" src="https://img.icons8.com/stencil/16/trash.png" alt="trash" />
                </button>
            </td>
        </tr>
    <?php endforeach ?>
</table>
<h1 class="display-6 mt-3">Cadastrar novo atendimento</h1>
<form class="form-group mt-2 mb-5">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nome do novo atendimento" aria-label="Recipient"
            aria-describedby="button-addon2" id="atendimetoNome">
        <button class="btn btn-info" type="button" id="button-addon1" onclick="addAtendimento()">cadastrar novo atendimento</button>
    </div>
</form>
<?php foreach ($atendimentos as $atendimento): ?>
<div class="modal fade" id="modalEdit-<?=$atendimento['Atendimento']['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Atendimento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nome do novo atendimento" value="<?=$atendimento['Atendimento']['nome']?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-info" onclick="editAtendimento(<?=$atendimento['Atendimento']['id']?>)">Salvar Alterações</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>