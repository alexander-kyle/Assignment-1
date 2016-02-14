<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

    /**
     * Index Page for this controller.
     */
    public function index() {
        
        $this->data['game_players'] = $this->game_players();
        $this->data['game_summary'] = $this->game_summary();
        
        $this->data['pagebody'] = 'welcome';
        $this->render();
        
    }
    
    private function game_players()
    {
        $rows = array();
        foreach ($this->Players->getAmountOfPeanuts() as $record)
        {
            $rows[] =(array) $record;
        }
        $this->data['gamers'] = $rows;
        
        return $this->parser->parse('game_players', $this->data, true);
    }
    
    private function game_summary()
    {
        $rows = array();
        foreach ($this->Summary->getSummary() as $record)
        {
            $rows[] =(array) $record;
        }
        $this->data['summary'] = $rows;
        
        return $this->parser->parse('game_summary', $this->data, true);
    }

}
