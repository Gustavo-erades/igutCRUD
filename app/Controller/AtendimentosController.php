<?php
class AtendimentosController extends AppController
{
    public function index()
    {
        $this->layout = 'ajax';
        /*$this->set('atendimentos', $this->Atendimento->find('all'));*/

        $this->paginate = array(
            'limit' => 5,
            'order' => array('Atendimento.nome' => 'asc')
        );

        $atendimentos = $this->paginate('Atendimento');
        $total = $this->Atendimento->find('count');
        $this->set(compact('atendimentos', 'total'));

        $this->set('currentPage', $this->request->params['named']['page'] ?? 1);
        $this->set('totalPages', ceil($total / $this->paginate['limit']));

        if ($this->request->is('post')) {
            $this->Atendimento->save($this->request->data);
        }
    }

    public function edit($id = null)
    {
        $this->layout = 'ajax';
        $atendimento = $this->Atendimento->findById($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Atendimento->id = $id;
            $this->Atendimento->save($this->request->data);
        }
    }

    public function del($id)
    {
        $this->layout = 'ajax';
        $this->Atendimento->delete($id);
    }
    public $components = array('RequestHandler');
}
