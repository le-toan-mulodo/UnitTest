<?php
use Fuel\Core\TestCase;

class Test_Model_Base extends TestCase {
    public function baseA() {
    	return "baseA";
    }

    public function baseB() {
        return "baseB";
    }

    public function baseC() {
        return "baseC";
    }


    public function test_a() {
    	$this->assertTrue(true);
    }

    public function execNotPublicMethod($obj, $method, $params = array()) {

        $reflect_class = new ReflectionClass($obj);
        if(!empty($method)) {
            $reflect_method = $reflect_class->getMethod($method);
            $reflect_method->setAccessible(true);
            return $reflect_method->invokeArgs($obj, $params);
        }
    }
}