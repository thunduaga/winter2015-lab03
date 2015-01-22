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
        $this->data['pagebody'] = 'homepage';  //this is the view we are using
        $source = $this->quotes->all();
        //get all quotes in variable source
        $authors = array();
        //make an array to store all those quotes
        foreach ($source as $record) 
        {
            $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
            //organize all the quotes we retrieved into source
        }
        $this->data['authors'] = $authors;

        $this->render();
    }

    function shucks() 
    {
        $this->data['pagebody'] = 'justone'; //this is the view we are using   
        $this->data = array_merge($this->data,$this->quotes->get(2));
        //this is quote we are displaying
        $this->render();
    }

}
