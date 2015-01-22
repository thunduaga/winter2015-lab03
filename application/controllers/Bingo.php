<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bingo
 *
 * @author Chris
 */
class Bingo extends Application
{
    //put your code here
    function __construct() 
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->data['pagebody'] = 'justone'; //this is the view we are displaying   
        $this->data = array_merge($this->data,$this->quotes->get(5));
        // this is the quote we are displaying
        $this->render();
    }
    function wisdom() 
    {
        $this->data['pagebody'] = 'justone'; //this is the view we are displaying 
        $this->data = array_merge($this->data,$this->quotes->get(6));
        // this is the quote we are displaying
        $this->render();
    }
}
