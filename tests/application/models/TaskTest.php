<?php
declare (strict_types =1);

use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
  {
    private $CI;
    private $Task;
    public function setUp()
    {
        // Load CI instance normally
        $this->CI = &get_instance();
        $this->CI->load->model('task');
        $this->Task = new Task();
        $this->Task->Flag = 1;
        $this->Task->Group = 2;
        $this->Task->priority = 3;
        $this->Task->size = 1;
        $this->Task->status = 1;
    }
    /*
    function testSetup() {
        $this->assertEquals(1, $this->Task->Flag);
        $this->assertEquals(2, $this->Task->Group);
        $this->assertEquals(3, $this->Task->priority);
        $this->assertEquals(1, $this->Task->size);
        $this->assertEquals(1, $this->Task->status);
    }
    */
    public function testSetFlag (){
        $expected = 01;
        $this->Task->flag = $expected;
        $this->assertEquals(1,$this->Task->flag);
    }
    
    public function testSetGroup(){
        $expected = 1234;
        $this->Task->group = $expected;
        $this->assertEquals($expected,$this->Task->group);
    }
    
    public function testSetPriority(){
        $expected = 123;
        $this->Task->priority = $expected;
        $this->assertEquals($expected,$this->Task->priority);
    }
    
    public function testSetSize(){
        $expected = 123;
        $this->Task->size = $expected;
        $this->assertEquals($expected,$this->Task->size);
    }
    
    public function testSetStatus(){
        $expected = 12;
        $this->Task->status = $expected;
        $this->assertEquals($expected,$this->Task->status);
    }
  }