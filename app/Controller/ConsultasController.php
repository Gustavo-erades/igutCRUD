<?php
class ConsultasController extends AppController
{
    public function index()
    {
        $this->layout = 'ajax';
        $this->set('consultas', $this->Consulta->find('all'));
    }
    public function new()
    {
        $this->layout = 'ajax';
        if ($this->request->is('post')) {
            $this->Consulta->save($this->request->data);
        }
        $fields = array('Medico.id', 'Medico.nome');
        $medicos = $this->Consulta->Medico->find('list', compact('fields'));
        $this->set('medicos', $medicos);

        $fields = array('Paciente.id', 'Paciente.nome');
        $pacientes = $this->Consulta->Paciente->find('list', compact('fields'));
        $this->set('pacientes', $pacientes);

        $fields = array('Atendimento.id', 'Atendimento.nome');
        $atendimentos = $this->Consulta->Atendimento->find('list', compact('fields'));
        $this->set('atendimentos', $atendimentos);

        $fields = array('Convenio.id', 'Convenio.nome');
        $convenios = $this->Consulta->Convenio->find('list', compact('fields'));
        $this->set('convenios', $convenios);
    }
    public function del($id)
    {
        $this->layout = 'ajax';
        $this->Consulta->delete($id);
    }
    public function edit($id = null)
    {
        $this->layout = "ajax";
        $consulta = $this->Consulta->findById($id);

        if ($this->request->is(['post', 'put'])) {
            $this->Consulta->id = $id;
            $this->Consulta->save($this->request->data);
        } else if ($this->request->is('get')) {
            $this->set('consultas', $this->Consulta->findById($id));
        }

        $fields = array('Medico.id', 'Medico.nome');
        $medicos = $this->Consulta->Medico->find('list', compact('fields'));
        $this->set('medicos', $medicos);

        $fields = array('Paciente.id', 'Paciente.nome');
        $pacientes = $this->Consulta->Paciente->find('list', compact('fields'));
        $this->set('pacientes', $pacientes);

        $fields = array('Atendimento.id', 'Atendimento.nome');
        $atendimentos = $this->Consulta->Atendimento->find('list', compact('fields'));
        $this->set('atendimentos', $atendimentos);

        $fields = array('Convenio.id', 'Convenio.nome');
        $convenios = $this->Consulta->Convenio->find('list', compact('fields'));
        $this->set('convenios', $convenios);
    }
}
