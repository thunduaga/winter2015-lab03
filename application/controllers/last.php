<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of last
 *
 * @author Chris
 */
class Last extends Application{
    //put your code here
    function __construct() {
        parent::__construct();
    }
    //OK
    //I THINK I MIGHT KNOW WHATS GOING ON HERE AND I DONT LIKE IT
    function index() {
        $this->data['pagebody'] = 'homepage';    
        $this->data = array_merge($this->data,$this->quotes->last());
        $this->render();
    }
}
