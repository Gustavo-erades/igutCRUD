/* listagem de todos os dados */
function getMedicos() {
    $.ajax({
        type: 'GET',
        url: 'medicos/index/',
        dataType: 'html',
        beforeSend: function () {
            //enquanto carrega a página
        },
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert('Erro ao carregar medicos');
        }
    })
}
function getPacientes() {
    $.ajax({
        type: 'GET',
        url: 'pacientes/index/',
        dataType: 'html',
        beforeSend: function () {
            //enquanto carrega a página
        },
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert('Erro ao carregar pacientes');
        }
    })
}
function getAtendimentos() {
    $.ajax({
        type: 'GET',
        url: 'atendimentos/index/',
        dataType: 'html',
        beforeSend: function () {
            //enquanto carrega a página
        },
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert('Erro ao carregar atendimentos');
        }
    })
}
function getConvenios() {
    $.ajax({
        type: 'GET',
        url: 'convenios/index/',
        dataType: 'html',
        beforeSend: function () {
            //enquanto carrega a página
        },
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert('Erro ao carregar convenios');
        }
    })
}
function getConsultas() {
    $.ajax({
        type: 'GET',
        url: 'consultas/index',
        dataType: 'html',
        beforeSend: function () {
            //enquanto carrega a página
        },
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert("Erro ao carregar consultas");
        }
    })
}
/* listagem de dados especificos (id) */
function getMedico(id) {
    $.ajax({
        type: 'GET',
        url: 'medicos/view/' + id,
        dataType: 'html',
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert('Erro ao carregar medico');
        }
    })
}
function getPaciente(id) {
    $.ajax({
        type: 'GET',
        url: 'pacientes/view/' + id,
        dataType: 'html',
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert('Erro ao carregar paciente');
        }
    })
}
/* página para adicionar registro */
function getNewMedico(){
    $.ajax({
        type: 'GET',
        url: 'medicos/new/',
        dataType: 'html',
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert('Erro ao carregar cadastro de paciente');
        }
    })
}
function getNewPaciente(){
    $.ajax({
        type: 'GET',
        url: 'pacientes/new/',
        dataType: 'html',
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert('Erro ao carregar cadastro de paciente');
        }
    })
}
function getNewConsulta(){
    $.ajax({
        type: 'GET',
        url: 'consultas/new/',
        dataType: 'html',
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert('Erro ao carregar cadastro de consulta');
        }
    })
}
/* página para editar registro */
function getEditMedico(id){
    $.ajax({
        type: 'GET',
        url: 'medicos/edit/'+id,
        dataType: 'html',
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert('Erro ao carregar cadastro de médico');
        }
    })
}
function getEditPaciente(id){
    $.ajax({
        type: 'GET',
        url: 'pacientes/edit/'+id,
        dataType: 'html',
        success: (data) => {
            $('#mainContent').html(data);
        },
        error: () => {
            alert('Erro ao carregar cadastro de médico');
        }
    })
}
function getEditAtendimento(id){
    new bootstrap.Modal("#modalEdit-"+id).show();
}
/* ações ao clicar (todos) */
$('#getMedicos').on('click', getMedicos);
$('#getPacientes').on('click', getPacientes);
$('#getAtendimentos').on('click', getAtendimentos);
$('#getConvenios').on('click', getConvenios);
$('#getHome').on('click', getConsultas);
/* acontece assim que a página é completamente carregada */
$(document).ready(() => {
    getConsultas();
})