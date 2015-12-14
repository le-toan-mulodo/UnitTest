<?php
use Fuel\Core\TestCase;
class Test_Model_User extends TestCase {
    private $model_user;

    public function setUp() {
    	$this->model_user = new Model_User();
    }

    public function tearDown() {
    	unset($this->model_user);
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


    public function test_insertDataUser() {
        $this->assertEquals('insertData', $this->model_user->insertData());
    }

    public function test_deleteDataUser() {
        $this->assertEquals('deleteData', $this->model_user->deleteData());
    }
}