<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Welcome
 *
 * @author Chris
 */
class Welcome extends Application {

    function __construct()
    {
        parent::__construct();
    }

    function index() 
    {
        $this->data['pagebody'] = 'homepage';   
        $source = $this->quotes->all();
        $authors = array();
        foreach ($source as $record) 
        {
            $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        }
        $this->data['authors'] = $authors;

        $this->render();
    }

    function shucks() 
    {
        $this->data['pagebody'] = 'justone';    
        $this->data = array_merge($this->data,$this->quotes->get(2));
        $this->render();
    }

}
