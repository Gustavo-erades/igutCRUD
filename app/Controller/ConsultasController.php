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
            if ($this->Consulta->save($this->request->data)) {
                $this->Flash->success('Consulta marcada!');
                $this->redirect(array('action' => 'index'));
            }
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
    public function delete($id)
    {
        if (!$this->request->is('post')) {
            throw new BadNotAllowedException();
        }
        if ($this->Consulta->delete($id)) {
            $this->Flash->success('Consulta cancelada!');
            $this->redirect(array('action' => 'index'));
        }
    }
    public function edit($id = null)
    {
        $this->layout = "ajax";
        $this->set('consultas', $this->Consulta->findById($id));

        if (!empty($this->request->data)) {
            if ($this->request->is('put')) {
                if ($this->Consulta->save($this->request->data)) {
                    $this->Flash->success('Consulta reagendada!');
                    $this->redirect(array('action' => 'index'));
                }
            }
        } else {
            $fields = array('Consulta.id', 'Consulta.dia', 'Consulta.hora', 'Consulta.medico_id', 'Consulta.paciente_id', 'Consulta.atendimento_id', 'Consulta.convenio_id');
            $conditions = array('Consulta.id' => $id);
            $this->request->data = $this->Consulta->find('first', compact('fields', 'conditions'));
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
?>