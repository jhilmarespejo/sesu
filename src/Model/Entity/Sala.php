<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sala Entity
 *
 * @property int $id
 * @property int $centroinfantil_id
 * @property string|null $nombre
 *
 * @property \App\Model\Entity\Centroinfantil $centroinfantil
 * @property \App\Model\Entity\Administrativo[] $administrativo
 * @property \App\Model\Entity\Ambiente[] $ambiente
 * @property \App\Model\Entity\Carpetaedus[] $carpetaedus
 * @property \App\Model\Entity\Carpetanino[] $carpetaninos
 * @property \App\Model\Entity\Cocina[] $cocina
 * @property \App\Model\Entity\Deposito[] $deposito
 * @property \App\Model\Entity\Educadora[] $educadoras
 * @property \App\Model\Entity\Eduinicial[] $eduinicial
 * @property \App\Model\Entity\Higiene[] $higiene
 * @property \App\Model\Entity\Infraestructura[] $infraestructura
 * @property \App\Model\Entity\Nino[] $ninos
 * @property \App\Model\Entity\Nutricion[] $nutricion
 * @property \App\Model\Entity\Salud[] $salud
 */
class Sala extends Entity
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
        'centroinfantil_id' => true,
        'nombre' => true,
        'centroinfantil' => true,
        'administrativo' => true,
        'ambiente' => true,
        'carpetaedus' => true,
        'carpetaninos' => true,
        'cocina' => true,
        'deposito' => true,
        'educadoras' => true,
        'eduinicial' => true,
        'higiene' => true,
        'infraestructura' => true,
        'ninos' => true,
        'nutricion' => true,
        'salud' => true
    ];
}
