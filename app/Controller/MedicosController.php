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
            if ($this->Consulta->delete($id)) {
                $this->redirect(array('action' => 'index'));
            }
        }
        public $components=array('RequestHandler');
    }
?>