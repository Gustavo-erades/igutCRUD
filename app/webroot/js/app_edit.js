function editMedico(id){
    var medico = $('#medicoNome').val(); 
    var crm = $('#medicoCrm').val();
    var especialidade = $('#medicoEspecialidade').val();
    var data = {
        nome: medico,
        crm: crm,
        especialidade: especialidade
    };
    $.ajax({
        type: 'PUT',
        url: 'medicos/edit/'+id,
        data:data,
        dataType: 'json',
        error: () => {
            getMedicos();
        }
    })
}
function editPaciente(id){
    var paciente = $('#pacienteNome').val(); 
    var cpf = $('#pacienteCpf').val();
    var telefone = $('#pacienteTelefone').val();
    var nascimento=$('pacienteNascimento').val();
    var data = {
        nome: paciente,
        cpf: cpf,
        telefone: telefone,
        dt_nasc:nascimento
    };
    $.ajax({
        type: 'PUT',
        url: 'pacientes/edit/'+id,
        data:data,
        dataType: 'json',
        error: () => {
            getPacientes();
        }
    })
}
function editAtendimento(id){
    var atendimento = $('#atendimetoNome').val();
    var data = {
        nome: atendimento,
        id:id
    };
    $.ajax({
        type: 'PUT',
        url: 'atendimentos/edit/'+id,
        data:data,
        dataType: 'json',
        success: () => {
            getAtendimentos();
        }
    })
}
function editConvenio(id){
    var convenio = $('#convenioNome').val();
    var data = {
        nome: convenio
    };
    $.ajax({
        type: 'PUT',
        url: 'convenio/edit/'+id,
        data:data,
        dataType: 'json',
        error: () => {
            getConvenio();
        }
    })
}