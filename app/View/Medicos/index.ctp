<h1 class="display-6 mt-3">
    Médicos disponíveis
</h1>
<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Especialidade</th>
        <th>Cadastrar</th>
    </tr>
    <?php
    foreach ($medicos as $medico):
    ?>
        <tr>
            <td>
                <?php
                echo $medico['Medico']['id'];
                ?>
            </td>
            <td>
                <a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" onclick="getMedico(<?= $medico['Medico']['id'] ?>)">
                    <?= $medico['Medico']['nome'] ?>
                </a>
            </td>
            <td>
                <?php
                echo $medico['Medico']['especialidade'];
                ?>
            </td>
            <td>
                <button class="btn btn-outline-secondary" onclick="getEditMedico(<?=$medico['Medico']['id']?>)">
                    <img width="16" height="16" src="https://img.icons8.com/stencil/16/pencil.png" alt="pencil" />
                </button>
                <button class="btn btn-outline-secondary" onclick="delMedico(<?= $medico['Medico']['id'] ?>)">
                    <img width="16" height="16" src="https://img.icons8.com/stencil/16/trash.png" alt="trash" />
                </button>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
</table>
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
    <button class="btn btn-info text-dark mb-4" onclick="getNewMedico()" type="button">
        Novo médico
    </button>
</div>