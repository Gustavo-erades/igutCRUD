<?php 
    class MedicosController extends AppController{
        public function index() {
            $this->layout="ajax";
            $this->set('medicos',$this->Medico->find('all'));
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
        public function delete($id){
            $this->autoRender = false;
            $this->layout='ajax';
            if (!$this->request->is('post')) {
                throw new BadNotAllowedException();
            }
            if ($this->Medico->delete($id)) {
                $this->redirect(array('action' => 'index'));
            }
        }
        public $components=array('RequestHandler');
    }
?>