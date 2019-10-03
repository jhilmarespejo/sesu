<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalaTable Test Case
 */
class SalaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalaTable
     */
    public $Sala;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sala',
        'app.centroinfantil',
        'app.administrativo',
        'app.ambiente',
        'app.carpetaedus',
        'app.carpetaninos',
        'app.cocina',
        'app.deposito',
        'app.educadoras',
        'app.eduinicial',
        'app.higiene',
        'app.infraestructura',
        'app.ninos',
        'app.nutricion',
        'app.salud'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sala') ? [] : ['className' => SalaTable::class];
        $this->Sala = TableRegistry::getTableLocator()->get('Sala', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sala);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
