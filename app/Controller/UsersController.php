<?php
    class UsersController extends AppController {
        public function login() {
            $this->layout = 'ajax';

            if ($this->request->is('ajax')) {
                if ($this->Auth->login()) {
                    // Se o login for bem-sucedido, você pode retornar uma resposta
                    $response = array('success' => true);
                } else {
                    $response = array('success' => false, 'message' => __('Invalid email or password'));
                }
                $this->response->type('application/json');
                $this->response->body(json_encode($response));
                return $this->response;
            } else {
                if ($this->request->is('post')) {
                    if ($this->Auth->login()) {
                        // Redirecionar após o login se não for AJAX
                        return $this->redirect(array('controller' => 'consultas', 'action' => 'index'));
                    } else {
                        $this->Flash->error(__('Invalid email or password, try again'));
                    }
                }
            }
        
        }
        
        public function logout() {
            return $this->redirect($this->Auth->logout());
        }
    }
    
?>

