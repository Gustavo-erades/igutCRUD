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
    var atendimento = $('#atendimentoNome-'+id).val();
    console.log(atendimento)
    var data = {
        nome: atendimento,
    };
    var modal=new bootstrap.Modal("#modalEdit-"+id)
    $.ajax({
        type: 'PUT',
        url: 'atendimentos/edit/'+id,
        data:data,
        dataType: 'json',
        error: () => {
            getAtendimentos();
        }
    })
}
function editConvenio(id){
    var convenio = $('#convenioNome-'+id).val();
    console.log(convenio)
    var data = {
        nome: convenio,
    };
    var modal=new bootstrap.Modal("#modalEdit-"+id)
    $.ajax({
        type: 'PUT',
        url: 'convenios/edit/'+id,
        data:data,
        dataType: 'json',
        error: () => {
            getConvenios();
        }
    })
}