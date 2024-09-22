function paginacao(acao,page) {
    var view=$('#navPaginacao').attr('data-id');
    switch (acao) {
        case 'first':
            $.ajax({
                type: 'GET',
                url: view+'/index/page:'+page,
                dataType: 'html',
                success: (data) => {
                    $('#mainContent').html(data);
                },
                error: () => {
                    alert('Erro ao carregar paginação de consultas');
                }
            });
            break;
        case 'prev':
            $.ajax({
                type: 'GET',
                url: view+'/index/page:'+page,
                dataType: 'html',
                success: (data) => {
                    $('#mainContent').html(data);
                },
                error: () => {
                    alert('Erro ao carregar paginação de consultas');
                }
            });
            break;
        case 'next':
            $.ajax({
                type: 'GET',
                url: view+'/index/page:'+page,
                dataType: 'html',
                success: (data) => {
                    $('#mainContent').html(data);
                },
                error: () => {
                    alert('Erro ao carregar paginação de consultas');
                }
            });
            break;
        case 'last':
            $.ajax({
                type: 'GET',
                url: view+'/index/page:'+page,
                dataType: 'html',
                success: (data) => {
                    $('#mainContent').html(data);
                },
                error: () => {
                    alert('Erro ao carregar paginação de consultas');
                }
            })
            break;
    }
}