<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VideoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VideoTable Test Case
 */
class VideoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VideoTable
     */
    public $Video;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.video'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Video') ? [] : ['className' => VideoTable::class];
        $this->Video = TableRegistry::get('Video', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Video);

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
