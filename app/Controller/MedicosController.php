<?php 
    class MedicosController extends AppController{
      
        public function index() {
            $this->layout="ajax";
            /*$this->set('medicos',$this->Medico->find('all'));*/

            $this->paginate = array(
                'limit' => 5,
                'order' => array('Medico.nome' => 'asc')
            );
        
           $medicos=$this->paginate('Medico');
           $total=$this->Medico->find('count');
           $this->set(compact('medicos','total'));
    
           $this->set('currentPage',$this->request->params['named']['page']??1);
           $this->set('totalPages',ceil($total/$this->paginate['limit']));
        }
        public function view($id = null) {
            $this->layout='ajax';
            $this->set('medicos', $this->Medico->findById($id));
        }
        public function edit($id = null) {
            $this->layout='ajax';
            $medico = $this->Medico->findById($id);
            if ($this->request->is(['post', 'put'])) {
                $this->Medico->id = $id;
                $this->Medico->save($this->request->data);
            }else if($this->request->is('get')){
                $this->set('medicos', $this->Medico->findById($id));
            }
        }
        public function new(){
            $this->layout="ajax";
            if ($this->request->is('post')) {
                $this->Medico->save($this->request->data);
            }
        }
        public function del($id=null){
            $this->layout='ajax';
            $this->Medico->delete($id);
            exit();
        }
        public $components=array('RequestHandler');
    }
?>