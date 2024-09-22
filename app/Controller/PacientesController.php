<?php 
    class PacientesController extends AppController{
        public function index() {
            $this->layout="ajax";
            /*$this->set('pacientes',$this->Paciente->find('all'));*/

            $this->paginate = array(
                'limit' => 5,
                'order' => array('Paciente.nome' => 'asc')
            );
    
            $this->layout = 'ajax';
        
           $pacientes=$this->paginate('Paciente');
           $total=$this->Paciente->find('count');
           $this->set(compact('pacientes','total'));
    
           $this->set('currentPage',$this->request->params['named']['page']??1);
           $this->set('totalPages',ceil($total/$this->paginate['limit']));
            
        }
        public function view($id = null) {
            $this->layout='ajax';
            $this->set('pacientes', $this->Paciente->findById($id));
        }
        public function new(){
            $this->layout="ajax";
            if ($this->request->is('post')) {
                if ($this->Paciente->save($this->request->data)) {
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
        public function del($id=null){
            $this->layout='ajax';
           $this->Paciente->delete($id);
        }

        public function edit($id = null) {
            $this->layout='ajax';
            $paciente = $this->Paciente->findById($id);
            if ($this->request->is(['post', 'put'])) {
                $this->Paciente->id = $id;
                $this->Paciente->save($this->request->data);
            }else if($this->request->is('get')){
                $this->set('pacientes', $this->Paciente->findById($id));
            }
        }
        public $components=array('RequestHandler');
    }
?>