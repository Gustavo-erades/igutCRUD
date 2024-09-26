function addMedico() {
    var medico = $('#medicoNome').val();
    var crm = $('#medicoCrm').val();
    var especialidade = $('#medicoEspecialidade').val();
    if (medico != '' && crm.length > 1 && especialidade != '') {
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
        })
    } else {
        novoAlertaErro("Erro! Não foi possível cadastrar o médico, verifique os dados digitados.")
    }
}
function addPaciente() {
    var paciente = $('#pacienteNome').val();
    var cpf = $('#pacienteCpf').val();
    var telefone = $('#pacienteTelefone').val();
    var nascimento = $('#pacienteNascimento').val();
    if (telefone.length >= 8 && cpf.length == 11 && paciente.length > 0 && nascimento != '') {
        var data = {
            nome: paciente,
            cpf: cpf,
            telefone: telefone,
            dt_nasc: nascimento
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
    } else {
        novoAlertaErro("Erro! Não foi possível cadastrar paciente, verifique os dados digitados.")
    }
}
function addAtendimento() {
    var atendimento = $('#atendimentoNome').val();
    if (atendimento != '') {
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
    });}else{
        novoAlertaErro("Erro! Não foi possível cadastrar atendimento, verifique o dado digitado.");
    }
}
function addConvenio() {
    var convenio = $('#convenioNome').val();
    if (convenio != '') {
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
    });}else{
        novoAlertaErro("Erro! Não foi possível cadastrar convênio, verifique o dado digitado.");
    }
}
function addConsulta() {
    var dia = $('#consultaDia').val();
    var hora = $('#consultaHora').val();
    var medico = $('#selectMedico').val();
    var paciente = $('#selectPaciente').val();
    var atendimento = $('#selectAtendimento').val();
    var convenio = $('#selectConvenio').val();
    if (dia != '' && hora!='' && medico!='' && paciente!='' && atendimento!='' && convenio!='') {
    var data = {
        dia: dia,
        hora: hora,
        medico_id: medico,
        paciente_id: paciente,
        atendimento_id: atendimento,
        convenio_id: convenio
    };
    $.ajax({
        type: 'POST',
        url: 'consultas/new/',
        data: data,
        dataType: 'json',
        error: (response) => {
            getConsultas();
        }
    });}else{
        novoAlertaErro("Erro! Não foi possível agendar consulta, verifique o dado digitado.");
    }
}