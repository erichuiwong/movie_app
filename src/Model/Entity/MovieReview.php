<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MovieReview Entity
 *
 * @property int $id
 * @property int $imdb_score
 * @property int $num_user_for_reviews
 * @property int $num_voted_users
 * @property int $num_critic_for_reviews
 */
class MovieReview extends Entity
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
        '*' => true,
        'id' => false
    ];
}
