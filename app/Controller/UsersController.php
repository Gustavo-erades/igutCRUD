<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController
{

    public $helpers = array('Html', 'Form');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function login()
    {
        $this->layout = 'ajax';
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl('/'));
            }
        }
    }

    public function add()
    {
        $this->layout = 'ajax';
        if ($this->request->is('post')) {
            $this->Auth->user('id');
            $this->User->create();
            $this->request->data = json_decode(file_get_contents('php://input'), true);
            if ($this->User->save($this->request->data)) {
                print_r("usuário cadastrado!");
            } else {
                print_r("O usuário não pôde ser salvo!");
            }
        }
    }

    public function logout() {
        /*$this->autoRender = false;
        $this->Auth->logout();
        $this->set('response', ['success' => true, 'message' => 'Logout realizado com sucesso']);
        $this->set('_serialize', ['response']);*/
        return $this->redirect($this->Auth->logout());
    }

    public function isAuthorized($user) {
        // Permitir acesso a todas as ações para usuários autenticados
        if (isset($user)) {
            return true;
        }
    
        // Caso contrário, negue o acesso
        return false;
    }
    
}
