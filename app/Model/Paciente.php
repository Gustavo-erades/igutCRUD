<?php
class Paciente extends AppModel
{
    public $name = 'Paciente';

    public $validate = array(
        'nome' => array(
            'rule' => 'notBlank'
        ),
        'cpf' => array(
            'rule' => 'notBlank'
        ),
        'telefone' => array(
            'rule' => 'notBlank'
        ),
        'dt_nasc' => array(
            'rule' => 'notBlank'
        )
    );
}
?>