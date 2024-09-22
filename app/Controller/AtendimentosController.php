<?php
class AtendimentosController extends AppController
{
    public function index()
    {
        $this->layout='ajax';
        $this->set('atendimentos', $this->Atendimento->find('all'));
        if ($this->request->is('post')) {
            if ($this->Atendimento->save($this->request->data)) {
                $this->Flash->success('Atendimento cadastrado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function edit($id = null) {
        $this->layout='ajax';
        $atendimento = $this->Atendimento->findById($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Atendimento->id = $id;
            $this->Atendimento->save($this->request->data);
        }
    }

    public function del($id){
        $this->layout='ajax';
        $this->Atendimento->delete($id);
    }
    public $components=array('RequestHandler');
}
?>