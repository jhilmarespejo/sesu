<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centroinfantil $centroinfantil
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Centroinfantil'), ['action' => 'edit', $centroinfantil->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Centroinfantil'), ['action' => 'delete', $centroinfantil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centroinfantil->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Centroinfantil'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centroinfantil'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sala'), ['controller' => 'Sala', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sala'), ['controller' => 'Sala', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="centroinfantil view large-9 medium-8 columns content">
    <h3><?= h($centroinfantil->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($centroinfantil->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($centroinfantil->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Administrador') ?></th>
            <td><?= h($centroinfantil->administrador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cobertura') ?></th>
            <td><?= h($centroinfantil->cobertura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($centroinfantil->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sala') ?></h4>
        <?php if (!empty($centroinfantil->sala)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Centroinfantil Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centroinfantil->sala as $sala): ?>
            <tr>
                <td><?= h($sala->id) ?></td>
                <td><?= h($sala->centroinfantil_id) ?></td>
                <td><?= h($sala->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sala', 'action' => 'view', $sala->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sala', 'action' => 'edit', $sala->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sala', 'action' => 'delete', $sala->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sala->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
