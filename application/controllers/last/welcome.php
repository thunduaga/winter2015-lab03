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
    function index() 
    {
        $this->data['pagebody'] = 'justone';   //this is the view we are using 
        $this->data = array_merge($this->data,$this->quotes->last());
        //this is the quote we are showing (the last one in the array
        $this->render();
    }
}

