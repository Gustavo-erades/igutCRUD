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
    public function del($id)
    {
        $this->layout='ajax';
        $this->Convenio->delete($id);
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
