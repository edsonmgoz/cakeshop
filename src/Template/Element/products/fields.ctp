<?php
    echo $this->Form->input('name');
    echo $this->Form->input('description');
    echo $this->Form->input('quantity');
    echo $this->Form->input('price');
    echo $this->Form->input('photo', ['type' => 'file', 'class' => 'filestyle', 'data-buttonName' => 'btn-primary', 'data-buttonText' => 'Examinar']);
?>