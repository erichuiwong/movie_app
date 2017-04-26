<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovieDescTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovieDescTable Test Case
 */
class MovieDescTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MovieDescTable
     */
    public $MovieDesc;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.movie_desc',
        'app.movies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MovieDesc') ? [] : ['className' => 'App\Model\Table\MovieDescTable'];
        $this->MovieDesc = TableRegistry::get('MovieDesc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MovieDesc);

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
