<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdministrativoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdministrativoTable Test Case
 */
class AdministrativoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdministrativoTable
     */
    public $Administrativo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.administrativo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Administrativo') ? [] : ['className' => AdministrativoTable::class];
        $this->Administrativo = TableRegistry::getTableLocator()->get('Administrativo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Administrativo);

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
