<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SurveyResponseTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SurveyResponseTable Test Case
 */
class SurveyResponseTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SurveyResponseTable
     */
    public $SurveyResponse;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.survey_response'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SurveyResponse') ? [] : ['className' => 'App\Model\Table\SurveyResponseTable'];
        $this->SurveyResponse = TableRegistry::get('SurveyResponse', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SurveyResponse);

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
