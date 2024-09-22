<?php
class ConveniosController extends AppController
{
    public function index()
    {
        $this->layout = 'ajax';
        $this->set('convenios', $this->Convenio->find('all'));
        if ($this->request->is('post')) {
            if ($this->Convenio->save($this->request->data)) {
                $this->Flash->success('Convênio salvo com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function delete($id)
    {
        $this->layout = 'ajax';
        if (!$this->request->is('post')) {
            throw new BadNotAllowedException();
        }
        if ($this->Convenio->delete($id)) {
            $this->Flash->success('Convenio deletado com sucesso!');
            $this->redirect(array('action' => 'index'));
        }
    }
    public function edit($id = null)
    {
        $this->layout = 'ajax';
        $convenio = $this->Convenio->findById($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Convenio->id = $id;
            $this->Convenio->save($this->request->data);
        }
    }
    public $components = array('RequestHandler');
}
