<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fabricantecarro Model
 *
 * @method \App\Model\Entity\Fabricantecarro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fabricantecarro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fabricantecarro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fabricantecarro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fabricantecarro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fabricantecarro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fabricantecarro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fabricantecarro findOrCreate($search, callable $callback = null, $options = [])
 */
class FabricantecarroTable extends Table
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

        $this->setTable('fabricantecarro');
        $this->setDisplayField('codigo');
        $this->setPrimaryKey('codigo');
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
            ->allowEmptyString('codigo', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 50)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        return $validator;
    }
}
