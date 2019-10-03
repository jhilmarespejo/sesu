<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centroinfantil[]|\Cake\Collection\CollectionInterface $centroinfantil
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Centroinfantil'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sala'), ['controller' => 'Sala', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sala'), ['controller' => 'Sala', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="centroinfantil index large-9 medium-8 columns content">
    <h3><?= __('Centroinfantil') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('administrador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cobertura') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($centroinfantil as $centroinfantil): ?>
            <tr>
                <td><?= $this->Number->format($centroinfantil->id) ?></td>
                <td><?= h($centroinfantil->nombre) ?></td>
                <td><?= h($centroinfantil->tipo) ?></td>
                <td><?= h($centroinfantil->administrador) ?></td>
                <td><?= h($centroinfantil->cobertura) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $centroinfantil->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $centroinfantil->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $centroinfantil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centroinfantil->id)]) ?>
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
