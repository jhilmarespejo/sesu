<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala $sala
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sala'), ['action' => 'edit', $sala->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sala'), ['action' => 'delete', $sala->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sala->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sala'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sala'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Centroinfantil'), ['controller' => 'Centroinfantil', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centroinfantil'), ['controller' => 'Centroinfantil', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Administrativo'), ['controller' => 'Administrativo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administrativo'), ['controller' => 'Administrativo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ambiente'), ['controller' => 'Ambiente', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ambiente'), ['controller' => 'Ambiente', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Carpetaedus'), ['controller' => 'Carpetaedus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carpetaedus'), ['controller' => 'Carpetaedus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Carpetaninos'), ['controller' => 'Carpetaninos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carpetanino'), ['controller' => 'Carpetaninos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cocina'), ['controller' => 'Cocina', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cocina'), ['controller' => 'Cocina', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Deposito'), ['controller' => 'Deposito', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Deposito'), ['controller' => 'Deposito', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Educadoras'), ['controller' => 'Educadoras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Educadora'), ['controller' => 'Educadoras', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Eduinicial'), ['controller' => 'Eduinicial', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Eduinicial'), ['controller' => 'Eduinicial', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Higiene'), ['controller' => 'Higiene', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Higiene'), ['controller' => 'Higiene', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Infraestructura'), ['controller' => 'Infraestructura', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Infraestructura'), ['controller' => 'Infraestructura', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ninos'), ['controller' => 'Ninos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nino'), ['controller' => 'Ninos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nutricion'), ['controller' => 'Nutricion', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nutricion'), ['controller' => 'Nutricion', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salud'), ['controller' => 'Salud', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salud'), ['controller' => 'Salud', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sala view large-9 medium-8 columns content">
    <h3><?= h($sala->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Centroinfantil') ?></th>
            <td><?= $sala->has('centroinfantil') ? $this->Html->link($sala->centroinfantil->id, ['controller' => 'Centroinfantil', 'action' => 'view', $sala->centroinfantil->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($sala->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sala->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Administrativo') ?></h4>
        <?php if (!empty($sala->administrativo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Libro Actas') ?></th>
                <th scope="col"><?= __('Cuaderno Visitas') ?></th>
                <th scope="col"><?= __('Planilla Asistencia Personal') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->administrativo as $administrativo): ?>
            <tr>
                <td><?= h($administrativo->sala_id) ?></td>
                <td><?= h($administrativo->libro_actas) ?></td>
                <td><?= h($administrativo->cuaderno_visitas) ?></td>
                <td><?= h($administrativo->planilla_asistencia_personal) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Administrativo', 'action' => 'view', $administrativo->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Administrativo', 'action' => 'edit', $administrativo->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Administrativo', 'action' => 'delete', $administrativo->], ['confirm' => __('Are you sure you want to delete # {0}?', $administrativo->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ambiente') ?></h4>
        <?php if (!empty($sala->ambiente)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Distribucion Equipamiento') ?></th>
                <th scope="col"><?= __('Material Educativo Actividades') ?></th>
                <th scope="col"><?= __('Material Clasificado Alcance') ?></th>
                <th scope="col"><?= __('Paredes Ilustradas') ?></th>
                <th scope="col"><?= __('Exposicion Trabajos') ?></th>
                <th scope="col"><?= __('Cuadro Monitoreo Dia') ?></th>
                <th scope="col"><?= __('Material Limpieza Cautela') ?></th>
                <th scope="col"><?= __('Material Riesgo Cautela') ?></th>
                <th scope="col"><?= __('Enchufes Cubiertos') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->ambiente as $ambiente): ?>
            <tr>
                <td><?= h($ambiente->sala_id) ?></td>
                <td><?= h($ambiente->distribucion_equipamiento) ?></td>
                <td><?= h($ambiente->material_educativo_actividades) ?></td>
                <td><?= h($ambiente->material_clasificado_alcance) ?></td>
                <td><?= h($ambiente->paredes_ilustradas) ?></td>
                <td><?= h($ambiente->exposicion_trabajos) ?></td>
                <td><?= h($ambiente->cuadro_monitoreo_dia) ?></td>
                <td><?= h($ambiente->material_limpieza_cautela) ?></td>
                <td><?= h($ambiente->material_riesgo_cautela) ?></td>
                <td><?= h($ambiente->enchufes_cubiertos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ambiente', 'action' => 'view', $ambiente->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ambiente', 'action' => 'edit', $ambiente->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ambiente', 'action' => 'delete', $ambiente->], ['confirm' => __('Are you sure you want to delete # {0}?', $ambiente->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Carpetaedus') ?></h4>
        <?php if (!empty($sala->carpetaedus)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Form Registro Asistencia') ?></th>
                <th scope="col"><?= __('Horario Actividades') ?></th>
                <th scope="col"><?= __('Planificacion Semanal Ejec') ?></th>
                <th scope="col"><?= __('Centralizador Aprendizaje Semanal Ejec') ?></th>
                <th scope="col"><?= __('Plan Educativo Comp') ?></th>
                <th scope="col"><?= __('Ficha Visita Domiciliaria') ?></th>
                <th scope="col"><?= __('Form Ref Contraref') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->carpetaedus as $carpetaedus): ?>
            <tr>
                <td><?= h($carpetaedus->sala_id) ?></td>
                <td><?= h($carpetaedus->form_registro_asistencia) ?></td>
                <td><?= h($carpetaedus->horario_actividades) ?></td>
                <td><?= h($carpetaedus->planificacion_semanal_ejec) ?></td>
                <td><?= h($carpetaedus->centralizador_aprendizaje_semanal_ejec) ?></td>
                <td><?= h($carpetaedus->plan_educativo_comp) ?></td>
                <td><?= h($carpetaedus->ficha_visita_domiciliaria) ?></td>
                <td><?= h($carpetaedus->form_ref_contraref) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Carpetaedus', 'action' => 'view', $carpetaedus->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Carpetaedus', 'action' => 'edit', $carpetaedus->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Carpetaedus', 'action' => 'delete', $carpetaedus->], ['confirm' => __('Are you sure you want to delete # {0}?', $carpetaedus->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Carpetaninos') ?></h4>
        <?php if (!empty($sala->carpetaninos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Ficha Social') ?></th>
                <th scope="col"><?= __('Compromiso Pf') ?></th>
                <th scope="col"><?= __('Formulario Buentrato') ?></th>
                <th scope="col"><?= __('Ci Certificado') ?></th>
                <th scope="col"><?= __('Ci Pf') ?></th>
                <th scope="col"><?= __('Croquis Domicilio') ?></th>
                <th scope="col"><?= __('Facturas Servicios') ?></th>
                <th scope="col"><?= __('Extracto Afp Pf') ?></th>
                <th scope="col"><?= __('Pap') ?></th>
                <th scope="col"><?= __('Personas Autorizadas') ?></th>
                <th scope="col"><?= __('Ficha Psicologica') ?></th>
                <th scope="col"><?= __('Ficha Seguimiento Psicol') ?></th>
                <th scope="col"><?= __('Ficha Adaptacion Psicol') ?></th>
                <th scope="col"><?= __('Ficha Adaptacion Educ') ?></th>
                <th scope="col"><?= __('Formulario Ead') ?></th>
                <th scope="col"><?= __('Ead Llena Edad') ?></th>
                <th scope="col"><?= __('Ficha Diag Pedagogico') ?></th>
                <th scope="col"><?= __('Cuadro Monitoreo Grafico Ead') ?></th>
                <th scope="col"><?= __('Ficha Seg Pedagogico Men') ?></th>
                <th scope="col"><?= __('Centralizador Mensual') ?></th>
                <th scope="col"><?= __('Ficha Seg Patologias') ?></th>
                <th scope="col"><?= __('Csi Aldia') ?></th>
                <th scope="col"><?= __('Csi') ?></th>
                <th scope="col"><?= __('Hoja Evolucion Medica') ?></th>
                <th scope="col"><?= __('Monitoreo Nutricional') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->carpetaninos as $carpetaninos): ?>
            <tr>
                <td><?= h($carpetaninos->sala_id) ?></td>
                <td><?= h($carpetaninos->ficha_social) ?></td>
                <td><?= h($carpetaninos->compromiso_pf) ?></td>
                <td><?= h($carpetaninos->formulario_buentrato) ?></td>
                <td><?= h($carpetaninos->ci_certificado) ?></td>
                <td><?= h($carpetaninos->ci_pf) ?></td>
                <td><?= h($carpetaninos->croquis_domicilio) ?></td>
                <td><?= h($carpetaninos->facturas_servicios) ?></td>
                <td><?= h($carpetaninos->extracto_afp_pf) ?></td>
                <td><?= h($carpetaninos->pap) ?></td>
                <td><?= h($carpetaninos->personas_autorizadas) ?></td>
                <td><?= h($carpetaninos->ficha_psicologica) ?></td>
                <td><?= h($carpetaninos->ficha_seguimiento_psicol) ?></td>
                <td><?= h($carpetaninos->ficha_adaptacion_psicol) ?></td>
                <td><?= h($carpetaninos->ficha_adaptacion_educ) ?></td>
                <td><?= h($carpetaninos->formulario_ead) ?></td>
                <td><?= h($carpetaninos->ead_llena_edad) ?></td>
                <td><?= h($carpetaninos->ficha_diag_pedagogico) ?></td>
                <td><?= h($carpetaninos->cuadro_monitoreo_grafico_ead) ?></td>
                <td><?= h($carpetaninos->ficha_seg_pedagogico_men) ?></td>
                <td><?= h($carpetaninos->centralizador_mensual) ?></td>
                <td><?= h($carpetaninos->ficha_seg_patologias) ?></td>
                <td><?= h($carpetaninos->csi_aldia) ?></td>
                <td><?= h($carpetaninos->csi) ?></td>
                <td><?= h($carpetaninos->hoja_evolucion_medica) ?></td>
                <td><?= h($carpetaninos->monitoreo_nutricional) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Carpetaninos', 'action' => 'view', $carpetaninos->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Carpetaninos', 'action' => 'edit', $carpetaninos->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Carpetaninos', 'action' => 'delete', $carpetaninos->], ['confirm' => __('Are you sure you want to delete # {0}?', $carpetaninos->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cocina') ?></h4>
        <?php if (!empty($sala->cocina)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Servicios Limpios') ?></th>
                <th scope="col"><?= __('Cocina Limpia') ?></th>
                <th scope="col"><?= __('Uso Sdecuado Uniforme') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->cocina as $cocina): ?>
            <tr>
                <td><?= h($cocina->sala_id) ?></td>
                <td><?= h($cocina->servicios_limpios) ?></td>
                <td><?= h($cocina->cocina_limpia) ?></td>
                <td><?= h($cocina->uso_sdecuado_uniforme) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cocina', 'action' => 'view', $cocina->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cocina', 'action' => 'edit', $cocina->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cocina', 'action' => 'delete', $cocina->], ['confirm' => __('Are you sure you want to delete # {0}?', $cocina->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Deposito') ?></h4>
        <?php if (!empty($sala->deposito)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Tarimas') ?></th>
                <th scope="col"><?= __('Estantes') ?></th>
                <th scope="col"><?= __('Almacenamiento Adecuado') ?></th>
                <th scope="col"><?= __('Sin Basura') ?></th>
                <th scope="col"><?= __('Ordenado') ?></th>
                <th scope="col"><?= __('Deposito Ventilado') ?></th>
                <th scope="col"><?= __('Sin Humedad') ?></th>
                <th scope="col"><?= __('Puertas Seguridad') ?></th>
                <th scope="col"><?= __('Sin Roedores') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->deposito as $deposito): ?>
            <tr>
                <td><?= h($deposito->sala_id) ?></td>
                <td><?= h($deposito->tarimas) ?></td>
                <td><?= h($deposito->estantes) ?></td>
                <td><?= h($deposito->almacenamiento_adecuado) ?></td>
                <td><?= h($deposito->sin_basura) ?></td>
                <td><?= h($deposito->ordenado) ?></td>
                <td><?= h($deposito->deposito_ventilado) ?></td>
                <td><?= h($deposito->sin_humedad) ?></td>
                <td><?= h($deposito->puertas_seguridad) ?></td>
                <td><?= h($deposito->sin_roedores) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Deposito', 'action' => 'view', $deposito->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Deposito', 'action' => 'edit', $deposito->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Deposito', 'action' => 'delete', $deposito->], ['confirm' => __('Are you sure you want to delete # {0}?', $deposito->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Educadoras') ?></h4>
        <?php if (!empty($sala->educadoras)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Guia Orienta Ninos') ?></th>
                <th scope="col"><?= __('Escucha Responde Ninos') ?></th>
                <th scope="col"><?= __('Pendiente Ninos') ?></th>
                <th scope="col"><?= __('Dirige Nino Nombre') ?></th>
                <th scope="col"><?= __('Comunicación Asertiva') ?></th>
                <th scope="col"><?= __('Metodo Ludico') ?></th>
                <th scope="col"><?= __('Apoyo Alimentacion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->educadoras as $educadoras): ?>
            <tr>
                <td><?= h($educadoras->sala_id) ?></td>
                <td><?= h($educadoras->guia_orienta_ninos) ?></td>
                <td><?= h($educadoras->escucha_responde_ninos) ?></td>
                <td><?= h($educadoras->pendiente_ninos) ?></td>
                <td><?= h($educadoras->dirige_nino_nombre) ?></td>
                <td><?= h($educadoras->comunicación_asertiva) ?></td>
                <td><?= h($educadoras->metodo_ludico) ?></td>
                <td><?= h($educadoras->apoyo_alimentacion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Educadoras', 'action' => 'view', $educadoras->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Educadoras', 'action' => 'edit', $educadoras->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Educadoras', 'action' => 'delete', $educadoras->], ['confirm' => __('Are you sure you want to delete # {0}?', $educadoras->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Eduinicial') ?></h4>
        <?php if (!empty($sala->eduinicial)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Planificacion Lugar Visible') ?></th>
                <th scope="col"><?= __('Form Signos Vitales Visible') ?></th>
                <th scope="col"><?= __('Centralizador Ev Aprendizaje') ?></th>
                <th scope="col"><?= __('Cumple Horario Actividades') ?></th>
                <th scope="col"><?= __('Actividades Relacion Planif') ?></th>
                <th scope="col"><?= __('Material Educativo') ?></th>
                <th scope="col"><?= __('Cuaderno Novedades') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->eduinicial as $eduinicial): ?>
            <tr>
                <td><?= h($eduinicial->sala_id) ?></td>
                <td><?= h($eduinicial->planificacion_lugar_visible) ?></td>
                <td><?= h($eduinicial->form_signos_vitales_visible) ?></td>
                <td><?= h($eduinicial->centralizador_ev_aprendizaje) ?></td>
                <td><?= h($eduinicial->cumple_horario_actividades) ?></td>
                <td><?= h($eduinicial->actividades_relacion_planif) ?></td>
                <td><?= h($eduinicial->material_educativo) ?></td>
                <td><?= h($eduinicial->cuaderno_novedades) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Eduinicial', 'action' => 'view', $eduinicial->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Eduinicial', 'action' => 'edit', $eduinicial->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Eduinicial', 'action' => 'delete', $eduinicial->], ['confirm' => __('Are you sure you want to delete # {0}?', $eduinicial->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Higiene') ?></h4>
        <?php if (!empty($sala->higiene)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Uñas Cortadas') ?></th>
                <th scope="col"><?= __('Restos Nasales') ?></th>
                <th scope="col"><?= __('Higiene Dental') ?></th>
                <th scope="col"><?= __('Lavado Manos') ?></th>
                <th scope="col"><?= __('Peinados') ?></th>
                <th scope="col"><?= __('Ropa Adecuada Limpia') ?></th>
                <th scope="col"><?= __('Uñas Esmalte') ?></th>
                <th scope="col"><?= __('Cabello Recogido') ?></th>
                <th scope="col"><?= __('Sin Accesorios') ?></th>
                <th scope="col"><?= __('Ropa Comoda') ?></th>
                <th scope="col"><?= __('Uñas Limpias') ?></th>
                <th scope="col"><?= __('Indumentaria Adecuada') ?></th>
                <th scope="col"><?= __('Sin Accesorios Riesgo') ?></th>
                <th scope="col"><?= __('Sin Mal Olor') ?></th>
                <th scope="col"><?= __('Bano Ventilado') ?></th>
                <th scope="col"><?= __('Con Basurero') ?></th>
                <th scope="col"><?= __('Bacines Limpios') ?></th>
                <th scope="col"><?= __('Piso Seco') ?></th>
                <th scope="col"><?= __('Basurero Cubierto') ?></th>
                <th scope="col"><?= __('Juguetes Limpios') ?></th>
                <th scope="col"><?= __('Colchones Limpios') ?></th>
                <th scope="col"><?= __('Alfombras Limpias') ?></th>
                <th scope="col"><?= __('Ambiente Ordenado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->higiene as $higiene): ?>
            <tr>
                <td><?= h($higiene->sala_id) ?></td>
                <td><?= h($higiene->uñas_cortadas) ?></td>
                <td><?= h($higiene->restos_nasales) ?></td>
                <td><?= h($higiene->higiene_dental) ?></td>
                <td><?= h($higiene->lavado_manos) ?></td>
                <td><?= h($higiene->peinados) ?></td>
                <td><?= h($higiene->ropa_adecuada_limpia) ?></td>
                <td><?= h($higiene->uñas_esmalte) ?></td>
                <td><?= h($higiene->cabello_recogido) ?></td>
                <td><?= h($higiene->sin_accesorios) ?></td>
                <td><?= h($higiene->ropa_comoda) ?></td>
                <td><?= h($higiene->uñas_limpias) ?></td>
                <td><?= h($higiene->indumentaria_adecuada) ?></td>
                <td><?= h($higiene->sin_accesorios_riesgo) ?></td>
                <td><?= h($higiene->sin_mal_olor) ?></td>
                <td><?= h($higiene->bano_ventilado) ?></td>
                <td><?= h($higiene->con_basurero) ?></td>
                <td><?= h($higiene->bacines_limpios) ?></td>
                <td><?= h($higiene->piso_seco) ?></td>
                <td><?= h($higiene->basurero_cubierto) ?></td>
                <td><?= h($higiene->juguetes_limpios) ?></td>
                <td><?= h($higiene->colchones_limpios) ?></td>
                <td><?= h($higiene->alfombras_limpias) ?></td>
                <td><?= h($higiene->ambiente_ordenado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Higiene', 'action' => 'view', $higiene->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Higiene', 'action' => 'edit', $higiene->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Higiene', 'action' => 'delete', $higiene->], ['confirm' => __('Are you sure you want to delete # {0}?', $higiene->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Infraestructura') ?></h4>
        <?php if (!empty($sala->infraestructura)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Alcantarillado') ?></th>
                <th scope="col"><?= __('Fosa Septica') ?></th>
                <th scope="col"><?= __('Electricidad') ?></th>
                <th scope="col"><?= __('Agua') ?></th>
                <th scope="col"><?= __('Patio Limpio') ?></th>
                <th scope="col"><?= __('Patio Puerta Segura') ?></th>
                <th scope="col"><?= __('Patio Amurallado') ?></th>
                <th scope="col"><?= __('Bano Iluminado') ?></th>
                <th scope="col"><?= __('Bano Limpio') ?></th>
                <th scope="col"><?= __('Bano Hinodoro Limpio') ?></th>
                <th scope="col"><?= __('Bano Lavamanos Limpio') ?></th>
                <th scope="col"><?= __('Bano Sin Fugas') ?></th>
                <th scope="col"><?= __('Bano Diferenciado') ?></th>
                <th scope="col"><?= __('Bano Personal') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->infraestructura as $infraestructura): ?>
            <tr>
                <td><?= h($infraestructura->sala_id) ?></td>
                <td><?= h($infraestructura->alcantarillado) ?></td>
                <td><?= h($infraestructura->fosa_septica) ?></td>
                <td><?= h($infraestructura->electricidad) ?></td>
                <td><?= h($infraestructura->agua) ?></td>
                <td><?= h($infraestructura->patio_limpio) ?></td>
                <td><?= h($infraestructura->patio_puerta_segura) ?></td>
                <td><?= h($infraestructura->patio_amurallado) ?></td>
                <td><?= h($infraestructura->bano_iluminado) ?></td>
                <td><?= h($infraestructura->bano_limpio) ?></td>
                <td><?= h($infraestructura->bano_hinodoro_limpio) ?></td>
                <td><?= h($infraestructura->bano_lavamanos_limpio) ?></td>
                <td><?= h($infraestructura->bano_sin_fugas) ?></td>
                <td><?= h($infraestructura->bano_diferenciado) ?></td>
                <td><?= h($infraestructura->bano_personal) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Infraestructura', 'action' => 'view', $infraestructura->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Infraestructura', 'action' => 'edit', $infraestructura->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Infraestructura', 'action' => 'delete', $infraestructura->], ['confirm' => __('Are you sure you want to delete # {0}?', $infraestructura->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ninos') ?></h4>
        <?php if (!empty($sala->ninos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Participacion Activa') ?></th>
                <th scope="col"><?= __('Muestran Interes') ?></th>
                <th scope="col"><?= __('Comunicacion Hablada') ?></th>
                <th scope="col"><?= __('Comunicacion Jugando') ?></th>
                <th scope="col"><?= __('Usan Materiales Didacticos') ?></th>
                <th scope="col"><?= __('Alegria Afecto Curiosidad') ?></th>
                <th scope="col"><?= __('Alimentan Solos') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->ninos as $ninos): ?>
            <tr>
                <td><?= h($ninos->sala_id) ?></td>
                <td><?= h($ninos->participacion_activa) ?></td>
                <td><?= h($ninos->muestran_interes) ?></td>
                <td><?= h($ninos->comunicacion_hablada) ?></td>
                <td><?= h($ninos->comunicacion_jugando) ?></td>
                <td><?= h($ninos->usan_materiales_didacticos) ?></td>
                <td><?= h($ninos->alegria_afecto_curiosidad) ?></td>
                <td><?= h($ninos->alimentan_solos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ninos', 'action' => 'view', $ninos->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ninos', 'action' => 'edit', $ninos->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ninos', 'action' => 'delete', $ninos->], ['confirm' => __('Are you sure you want to delete # {0}?', $ninos->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Nutricion') ?></h4>
        <?php if (!empty($sala->nutricion)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Kardex Aldia') ?></th>
                <th scope="col"><?= __('Saldos Aldia') ?></th>
                <th scope="col"><?= __('Alimentos Relacion Menu') ?></th>
                <th scope="col"><?= __('Medidas Estandas') ?></th>
                <th scope="col"><?= __('Cumple Horarios') ?></th>
                <th scope="col"><?= __('Menu Diferenciado') ?></th>
                <th scope="col"><?= __('Menu Especial') ?></th>
                <th scope="col"><?= __('Comida Sabrosa') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->nutricion as $nutricion): ?>
            <tr>
                <td><?= h($nutricion->sala_id) ?></td>
                <td><?= h($nutricion->kardex_aldia) ?></td>
                <td><?= h($nutricion->saldos_aldia) ?></td>
                <td><?= h($nutricion->alimentos_relacion_menu) ?></td>
                <td><?= h($nutricion->medidas_estandas) ?></td>
                <td><?= h($nutricion->cumple_horarios) ?></td>
                <td><?= h($nutricion->menu_diferenciado) ?></td>
                <td><?= h($nutricion->menu_especial) ?></td>
                <td><?= h($nutricion->comida_sabrosa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Nutricion', 'action' => 'view', $nutricion->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Nutricion', 'action' => 'edit', $nutricion->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Nutricion', 'action' => 'delete', $nutricion->], ['confirm' => __('Are you sure you want to delete # {0}?', $nutricion->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Salud') ?></h4>
        <?php if (!empty($sala->salud)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Coordinación Centro Salud') ?></th>
                <th scope="col"><?= __('Botiquin Aceptable') ?></th>
                <th scope="col"><?= __('Extintor Adecuado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sala->salud as $salud): ?>
            <tr>
                <td><?= h($salud->sala_id) ?></td>
                <td><?= h($salud->coordinación_centro_salud) ?></td>
                <td><?= h($salud->botiquin_aceptable) ?></td>
                <td><?= h($salud->extintor_adecuado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Salud', 'action' => 'view', $salud->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Salud', 'action' => 'edit', $salud->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Salud', 'action' => 'delete', $salud->], ['confirm' => __('Are you sure you want to delete # {0}?', $salud->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
