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
      // pr (($salas)); 
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
             <div class="form-group col-xs-6 col-sm-12 col-md-6 col-lg-12">
                <?php echo $this->Form->input('fechasupervision', ['label' => ['text' => 'FECHA DE SUPERVISIÓN'], 'class'=>'form-control', 'type' => 'date'] );?>
            </div>
        </fieldset>
        <fieldset>
            <legend>Cobertura</legend>
            <!-- <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php echo $this->Form->input('nombre', ['label' => ['text' => 'CENTRO INFANTIL'], 'class'=>'form-control', 'type' => 'text', 'value' => $centroinfantil['nombre']] );?>
            </div> -->
            
            <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">Cobertura</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                    <!-- <th class="">Cobertura programada</th>
                    <th class="">N° de niños inscritos</th>
                    <th class="">N° de educadoras</th>
                    <th class="">N° de enc. Elab. Alimentos </th>
                     -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">Cobertura programada</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php echo $this->Form->input('cobertura.'.$k.'.cantidad_prog', ['label' => ['text' => false], 'class'=>'form-control', 'type' => 'number'] ); 
                            echo $this->Form->hidden('cobertura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('cobertura.'.$k.'.sala_id', ['value' => $k]);?> 
                        </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>N° de niños inscritos</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php echo $this->Form->input('cobertura.'.$k.'.inscritos', ['label' => ['text' => false], 'class'=>'form-control', 'type' => 'number'] ); 
                            echo $this->Form->hidden('cobertura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('cobertura.'.$k.'.sala_id', ['value' => $k]);?> </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>N° de educadoras</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php echo $this->Form->input('cobertura.'.$k.'.educadoras', ['label' => ['text' => false], 'class'=>'form-control', 'type' => 'number'] ); 
                            echo $this->Form->hidden('cobertura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('cobertura.'.$k.'.sala_id', ['value' => $k]);?> </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>N° de enc. Elab. Alimentos </td>
                    <!-- <?//php foreach ($salas as $k => $v) { ?> -->
                        <td class=""><?php echo $this->Form->input('cobertura.'.$k.'.ealimentos', ['label' => ['text' => false], 'class'=>'form-control', 'type' => 'number'] ); 
                            echo $this->Form->hidden('cobertura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('cobertura.'.$k.'.sala_id', ['value' => $k]);?> </td>
                    <!-- <?//php } ?> -->
                </tr>
                <tr> 
                    <td>Fecha de supervisión</td>
                        <td class=""><?php echo $this->Form->input('cobertura.'.$k.'.fechasupervision', ['label' => ['text' => false], 'class'=>'form-control', 'type' => 'date'] ); 
                            echo $this->Form->hidden('cobertura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('cobertura.'.$k.'.sala_id', ['value' => $k]);?> 
                        </td>
                </tr>
            </tbody>
        </table>
        </fieldset>
        <fieldset>
        <legend>II. Files de los niñas y niños</legend>
        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">1. Ficha social</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php 
                            echo $this->Form->input('carpetaninos.'.$k.'.ficha_social', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO', 'hiddenField' => 'NO']); 
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?> 
                        </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>2. Cuenta con el acta de compromiso de padres, padres de familia, tutores o guardadores</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('carpetaninos.'.$k.'.compromiso_pf', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>3. Cuenta con el formulario del buen trato</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('carpetaninos.'.$k.'.formulario_buentrato', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>4. Cuenta con fotocopia de certificado de nacimiento y/o cédula de identidad </td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.ci_certificado', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>

                <tr> 
                    <td>5. Cuenta con fotocopia de cédula de identidad de los padres</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.ci_pf', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>6. Cuenta con croquis de domicilio </td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.croquis_domicilio', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>7. Cuenta con facturas de luz y agua </td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.facturas_servicios', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>8. Cuenta con extracto de AFP, ambos padres</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.extracto_afp_pf', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>9. Cuenta con el examen de PAP</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.pap', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>10. Cuenta con la ficha de personas autorizadas para el recojo de niños con respaldo de fotocopias de CI </td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.personas_autorizadas', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>11. Cuenta con la ficha psicológica</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.ficha_psicologica', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>12. Cuenta con ficha de seguimiento psicológico</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.ficha_seguimiento_psicol', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>13. Cuenta con ficha de adaptación psicológica  (centros acreditados)</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.ficha_adaptacion_psicol', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>14. Cuenta con ficha de adaptación del area de educación</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.ficha_adaptacion_educ', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>15. Cuenta con formulario de escala abreviada</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.formulario_ead', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>16. La EAD-1 está llenada según evaluación por edad  (centros acreditados)</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.ead_llena_edad', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>17. Cuenta con ficha de diagnóstico pedagógico EAD-1 (centros acreditados)</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.ficha_diag_pedagogico', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>18. Cuenta con cuadro de monitoreo gráfico (EAD-1)</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.cuadro_monitoreo_grafico_ead', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>19. Cuenta con ficha de seguimiento pedagógico mensual</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.ficha_seg_pedagogico_men', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>20. Cuenta con centralizador mensual de aprendizaje por contenidos</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.centralizador_mensual', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>21. Cuenta con ficha de seguimiento de patologías</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.ficha_seg_patologias', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>22. CEl CSI está llenado al día: vacunas, registro de peso y curva de crecimiento</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.csi_aldia', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>23. Cuenta con Carnet de Salud Infantil (CSI)</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.csi', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>24. Cuenta con hoja de evolución médica</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.hoja_evolucion_medica', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>25. Cuenta con formulario de seguimiento y monitoreo nutricional</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php  
                            echo $this->Form->input('carpetaninos.'.$k.'.monitoreo_nutricional', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']);  
                            echo $this->Form->hidden('carpetaninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaninos.'.$k.'.sala_id', ['value' => $k]);?>
                        </td>
                    <?php } ?>
                </tr>
                
            </tbody>
        </table>
        </fieldset>
        <fieldset>
        <legend>III. Carpeta de las/los educadoras/es</legend>
        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">26. Cuenta con formulario de registro de asistencia de niñas/os llenada hasta el dia de hoy</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php 
                            echo $this->Form->input('carpetaedus.'.$k.'.form_registro_asistencia', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                            echo $this->Form->hidden('carpetaedus.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('carpetaedus.'.$k.'.sala_id', ['value' => $k]);?> 
                        </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>27. Cuenta con horario de actividades</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('carpetaedus.'.$k.'.horario_actividades', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('carpetaedus.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('carpetaedus.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>28. Cuenta con planificaciones semanales ejecutadas</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('carpetaedus.'.$k.'.planificacion_semanal_ejec', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('carpetaedus.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('carpetaedus.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>29. Cuenta con centralizador de aprendizaje semanal ejecutado</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('carpetaedus.'.$k.'.centralizador_aprendizaje_semanal_ejec', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('carpetaedus.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('carpetaedus.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>30. Cuenta con plan educativo complementario</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('carpetaedus.'.$k.'.plan_educativo_comp', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('carpetaedus.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('carpetaedus.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>31. Cuenta con la ficha de visita domiciliaria</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('carpetaedus.'.$k.'.ficha_visita_domiciliaria', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('carpetaedus.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('carpetaedus.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr> 
                    <td>32. Cuenta con formulario de referencia y/o contrareferencia</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('carpetaedus.'.$k.'.form_ref_contraref', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('carpetaedus.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('carpetaedus.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>IV. Educación inicial escolarizada</legend>
        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">33. Cuenta con la planificación semanal en lugar visible</td>
                    <?php foreach ($salas as $k => $v) { ?>
                        <td class=""><?php 
                            echo $this->Form->input('eduinicial.'.$k.'.planificacion_lugar_visible', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                            echo $this->Form->hidden('eduinicial.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                            echo $this->Form->hidden('eduinicial.'.$k.'.sala_id', ['value' => $k]);?> 
                        </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>34. Cuenta con el cuadro de Signos vitales, al día y en lugar visible</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('eduinicial.'.$k.'.form_signos_vitales_visible', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('eduinicial.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('eduinicial.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>35. Cuenta con el centralizador de evaluación aprendizajes al día</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('eduinicial.'.$k.'.centralizador_ev_aprendizaje', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('eduinicial.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('eduinicial.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>36. Cumple con los horario de actividades (de acuerdo a reglamento interno)</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('eduinicial.'.$k.'.cumple_horario_actividades', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('eduinicial.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('eduinicial.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>37. Realiza las actividades en relación a la planificación semanal</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('eduinicial.'.$k.'.actividades_relacion_planif', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('eduinicial.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('eduinicial.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>38. Existe material educativo para la realización de actividades</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('eduinicial.'.$k.'.material_educativo', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('eduinicial.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('eduinicial.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>39. Cuenta con cuaderno de reportes y/o novedades, en lugar visible</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('eduinicial.'.$k.'.cuaderno_novedades', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('eduinicial.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('eduinicial.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>V. Niñas y Niños</legend>
        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="">40. Participan activamente en los momentos educativos.</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ninos.'.$k.'.participacion_activa', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ninos.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                    <td>41. Muestran interés en lo que hacen</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ninos.'.$k.'.muestran_interes', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ninos.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>42. Se comunican entre ellos hablando</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ninos.'.$k.'.comunicacion_hablada', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ninos.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>43. Se comunican entre ellos jugando</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ninos.'.$k.'.comunicacion_jugando', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ninos.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>44. Utilizan los materiales didácticos.</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ninos.'.$k.'.usan_materiales_didacticos', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ninos.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>45. Demuestran alegría, afecto, curiosidad, etc</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ninos.'.$k.'.alegria_afecto_curiosidad', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ninos.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>46. Se alimentan solos (de 2 a 4 años)</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ninos.'.$k.'.alimentan_solos', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ninos.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ninos.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>VI. Educadoras/es</legend>
        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="">47. Guia y orienta a las niñas/os en sus actividades</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('educadoras.'.$k.'.guia_orienta_ninos', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('educadoras.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('educadoras.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">48. Escucha y responde a niñas y niños</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('educadoras.'.$k.'.escucha_responde_ninos', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('educadoras.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('educadoras.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">49. Está pendiente de lo que sucede con las niñas/os</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('educadoras.'.$k.'.pendiente_ninos', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('educadoras.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('educadoras.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">50. Se dirige a las niñas/os por su nombre</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('educadoras.'.$k.'.dirige_nino_nombre', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('educadoras.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('educadoras.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">51. Se comunica con las niñas/os de manera asertiva (amable, respetuosa, amigable).</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('educadoras.'.$k.'.comunicacion_asertiva', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('educadoras.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('educadoras.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">52. Aplica la metodologia lúdica, como principio y derecho de las niñas y niños</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('educadoras.'.$k.'.metodo_ludico', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('educadoras.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('educadoras.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">53. Apoyan para que la niña o niño termine la ración servida</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('educadoras.'.$k.'.apoyo_alimentacion', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('educadoras.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('educadoras.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>VII. Ambiente educativo</legend>
        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="">54. Existe una distribucion del equipamiento: mesas, sillas y estantes en las diferentes salas</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ambiente.'.$k.'.distribucion_equipamiento', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ambiente.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ambiente.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">55. Existe material educativo para la realizacion de actividades</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ambiente.'.$k.'.material_educativo_actividades', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ambiente.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ambiente.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">56. Material educativo clasificado al alcance de las niñas y niños</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ambiente.'.$k.'.material_clasificado_alcance', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ambiente.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ambiente.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">57. Las paredes se encuentran ilustradas con pertinencia cultural</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ambiente.'.$k.'.paredes_ilustradas', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ambiente.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ambiente.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">58. Exposición de los trabajos de las niñas y niños</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ambiente.'.$k.'.exposicion_trabajos', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ambiente.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ambiente.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">59. Cuadro de monitoreo de desarrollo y crecimiento de niñas/os, visibles y llenados al dia</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ambiente.'.$k.'.cuadro_monitoreo_dia', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ambiente.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ambiente.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">60. Material de limpieza fuera del alcance de los niños</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ambiente.'.$k.'.material_limpieza_cautela', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ambiente.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ambiente.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">61. Material de riesgo para niños, fuera de su alcance</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ambiente.'.$k.'.material_riesgo_cautela', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ambiente.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ambiente.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">62. Enchufes cubiertos</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('ambiente.'.$k.'.enchufes_cubiertos', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('ambiente.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('ambiente.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>VIII. Prácticas de hábitos de higiene</legend>

        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3" class="text-center"><strong> NIÑOS</strong></td>
                </tr>
                <tr>
                <td class="">63. Uñas cortadas</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.uñas_cortadas', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">64. Sin restos de secreción nasal</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.restos_nasales', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">65. Se cepillan los dientes despues de comer</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.higiene_dental', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">66. Se lavan las manos antes de comer</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.lavado_manos', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">67. Peinados</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.peinados', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">68. Vestimenta adecuada y limpia</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.ropa_adecuada_limpia', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                    <td colspan="3" class="text-center"><strong> HIGIENE DE EDUCADORAS</strong></td>
                </tr>
                <tr>
                <td class="">69. Manos limpias, uñas cortadas y sin esmalte</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.unas_esmalte', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">70. Cabello recogido</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.cabello_recogido', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">71. Sin accesorios en las manos (pulseras, anillos y otros que representen riesgo)</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.sin_accesorios', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">72. Ropa comoda y adecuada para el trabajo y mandil limpio</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.ropa_comoda', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                    <td colspan="3" class="text-center"><strong>HIGIENE ENCARGADAS DE ELABORACIÓN DE ALIMENTOS</strong></td>
                </tr>
                <tr>
                <td class="">73. Manos limpias, uñas cortadas y sin esmalte</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.unas_limpias', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">74. Cuenta con indumentaria adecuada (delantal, manguillas, turbante y barbijo)</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.indumentaria_adecuada', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">75. Sin accesorios en las manos (pulseras, anillos y otros que representen riesgo)</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.sin_accesorios_riesgo', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <tr>
                    <td colspan="3" class="text-center"><strong>HIGIENE DE BAÑOS</strong></td>
                </tr>
                <td class="">76. Desinfectado/sin mal olor</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.sin_mal_olor', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">77. Ventilado</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.bano_ventilado', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">78. Cuenta con basurero</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.con_basurero', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                    <td class="">79. Bacines limpios</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.bacines_limpios', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr> 
                <tr>
                    <td class="">80. Piso no resbaloso ni mojado</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.piso_seco', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td colspan="3" class="text-center"><strong>HIGIENE DEL CENTRO INFANTIL</strong></td>
                </tr>
                <td class="">81. Basurero cubierto y en lugar adecuado</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.basurero_cubierto', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">82. Juguetes limpios</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.juguetes_limpios', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                <td class="">83. Colchones/colchonetas limpios y sin olor</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.colchones_limpios', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr> 
                <tr>
                    <td class="">84. Piso y/o alfombras limpias</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.alfombras_limpias', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr> 
                <tr>
                    <td class="">85. Ambiente ordenado (se entiende por ordenado al desorden producto de una actividad)</td>
                    <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('higiene.'.$k.'.ambiente_ordenado', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('higiene.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('higiene.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                    <?php } ?>
                </tr>
                
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>IX. Espacio administrativo</legend>

        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="">86. Cuenta con el libro de actas al dia y en lugar visible</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('administrativo.'.$k.'.libro_actas', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('administrativo.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('administrativo.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">87. Cuenta con cuaderno de visitas</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('administrativo.'.$k.'.cuaderno_visitas', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('administrativo.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('administrativo.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">88. Planilla de asistencia del personal al día (administrativo)</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('administrativo.'.$k.'.planilla_asistencia_personal', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('administrativo.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('administrativo.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>X. Depósito o espacio para alimentos</legend>
        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="">89. Cuentan con tarimas</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.tarimas', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">90. Cuentan con estantes</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.estantes', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">91. Almacenamiento adecuado de alimentos y separado por fuente de financiamiento</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.almacenamiento_adecuado', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">92. Sin basura</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.sin_basura', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">93. Ordenado</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.ordenado', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">94. Ventilado</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.deposito_ventilado', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">95. Sin humedad</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.sin_humedad', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">96. Puerta y ventanas con seguridad</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.puertas_seguridad', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">97. Sin acceso a roedores e insectos</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.sin_roedores', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>XI. Cocina</legend>
        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="">98. Platos, tazas, cucharas, ollas, etc Limpios y en buen estado</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('cocina.'.$k.'.servicios_limpios', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('cocina.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('cocina.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </fieldset> 
    <fieldset>
        <legend>XII. Nutrición</legend>
        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="">101. El kardex de alimentos tiene registrado las salidas de alimentos realizadas ayer</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('nutricion.'.$k.'.kardex_aldia', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('nutricion.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('nutricion.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">102. Cuenta con el formulario de saldos de alimentos al dia</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('nutricion.'.$k.'.saldos_aldia', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('nutricion.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('nutricion.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">103. Los alimentos que salieron del almacén tienen relación con el menú</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.alimentos_relacion_menu', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">104. Cuenta con medidas estandarizadas de raciones alimenticias caseras</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.medidas_estandar', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">105. Se cumple con los tiempos y horarios de comidas</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.cumple_horarios', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">106. Cumple con el menú diferenciado por grupo etario y en lugar visible</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.menu_diferenciado', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">107. Cuenta con el menú especial para niñas y niños con alteraciones nutrucionales (sobrepeso, peso bajo)</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.menu_especial', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">108. La comida es sabrosa (preguntar a los niños y niñas)</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('deposito.'.$k.'.comida_sabrosa', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('deposito.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('deposito.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>XIII. Salud</legend>
        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="">109. Se coordina con el Centro de Salud para las campañas de vacunación y administración de micro nutrientes (Convenios firmados por CI)</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('salud.'.$k.'.coordinacion_centro_salud', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('salud.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('salud.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">110. El botiquín cuenta con los insumos de primeros auxilios</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('salud.'.$k.'.botiquin_aceptable', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('salud.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('salud.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">111. El extintor se encuentra en un lugar apropiado y con fecha vigente</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('salud.'.$k.'.extintor_adecuado', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('salud.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('salud.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>XIV. Infraestructura</legend>
        <table class="table table-bordered table-responsive table-hover table-condensed col-xs-1 col-sm-4 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th class="">ITEMS</th>
                    <?php foreach ($salas as $k => $sala) { ?>
                        <th class=""><?php echo $sala; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="">112. Cuenta con alcantarillado</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'alcantarillado', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">113. Cuenta con fosa séptica</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'fosa_septica', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">114. Cuenta con conexión eléctrica</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'electricidad', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">115. Cuenta con conexión de agua</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'agua', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                    <td colspan="3" class="text-center"><strong> PATIO</strong></td>
                </tr>
                <tr>
                <td class="">116. Limpio y ordenado</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'patio_limpio', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">117. Puerta segura</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'patio_puerta_segura', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">118. Amurallado</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'patio_amurallado', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                    <td colspan="3" class="text-center"><strong> BAÑOS</strong></td>
                </tr>
                <tr>
                <td class="">119. Iluminado</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'bano_iluminado', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">120. Ambiente limpio</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'bano_limpio', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">121. Inodoros limpio</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'bano_hinodoro_limpio', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">122. Lavamanos limpios</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'bano_lavamanos_limpio', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">123. Fugas de agua</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'bano_sin_fugas', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">124. Baños diferenciados para niños</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'bano_diferenciado', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
                <tr>
                <td class="">125. Baños para el personal</td>
                <?php foreach ($salas as $k => $v) { ?>
                    <td class=""><?php 
                        echo $this->Form->input('infraestructura.'.$k.'bano_personal', ['type' => 'checkbox', 'value' => 'SI', 'label' => 'SI', 'hiddenField' => 'NO']); 
                        echo $this->Form->hidden('infraestructura.'.$k.'.centroinfantil_id', ['value' => $centroinfantil['id']]);
                        echo $this->Form->hidden('infraestructura.'.$k.'.sala_id', ['value' => $k]);?> 
                    </td>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </fieldset>


    <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-success']) ?>   
<br/><br/><br/><br/>
    </div>
    <?= $this->Form->end() ?>

<!-- <td class=""><?php echo $this->Form->input('published', ['type' => 'checkbox']);?></td> -->