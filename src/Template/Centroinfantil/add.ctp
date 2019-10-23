<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centroinfantil $centroinfantil
 */
?>
<nav class="">
    <ul class="">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Centroinfantil'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sala'), ['controller' => 'Sala', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sala'), ['controller' => 'Sala', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="">
    <?= $this->Form->create($centroinfantil) ?>
    <fieldset>
        <legend><?= __('Add Centroinfantil') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('tipo');
            echo $this->Form->control('administrador');
            echo $this->Form->control('cobertura');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
