<?php

App::uses('AppController', 'Controller');

    class UsersController extends AppController {
        public function login() {
            $this->layout = 'ajax';
            if ($this->request->is('post')) {
                if ($this->Auth->login()) {
                    return $this->redirect($this->Auth->redirectUrl());
                }else{
                    print_r("erro não fez login");
                }
            }
        }

        public function add() {
            if ($this->request->is('post')) {
                $this->User->create();
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(__('Usuário salvo!'));
                    return $this->redirect(array('action' => 'index'));
                }else{
                    print_r("O usuário não pôde ser salvo!");
                }
            }
        }
    
        public function logout() {
            $this->Auth->logout();
            /*$this->redirect('/login');*/
            $this->redirect($this->Auth->logout());
        }

    }
    
?>

