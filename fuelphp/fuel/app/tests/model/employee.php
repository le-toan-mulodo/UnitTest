<?php
require_once APPPATH.'/tests/model/base.php';
require_once APPPATH.'../vendor/autoload.php';

class Test_Model_Employee extends Test_Model_Base {
    private $model_employee;

    public function setUp() {
        $this->model_employee = new Model_Employee();
    }

	public function test_addEmployee() {
		$this->assertEquals('addEmployee', $this->model_employee->addEmployee());
	}

	public function test_deleteEmployee() {
	    /*
        $mock = Mockery::mock("Model_Employee['deleteEmployee']");
        $mock->shouldReceive('deleteEmployee')
	       ->once()
	       ->andReturn('deleteEmployee');
	    $this->assertEquals('deleteEmployee', $mock->deleteEmployee());
	    */

	    $mock = Mockery::mock("Model_Employee['deleteEmployee']");
	    $mock->shouldReceive('deleteEmployee')
	    ->twice()
	    ->andReturn('deleteEmployee', 'delete2Employee');
	    $this->assertEquals('deleteEmployee', $mock->deleteEmployee());

	    $this->assertEquals('delete2Employee', $mock->deleteEmployee());
	}
}