<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MovieDesc Model
 *
 * @property \Cake\ORM\Association\HasMany $Movies
 *
 * @method \App\Model\Entity\MovieDesc get($primaryKey, $options = [])
 * @method \App\Model\Entity\MovieDesc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MovieDesc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MovieDesc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MovieDesc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MovieDesc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MovieDesc findOrCreate($search, callable $callback = null, $options = [])
 */
class MovieDescTable extends Table
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

        $this->setTable('movie_desc');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Movies', [
            'foreignKey' => 'movie_desc_id'
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
            ->requirePresence('movie_title', 'create')
            ->notEmpty('movie_title');

        $validator
            ->allowEmpty('genres');

        $validator
            ->integer('duration')
            ->allowEmpty('duration');

        $validator
            ->integer('budget')
            ->allowEmpty('budget');

        $validator
            ->integer('movie_year')
            ->allowEmpty('movie_year');

        $validator
            ->integer('gross')
            ->allowEmpty('gross');

        $validator
            ->allowEmpty('movie_imdb_link');

        $validator
            ->allowEmpty('content_rating');

        return $validator;
    }
}
