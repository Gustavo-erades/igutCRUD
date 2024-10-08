<?php
App::uses('AppModel/Model','Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required'=>array(
                'rule' => 'notBlank',
            )
        ),
        'password' => array(
            'required'=>array(
                'rule' => 'notBlank',
            )
        )
    );

    public function beforeSave($options = array()) {
            if (isset($this->data[$this->alias]['password'])) {
                $passwordHasher = new BlowfishPasswordHasher();
                $this->data[$this->alias]['password'] = $passwordHasher->hash(
                    $this->data[$this->alias]['password']
                );
            }
            return true;
        }
}

?>