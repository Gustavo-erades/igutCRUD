<?php
class Consulta extends AppModel
{
    public $name = 'consultas';
    public $belongsTo = array(
        'Medico',
        'Paciente',
        'Atendimento',
        'Convenio'
    );
    public $validate = array(
        'dia' => array(
            'rule' => 'notBlank'
        ),
        'hora' => array(
            'rule' => 'notBlank'
        ),
        'medico_id' => array(
            'rule' => 'notBlank'
        ),
        'paciente_id' => array(
            'rule' => 'notBlank'
        ),
        'atendimento_id' => array(
            'rule' => 'notBlank'
        ),
        'convenio_id' => array(
            'rule' => 'notBlank'
        )
    );
}
?>