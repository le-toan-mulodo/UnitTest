<?php
use Fuel\Core\TestCase;

require_once APPPATH.'/tests/model/base.php';
require_once APPPATH.'../vendor/autoload.php';
class Test_Model_User extends Test_Model_Base {
    private $model_user;

    public function setUp() {
    	$this->model_user = new Model_User();
    }

    public function tearDown() {
    	unset($this->model_user);
    	Mockery::close();
    }

    public function test_a() {
        $this->assertTrue(true);
    }

    public function test_getDataUser() {
        $this->assertEquals('getData', $this->model_user->getData());
    }

    public function test_updateDataUser() {
        $this->assertEquals('updateData', $this->model_user->updateData());
    }

    public function test_inherit() {
    	$this->assertEquals('baseA', $this->baseA());
    }

    public function test_insertDataUser() {
        $this->assertEquals('insertData', $this->model_user->insertData());
    }

    public function test_deleteDataUser() {
        $this->assertEquals('deleteData', $this->model_user->deleteData());
    }

    public function test_addPrivate() {
        $this->assertEquals('addPrivate', $this->execNotPublicMethod($this->model_user, 'addPrivate'));
    }

    public function test_nativeMocks() {
        /*
    	$mock = $this->getMock('SomeClass');
    	$mock->expects($this->once())
    	   ->method('getName')
    	   ->will($this->returnValue('Toan'));

    	$this->assertEquals('Toan', $mock->getName());
    	*/
        $mock = Mockery::mock('SomeClass');
        $mock->shouldReceive('a')
            ->once()
            ->andReturn('A');
        $this->assertEquals('A', $mock->a());
    }
}