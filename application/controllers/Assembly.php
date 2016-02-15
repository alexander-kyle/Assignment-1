<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Assembly extends Application {

    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    // index for assembly
    //
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

    function __construct() {
        parent::__construct();
    }
	public function index($player = null)
	{
            $player = $this->selectPlayer($player);
            $this->data['assemblyOfPlayer'] = $player;
            $this->data['pagebody'] = 'Assembly';
            
            //$playerName = $this->session->userdata('sessionPlayer');
            //if($playerName!=somePlayer()){echo "please log in";)}else{
           
            $rows = array();
            foreach ($this->Series->assemble($player,'0') as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['collections'] = $rows;
            
            
            $rows = array();
            foreach ($this->Series->assemble($player,'1') as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['collections2'] = $rows;
            
            
            $rows = array();
            foreach ($this->Series->assemble($player,'2') as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['collections3'] = $rows;


            $this->render(); 
        }
        
        private function selectPlayer($player) {

        $portfolioOfPlayer = $this->input->post('portfolioOfPlayer');
        if ($portfolioOfPlayer !== null) {

            $_POST['portfolioOfPlayer'] = null;
            return $portfolioOfPlayer;
        }


        if ($player !== null) {

            if (!$this->Players->exists($player)) {

                if ($this->session->userdata('logged_in')) {
                    $player = $this->session->userdata('sessionPlayer');
                } else {
                    $player = $this->Players->getFirstPlayerName();
                }
            }
        } else {

            if ($this->session->userdata('logged_in')) {
                $player = $this->session->userdata('sessionPlayer');
            } else {
                $player = $this->Players->getFirstPlayerName();
            }
        }

        return $player;
    }
}
