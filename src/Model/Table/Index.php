<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sala Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Centroinfantils
 * @property \App\Model\Table\AdministrativoTable|\Cake\ORM\Association\HasMany $Administrativo
 * @property \App\Model\Table\AmbienteTable|\Cake\ORM\Association\HasMany $Ambiente
 * @property \App\Model\Table\CarpetaedusTable|\Cake\ORM\Association\HasMany $Carpetaedus
 * @property \App\Model\Table\CarpetaninosTable|\Cake\ORM\Association\HasMany $Carpetaninos
 * @property \App\Model\Table\CocinaTable|\Cake\ORM\Association\HasMany $Cocina
 * @property \App\Model\Table\DepositoTable|\Cake\ORM\Association\HasMany $Deposito
 * @property \App\Model\Table\EducadorasTable|\Cake\ORM\Association\HasMany $Educadoras
 * @property \App\Model\Table\EduinicialTable|\Cake\ORM\Association\HasMany $Eduinicial
 * @property \App\Model\Table\HigieneTable|\Cake\ORM\Association\HasMany $Higiene
 * @property \App\Model\Table\InfraestructuraTable|\Cake\ORM\Association\HasMany $Infraestructura
 * @property \App\Model\Table\NinosTable|\Cake\ORM\Association\HasMany $Ninos
 * @property \App\Model\Table\NutricionTable|\Cake\ORM\Association\HasMany $Nutricion
 * @property \App\Model\Table\SaludTable|\Cake\ORM\Association\HasMany $Salud
 *
 * @method \App\Model\Entity\Sala get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sala newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sala[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sala|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sala|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sala patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sala[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sala findOrCreate($search, callable $callback = null, $options = [])
 */
// class SalaTable extends Table
// {

//     /**
//      * Initialize method
//      *
//      * @param array $config The configuration for the Table.
//      * @return void
//      */
//     public function initialize(array $config)
//     {
//         parent::initialize($config);

//         $this->setTable('sala');
//         $this->setDisplayField('id');
//         $this->setPrimaryKey('id');

//     }

//     /**
//      * Default validation rules.
//      *
//      * @param \Cake\Validation\Validator $validator Validator instance.
//      * @return \Cake\Validation\Validator
//      */
//     public function validationDefault(Validator $validator)
//     {
//         $validator
//             ->integer('id')
//             ->allowEmpty('id', 'create');

//         $validator
//             ->scalar('nombre')
//             ->maxLength('nombre', 45)
//             ->allowEmpty('nombre');

//         return $validator;
//     }

//     /**
//      * Returns a rules checker object that will be used for validating
//      * application integrity.
//      *
//      * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
//      * @return \Cake\ORM\RulesChecker
//      */
//     public function buildRules(RulesChecker $rules)
//     {
//         /*$rules->add($rules->existsIn(['centroinfantil_id'], 'Centroinfantil'));

//         return $rules;*/
//     }
// }
