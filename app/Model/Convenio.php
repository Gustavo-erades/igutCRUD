<?php
class Convenio extends AppModel
{
    public $name = 'convenio';

    public $validate = array(
        'nome' => array(
            'rule' => 'notBlank'
        )
    );
}
?>