<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Centroinfantil Model
 *
 * @property \App\Model\Table\SalaTable|\Cake\ORM\Association\HasMany $Sala
 *
 * @method \App\Model\Entity\Centroinfantil get($primaryKey, $options = [])
 * @method \App\Model\Entity\Centroinfantil newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Centroinfantil[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Centroinfantil|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Centroinfantil|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Centroinfantil patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Centroinfantil[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Centroinfantil findOrCreate($search, callable $callback = null, $options = [])
 */
class CentroinfantilTable extends Table
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

        $this->setTable('centroinfantil');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Sala', [
            'foreignKey' => 'centroinfantil_id'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->allowEmpty('nombre');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 45)
            ->allowEmpty('tipo');

        $validator
            ->scalar('administrador')
            ->maxLength('administrador', 45)
            ->allowEmpty('administrador');

        $validator
            ->scalar('cobertura')
            ->maxLength('cobertura', 3)
            ->allowEmpty('cobertura');

        $validator
            ->scalar('convenio')
            ->maxLength('convenio', 45)
            ->allowEmpty('convenio');

        return $validator;
    }
}
