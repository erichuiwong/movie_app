<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MoviesFixture
 *
 */
class MoviesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'movie_desc_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'people_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'movie_reviews_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'movie_ref' => ['type' => 'index', 'columns' => ['movie_desc_id'], 'length' => []],
            'people_ref' => ['type' => 'index', 'columns' => ['people_id'], 'length' => []],
            'movie_reviews_ref' => ['type' => 'index', 'columns' => ['movie_reviews_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'movies_ibfk_1' => ['type' => 'foreign', 'columns' => ['movie_desc_id'], 'references' => ['movie_desc', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'movies_ibfk_2' => ['type' => 'foreign', 'columns' => ['people_id'], 'references' => ['people', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'movies_ibfk_3' => ['type' => 'foreign', 'columns' => ['movie_reviews_id'], 'references' => ['movie_reviews', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'movie_desc_id' => 1,
            'people_id' => 1,
            'movie_reviews_id' => 1
        ],
    ];
}
