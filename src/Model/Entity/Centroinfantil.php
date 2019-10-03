<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Centroinfantil Entity
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $tipo
 * @property string|null $administrador
 * @property string|null $cobertura
 *
 * @property \App\Model\Entity\Sala[] $sala
 */
class Centroinfantil extends Entity
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
        'nombre' => true,
        'tipo' => true,
        'administrador' => true,
        'cobertura' => true,
        'sala' => true
    ];
}
