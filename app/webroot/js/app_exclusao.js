function delMedico(id){
    $.ajax({
        type: 'POST',
        url: 'medicos/new/',
        data:id, // A URL correta para a exclusão
        dataType: 'json', 
        success: function(response) {
            if (response.success) {
                console.log("Funcionando");
                // Aqui você pode adicionar lógica para atualizar a interface
            } else {
                alert(response.message); 
            }
        },
        error: function(xhr, status, error) {
            alert('Erro ao deletar: ' + error); // Para tratar erros
        }
    });
}