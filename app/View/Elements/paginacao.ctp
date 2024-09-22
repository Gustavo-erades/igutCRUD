<ul class="pagination justify-content-center">
    <li class="page-item <?= $currentPage == 1 ? 'disabled' : ''; ?>">
        <a class="page-link" href="#" onclick="paginacao('first',1)">Primeiro</a>
    </li>
    <li class="page-item <?= $currentPage == 1 ? 'disabled' : ''; ?>">
        <a class="page-link" href="#" onclick="paginacao('prev',<?= $currentPage - 1 ?>)">&laquo;</a>
    </li>
    <li class="page-item <?= $currentPage == $totalPages ? 'disabled' : ''; ?>">
        <a class="page-link" href="#" onclick="paginacao('next',<?= $currentPage + 1 ?>)">&raquo;</a>
    </li>
    <li class="page-item <?= $currentPage == $totalPages ? 'disabled' : ''; ?>">
        <a class="page-link" href="#" onclick="paginacao('last',<?= $totalPages ?>)">Último</a>
    </li>
</ul>