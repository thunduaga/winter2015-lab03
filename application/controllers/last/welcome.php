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
class Welcome extends Application{
    //put your code here
    function __construct() 
    {
        parent::__construct();
    }
    //OK
    //I THINK I MIGHT KNOW WHATS GOING ON HERE AND I DONT LIKE IT
    //WHY DID I HAVE TO PUT THIS IN A SEPERATE FOLDER 'last'
    function index() 
    {
        $this->data['pagebody'] = 'justone';    
        $this->data = array_merge($this->data,$this->quotes->last());
        $this->render();
    }
}

