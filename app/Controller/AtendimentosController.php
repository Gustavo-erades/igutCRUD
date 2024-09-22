<?php
class AtendimentosController extends AppController
{
    function index()
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
    function delete($id){
        $this->layout='ajax';
        if(!$this->request->is('post')){
            throw new MethodNotAllowedException();
        }
        if($this->Atendimento->delete($id)){
            $this->Flash->success('Atendimetno deletado!');
            $this->redirect(array('action'=>'index'));
        }
    }
    public $components=array('RequestHandler');
}
?>