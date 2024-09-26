function delMedico(id) {
    $.ajax({
        type: 'DELETE',
        url: 'medicos/del/' + id,
        error: function () {
            getMedicos()
        }
    });
}
function delPaciente(id) {

    $.ajax({
        type: 'DELETE',
        url: 'pacientes/del/' + id,
        error: function () {
            getPacientes()
        }
    });
}
function delConvenio(id) {
    $.ajax({
        type: 'DELETE',
        url: 'convenios/del/' + id,
        error: function () {
            getConvenios()
        }
    })
}
function delAtendimento(id) {
    $.ajax({
        type: 'DELETE',
        url: 'atendimentos/del/' + id,
        error: function () {
            getAtendimentos();
        }
    })
}
function delConsulta(id) {
    $.ajax({
        type: 'DELETE',
        url: 'consultas/del/' + id,
        error: () => {
            getConsultas();
        }
    })
}