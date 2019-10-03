<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Administrativo Model
 *
 * @method \App\Model\Entity\Administrativo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Administrativo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Administrativo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Administrativo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administrativo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administrativo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Administrativo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Administrativo findOrCreate($search, callable $callback = null, $options = [])
 */
class AdministrativoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('administrativo');
        $this->setDisplayField('sala_id');
        $this->setPrimaryKey('sala_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('sala_id')
            ->allowEmpty('sala_id', 'create');

        $validator
            ->boolean('libro_actas')
            ->allowEmpty('libro_actas');

        $validator
            ->boolean('cuaderno_visitas')
            ->allowEmpty('cuaderno_visitas');

        $validator
            ->boolean('planilla_asistencia_personal')
            ->allowEmpty('planilla_asistencia_personal');

        return $validator;
    }
}
