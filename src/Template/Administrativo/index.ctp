<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrativo[]|\Cake\Collection\CollectionInterface $administrativo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Administrativo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administrativo index large-9 medium-8 columns content">
    <h3><?= __('Administrativo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('sala_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libro_actas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cuaderno_visitas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planilla_asistencia_personal') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administrativo as $administrativo): ?>
            <tr>
                <td><?= $this->Number->format($administrativo->sala_id) ?></td>
                <td><?= h($administrativo->libro_actas) ?></td>
                <td><?= h($administrativo->cuaderno_visitas) ?></td>
                <td><?= h($administrativo->planilla_asistencia_personal) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administrativo->sala_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administrativo->sala_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administrativo->sala_id], ['confirm' => __('Are you sure you want to delete # {0}?', $administrativo->sala_id)]) ?>
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
