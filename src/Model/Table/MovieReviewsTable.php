<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MovieReviews Model
 *
 * @method \App\Model\Entity\MovieReview get($primaryKey, $options = [])
 * @method \App\Model\Entity\MovieReview newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MovieReview[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MovieReview|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MovieReview patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MovieReview[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MovieReview findOrCreate($search, callable $callback = null, $options = [])
 */
class MovieReviewsTable extends Table
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

        $this->setTable('movie_reviews');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('imdb_score')
            ->allowEmpty('imdb_score');

        $validator
            ->integer('num_user_for_reviews')
            ->allowEmpty('num_user_for_reviews');

        $validator
            ->integer('num_voted_users')
            ->allowEmpty('num_voted_users');

        $validator
            ->integer('num_critic_for_reviews')
            ->allowEmpty('num_critic_for_reviews');

        return $validator;
    }
}
