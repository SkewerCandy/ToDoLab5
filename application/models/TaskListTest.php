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
      $this->CI->load->model('task_entity');
      $this->Task = new Task();
    }
    
    public function testAgeSetter()
    {
                $expected = 20;
                $this->Task->age = 20;
                $this->assertEquals(20,$this->Task->age);
    }
    
    public function testSetFlag ($value){
        $expected = 1;
        $this->Task->flag = 1;
        $this->assertEquals(1,$this->Task->flag);
    }
    
    public function testSetGroup($value){
        $expected = 2;
        $this->Task->group = 2;
        $this->assertEquals(2,$this->Task->group);
    }
    
    public function testSetPriority($value){
        $expected = 3;
        $this->Task->priority = 3;
        $this->assertEquals(3,$this->Task->priority);
    }
    
    public function testSetSize($value){
        $expected = 1;
        $this->Task->size = 1;
        $this->assertEquals(1,$this->Task->size);
    }
    
    public function testSetStatus($value){
        $expected = 1;
        $this->Task->status = 1;
        $this->assertEquals(1,$this->Task->status);
    }
  }