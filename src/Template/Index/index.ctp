
<div class="container-fluid">
    <h3><?= __('Centroinfantil') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('administrador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cobertura') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($centroinfantil as $centroinfantil): ?>
            <tr>
                <td><?= $this->Number->format($centroinfantil->id) ?></td>
                <td><?= h($centroinfantil->nombre) ?></td>
                <!-- <td><?= h($centroinfantil->tipo) ?></td>
                <td><?= h($centroinfantil->administrador) ?></td>
                <td><?= h($centroinfantil->cobertura) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Iniciar formulario'), ['controller' => 'formulario', 'action' => 'add', $centroinfantil->id]) ?>

                    <!-- <?= $this->Html->link(__('Edit'), ['action' => 'edit', $centroinfantil->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $centroinfantil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centroinfantil->id)]) ?> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Principio')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
