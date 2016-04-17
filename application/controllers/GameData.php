<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class GameData extends Application {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->data['title'] = 'Game Data';
        $this->dadta['pagebody'] = 'gameData';
        
       
        print_r($this->test->get_player_recent_trans('', 3));
                $this->render();
    }
}