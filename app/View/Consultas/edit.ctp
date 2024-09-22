<h1>Reagendar Consulta</h1>
<h3>Paciente <?= $consultas['Paciente']['nome']; ?> </h3>
<?php 
    echo $this->Form->create('Consulta');
    echo $this->Form->hidden('id');
    echo $this->Form->input('dia',array('type'=>'date'));
    echo $this->Form->input('hora',array('type'=>'time')); 
    echo $this->Form->input('medico_id',array('type'=>'select','options'=>$medicos));
    echo $this->Form->input('atendimento_id',array('type'=>'select','options'=>$atendimentos));
    echo $this->Form->input('convenio_id',array('type'=>'select','options'=>$convenios));
    echo $this->Form->end('Reagendar Consulta');
?>
<a href="#" class="voltar">Voltar</a>