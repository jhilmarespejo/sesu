<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centroinfantil $centroinfantil
 * add new supervision form
 */
?>
<nav id="actions-sidebar">
    <ul
        <li><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Centroinfantil'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sala'), ['controller' => 'Sala', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sala'), ['controller' => 'Sala', 'action' => 'add']) ?></li>
    </ul>
</nav>

    <?php 
       pr (($salas)); 
        //pr (array_values($centroinfantil)); 
    ?>


    <?= $this->Form->create();     ?>
    <div class="group1 col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInLeft">
        <fieldset>
        <!-- <legend><?= __('Add Centroinfantil') ?></legend> -->
            <?php
                // echo $this->Form->control('nombre');
                // echo $this->Form->control('tipo');
                // echo $this->Form->control('administrador');
                // echo $this->Form->control('cobertura');
            ?>

            <legend>Datos generales</legend>
            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php echo $this->Form->input('nombre', ['label' => ['text' => 'CENTRO INFANTIL'], 'class'=>'form-control', 'type' => 'text', 'value' => $centroinfantil['nombre']] );?>
            </div>
            <div class="form-group col-xs-6 col-sm-12 col-md-6 col-lg-12">
                <?php echo $this->Form->input('administrador', ['label' => ['text' => 'ADMINISTRADOR'], 'class'=>'form-control', 'type' => 'text', 'value' => $centroinfantil['administrador']] );?>
            </div>
            <div class="form-group col-xs-6 col-sm-12 col-md-6 col-lg-12">
                <?php echo $this->Form->input('convenio', ['label' => ['text' => 'CONVENIO'], 'class'=>'form-control', 'type' => 'text', 'value' => strtoupper($centroinfantil['convenio']) ]);?>
            </div>
            <div class="form-group col-xs-6 col-sm-12 col-md-6 col-lg-12">
                <?php echo $this->Form->input('cobertura', ['label' => ['text' => 'COBERTURA'], 'class'=>'form-control', 'type' => 'text', 'value' => $centroinfantil['cobertura'].' niños'] );?>
            </div>
        </fieldset>
        <fieldset>
            <legend>Cobertura</legend>
            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php echo $this->Form->input('nombre', ['label' => ['text' => 'CENTRO INFANTIL'], 'class'=>'form-control', 'type' => 'text', 'value' => $centroinfantil['nombre']] );?>
            </div>
            
            <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <?php foreach ($salas as $key => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($salas as $key => $sala) { ?>
                        <td class=""><?php echo $this->Form->input('published', ['type' => 'checkbox']);?></td>
                    <?php } ?>

                    
                </tr>
            </tbody>
        </table>
        </fieldset>
    </div>
    <?= $this->Form->button(__('Enviar')) ?>   
    <?= $this->Form->end() ?>

<!-- <td class=""><?php echo $this->Form->input('published', ['type' => 'checkbox']);?></td> -->
