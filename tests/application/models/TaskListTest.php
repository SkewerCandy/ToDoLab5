<?php
use PHPUnit\Framework\TestCase;

class TaskListTest extends TestCase
  {
    private $CI;
    private $list;
    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();
      $this->CI->load->model('tasks');
      $this->CI->load->model('task');
      $this->list = new Tasks();
    }
    
    public function testIfDone()
    {
        $undone = 0;
        $done = 0;
        foreach ($this->list->all() as $task)
        {
            if ($task->status != 2){
                $undone++;
            }else{
                $done++;
            }
        }
        $this->assertEquals(TRUE, $undone > $done);
    }
  }