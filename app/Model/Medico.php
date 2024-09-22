<?php 
    class Medico extends AppModel{
        public $name='medicos';

        public $validate= array(
            'nome'=>array(
                'rule'=>'notBlank'
            ),
            'crm'=>array(
                'rule'=>'notBlank'
            ),
            'especialidade'=>array(
                'rule'=>'notBlank'
            )
        );
    }
?>