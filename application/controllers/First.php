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
        $this->data['pagebody'] = 'justone'; //this is the view we are using
        $this->data = array_merge($this->data, $this->quotes->first());
        // this is the quote we are displaying
        $this->render();
    }

    function zzz() 
    {
        $this->data['pagebody'] = 'justone'; //this is the view we are using
        $this->data = array_merge($this->data,$this->quotes->first());
        // this is the quote we are displaying
        $this->render();
    }
    function gimme($which) 
    {
        $this->data['pagebody'] = 'justone'; //this is the view we are using
        $this->data = array_merge($this->data,$this->quotes->get($which));
        // this is the quote we are displaying
        $this->render();
    }
    
    
}