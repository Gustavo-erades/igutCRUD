<div class="mt-3 d-flex justify-content-center bg-info bg-opacity-10 border border-info  rounded-start rounded-end">
    <h1 class="display-4">
        <?php 
        echo $medicos['Medico']['nome'];
    ?>
    </h1>
</div>
<div class="mt-3">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <h4 class="text-info">Especialidade:</h4>
            <span class="fs-4">
                <?php 
        echo $medicos['Medico']['especialidade'];
    ?>
            </span>
        </li>
        <li class="list-group-item">
            <h4 class="text-info">CRM:</h4>
            <span class="fs-4">
                <?php 
        echo $medicos['Medico']['crm'];
    ?>
            </span>
        </li>
</div>