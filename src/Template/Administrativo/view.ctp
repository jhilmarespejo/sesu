<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrativo $administrativo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administrativo'), ['action' => 'edit', $administrativo->sala_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administrativo'), ['action' => 'delete', $administrativo->sala_id], ['confirm' => __('Are you sure you want to delete # {0}?', $administrativo->sala_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Administrativo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administrativo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administrativo view large-9 medium-8 columns content">
    <h3><?= h($administrativo->sala_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sala Id') ?></th>
            <td><?= $this->Number->format($administrativo->sala_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Libro Actas') ?></th>
            <td><?= $administrativo->libro_actas ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cuaderno Visitas') ?></th>
            <td><?= $administrativo->cuaderno_visitas ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planilla Asistencia Personal') ?></th>
            <td><?= $administrativo->planilla_asistencia_personal ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
