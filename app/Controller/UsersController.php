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
            }else{
                return $this->redirect($this->Auth->redirectUrl('/users/login?erro=error'));
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
        return $this->redirect($this->Auth->logout());
    }

    public function index(){
        return $this->redirect($this->Auth->redirectUrl('/'));
    }
    /*public function isAuthorized($user) {
        if (isset($user)) {
            return true;
        }
        return false;
    }*/
    
}
