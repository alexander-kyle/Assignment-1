<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends Application {
    
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    //index for Portfolio
    //
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

    public function index($player = null) {
        $player = $this->selectPlayer($player);
        $this->data['portfolioOfPlayer'] = $player;



        $this->data['portfolio_recent'] = $this->portfolio_recent($player);
        $this->data['portfolio_owned'] = $this->portfolio_owned($player);


        $this->data['pagebody'] = 'portfolio';
        $this->render();
    }

    
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    //function to decide which players infromation to display
    //
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    
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

    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    //function for recent transactions
    //
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    
    private function portfolio_recent($player) {

        $rows = array();
        foreach ($this->Purchases->getRecentPurchasesForPlayer($player)
        as $record) {
            $rows[] = (array) $record;
        }
        $this->data['activities'] = $rows;

        return $this->parser->parse('portfolio_recent', $this->data, true);
    }
    
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    //function for pieces a user owns
    //
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

    private function portfolio_owned($player) {
        // Get the counts of all the piece types.
        $this->data['s11Heads'] = $this->Collections->getPieceTypeCountForPlayer($player, '11', '0');
        $this->data['s11Bodies'] = $this->Collections->getPieceTypeCountForPlayer($player, '11', '1');
        $this->data['s11Legs'] = $this->Collections->getPieceTypeCountForPlayer($player, '11', '2');
        $this->data['s13Heads'] = $this->Collections->getPieceTypeCountForPlayer($player, '13', '0');
        $this->data['s13Bodies'] = $this->Collections->getPieceTypeCountForPlayer($player, '13', '1');
        $this->data['s13Legs'] = $this->Collections->getPieceTypeCountForPlayer($player, '13', '2');
        $this->data['s26Heads'] = $this->Collections->getPieceTypeCountForPlayer($player, '26', '0');
        $this->data['s26Bodies'] = $this->Collections->getPieceTypeCountForPlayer($player, '26', '1');
        $this->data['s26Legs'] = $this->Collections->getPieceTypeCountForPlayer($player, '26', '2');

        return $this->parser->parse('portfolio_owned', $this->data, true);
    }

}
