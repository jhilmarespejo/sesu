<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Administrativo Entity
 *
 * @property int $sala_id
 * @property bool|null $libro_actas
 * @property bool|null $cuaderno_visitas
 * @property bool|null $planilla_asistencia_personal
 */
class Administrativo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'libro_actas' => true,
        'cuaderno_visitas' => true,
        'planilla_asistencia_personal' => true
    ];
}
