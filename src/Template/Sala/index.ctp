<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala[]|\Cake\Collection\CollectionInterface $sala
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sala'), ['action' => 'add']) ?></li>
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
<div class="sala index large-9 medium-8 columns content">
    <h3><?= __('Sala') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centroinfantil_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sala as $sala): ?>
            <tr>
                <td><?= $this->Number->format($sala->id) ?></td>
                <td><?= $sala->has('centroinfantil') ? $this->Html->link($sala->centroinfantil->id, ['controller' => 'Centroinfantil', 'action' => 'view', $sala->centroinfantil->id]) : '' ?></td>
                <td><?= h($sala->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sala->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sala->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sala->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sala->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
