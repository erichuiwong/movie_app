<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovieReviewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovieReviewsTable Test Case
 */
class MovieReviewsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MovieReviewsTable
     */
    public $MovieReviews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.movie_reviews'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MovieReviews') ? [] : ['className' => 'App\Model\Table\MovieReviewsTable'];
        $this->MovieReviews = TableRegistry::get('MovieReviews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MovieReviews);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
