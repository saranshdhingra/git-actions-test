<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Operations;
use PHPUnit\Framework\TestCase;

class OperationsTest extends TestCase{
    private $operator;

    public function setUp() : void{
        $this->operator = new Operations();
    }

    public function testMultiply() {
        $val = 1;
        $result = $this->operator->multiply($val);
        $this->assertEquals($result, $val * 2);
    }

    public function testMultiplyFloat() {
        $val = 1.2;
        $result = $this->operator->multiply($val);
        $this->assertEquals($result, $val * 2);
    }

    public function testMultiplyFails() {
        $val = "abc";

        try {
            $result = $this->operator->multiply($val);
            $this->fail();
        }
        catch(\Exception $e) {
            if( $e->getMessage() === 'Invalid types!') { 
                $this->assertTrue(true);
            }
            else {
                $this->fail();
            }
        }
    }
}