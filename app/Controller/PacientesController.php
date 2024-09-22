<?php 
    class PacientesController extends AppController{
        public function index() {
            $this->layout="ajax";
            $this->set('pacientes',$this->Paciente->find('all'));
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
        public function delete($id){
            $this->layout='ajax';
            if (!$this->request->is('post')) {
                throw new BadNotAllowedException();
            }
            if ($this->Consulta->delete($id)) {
                $this->Flash->success('Paciente deletado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
        public $components=array('RequestHandler');
    }
?>