<?php
class Atendimento extends AppModel
{
    public $name = 'atendimento';

    public $validate = array(
        'nome' => array(
            'rule' => 'notBlank'
        )
    );
}
?>