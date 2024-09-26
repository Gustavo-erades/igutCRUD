function editMedico(id) {
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
            type: 'PUT',
            url: 'medicos/edit/' + id,
            data: data,
            dataType: 'json',
            error: () => {
                getMedicos();
            }
        })
    } else {
        novoAlertaErro("Erro! Não foi possível editar médico, verifique os dados digitados.")
    }
}
function editPaciente(id) {
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
            type: 'PUT',
            url: 'pacientes/edit/' + id,
            data: data,
            dataType: 'json',
            error: () => {
                getPacientes();
            }
        })
    } else {
        novoAlertaErro("Erro! Não foi possível editar paciente, verifique os dados digitados.");
    }
}
function editAtendimento(id) {
    var atendimento = $('#atendimentoNome-' + id).val();
    console.log(atendimento)
    var data = {
        nome: atendimento,
    };
    var modal = new bootstrap.Modal("#modalEdit-" + id)
    $.ajax({
        type: 'PUT',
        url: 'atendimentos/edit/' + id,
        data: data,
        dataType: 'json',
        error: () => {
            getAtendimentos();
        }
    })
}
function editConvenio(id) {
    var convenio = $('#convenioNome-' + id).val();
    console.log(convenio)
    var data = {
        nome: convenio,
    };
    var modal = new bootstrap.Modal("#modalEdit-" + id)
    $.ajax({
        type: 'PUT',
        url: 'convenios/edit/' + id,
        data: data,
        dataType: 'json',
        error: () => {
            getConvenios();
        }
    })
}
function editConsulta(id) {
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
        type: 'PUT',
        url: 'consultas/edit/' + id,
        data: data,
        dataType: 'json',
        error: () => {
            getConsultas();
        }
    })}else{
        novoAlertaErro("Erro! Não foi possível editar consulta, verifique o dado digitado.");

    }
}