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
        $this->data['pagebody'] = 'justone';    
        //had wrong quote before cause i copied from my other file
        $this->data = array_merge($this->data,$this->quotes->get(5));
        $this->render();
    }
    //every day im freaken wiser
    function wisdom() 
    {
        $this->data['pagebody'] = 'justone';   
        $this->data = array_merge($this->data,$this->quotes->get(6));
        $this->render();
    }
}
