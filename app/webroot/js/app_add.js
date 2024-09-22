function addMedico(){
    var medico = $('#medicoNome').val(); 
    var crm = $('#medicoCrm').val();
    var especialidade = $('#medicoEspecialidade').val();
    var data = {
        nome: medico,
        crm: crm,
        especialidade: especialidade
    };
    $.ajax({
        type: 'POST',
        url: 'medicos/new/',
        data: data, 
        dataType: 'json', 
        error: (response) => {
            getMedicos();
        }
    });
}
function addPaciente(){
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
        type: 'POST',
        url: 'pacientes/new/',
        data: data, 
        dataType: 'json', 
        error: (response) => {
            getPacientes();
        }
    });
}
function addAtendimento(){
    var atendimento = $('#atendimentoNome').val();
    var data = {
        nome: atendimento
    };
    $.ajax({
        type: 'POST',
        url: 'atendimentos/index/',
        data: data, 
        dataType: 'json', 
        error: (response) => {
            getAtendimentos();
        }
    });
}
function addConvenio(){
    var convenio = $('#convenioNome').val();
    var data = {
        nome: convenio
    };
    $.ajax({
        type: 'POST',
        url: 'convenios/index/',
        data: data, 
        dataType: 'json', 
        error: (response) => {
            getConvenios();
        }
    });
}