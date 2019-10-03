<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrativo $administrativo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administrativo->sala_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administrativo->sala_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Administrativo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="administrativo form large-9 medium-8 columns content">
    <?= $this->Form->create($administrativo) ?>
    <fieldset>
        <legend><?= __('Edit Administrativo') ?></legend>
        <?php
            echo $this->Form->control('libro_actas');
            echo $this->Form->control('cuaderno_visitas');
            echo $this->Form->control('planilla_asistencia_personal');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
