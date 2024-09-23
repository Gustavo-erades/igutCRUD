<?php
class ConveniosController extends AppController
{

    public function index()
    {
        $this->layout = 'ajax';
        /*$this->set('convenios', $this->Convenio->find('all'));*/

        $this->paginate = array(
            'limit' => 5,
            'order' => array('Convenio.nome' => 'asc')
        );

        $this->layout = 'ajax';

        $convenios = $this->paginate('Convenio');
        $total = $this->Convenio->find('count');
        $this->set(compact('convenios', 'total'));

        $this->set('currentPage', $this->request->params['named']['page'] ?? 1);
        $this->set('totalPages', ceil($total / $this->paginate['limit']));

        if ($this->request->is('post')) {
            $this->Convenio->save($this->request->data);
        }
    }
    public function del($id)
    {
        $this->layout = 'ajax';
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
