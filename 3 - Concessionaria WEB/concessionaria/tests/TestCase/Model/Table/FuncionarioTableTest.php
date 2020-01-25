<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuncionarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuncionarioTable Test Case
 */
class FuncionarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FuncionarioTable
     */
    public $Funcionario;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Funcionario',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Funcionario') ? [] : ['className' => FuncionarioTable::class];
        $this->Funcionario = TableRegistry::getTableLocator()->get('Funcionario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Funcionario);

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
