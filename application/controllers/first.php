<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of first
 *
 * @author Chris
 */
class First extends Application
{
    //put your code here
    function __construct() 
    {
        parent::__construct();
    }

    function index() 
    {
        $this->data['pagebody'] = 'justone';   //i needed help doing this
        $this->data = array_merge($this->data, $this->quotes->first());
        $this->render();
    }

    function zzz() 
    {
        $this->data['pagebody'] = 'justone';   //this is for the sleep remap
        $this->data = array_merge($this->data,$this->quotes->first());
        $this->render();
    }
    function gimme($which) 
    {
        $this->data['pagebody'] = 'justone';    //use for gimme/3
        $this->data = array_merge($this->data,$this->quotes->get($which));
        $this->render();
    }
    
    
}