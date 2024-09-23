<?php
class User extends AppModel {

    

    public $validate = array(
        'username' => array(
            'rule' => 'notBlank',
        ),
        'password' => array(
            'rule' => 'notBlank',
        ),
        'role' => array(
            'rule'=>'notBlank',
        ),
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
}
?>
