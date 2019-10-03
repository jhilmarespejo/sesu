<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala $sala
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sala'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Centroinfantil'), ['controller' => 'Centroinfantil', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Centroinfantil'), ['controller' => 'Centroinfantil', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Administrativo'), ['controller' => 'Administrativo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Administrativo'), ['controller' => 'Administrativo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ambiente'), ['controller' => 'Ambiente', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ambiente'), ['controller' => 'Ambiente', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Carpetaedus'), ['controller' => 'Carpetaedus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Carpetaedus'), ['controller' => 'Carpetaedus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Carpetaninos'), ['controller' => 'Carpetaninos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Carpetanino'), ['controller' => 'Carpetaninos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cocina'), ['controller' => 'Cocina', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cocina'), ['controller' => 'Cocina', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Deposito'), ['controller' => 'Deposito', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Deposito'), ['controller' => 'Deposito', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Educadoras'), ['controller' => 'Educadoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Educadora'), ['controller' => 'Educadoras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eduinicial'), ['controller' => 'Eduinicial', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Eduinicial'), ['controller' => 'Eduinicial', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Higiene'), ['controller' => 'Higiene', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Higiene'), ['controller' => 'Higiene', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Infraestructura'), ['controller' => 'Infraestructura', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Infraestructura'), ['controller' => 'Infraestructura', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ninos'), ['controller' => 'Ninos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nino'), ['controller' => 'Ninos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Nutricion'), ['controller' => 'Nutricion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nutricion'), ['controller' => 'Nutricion', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salud'), ['controller' => 'Salud', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salud'), ['controller' => 'Salud', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sala form large-9 medium-8 columns content">
    <?= $this->Form->create($sala) ?>
    <fieldset>
        <legend><?= __('Add Sala') ?></legend>
        <?php
            echo $this->Form->control('centroinfantil_id', ['options' => $centroinfantil]);
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
