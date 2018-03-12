<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Task extends Entity {
    var $flag;
    var $group;
    var $priority;
    var $size;
    var $status;
    
    public function setFlag ($value){
        if($value == 1){
            $flag = $value;
        }
    }
    
    public function setGroup($value){
        if($value > 0 && $value < 5){
            $group = $value;
        }
    }
    
    public function setPriority($value){
        if($value > 0 && $value < 4){
            $priority = $value;
        }
    }
    
    public function setSize($value){
        if($value > 0 && $value < 4){
            $size = $value;
        }
    }
    
    public function setStatus($value){
        if($value > 0 && $value < 3){
            $status = $value;
        }
    }
}

