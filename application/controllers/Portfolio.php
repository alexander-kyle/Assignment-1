<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Portfolio extends Application {
	/**
	 * Index Page for this controller.
	 */
	public function index($player = null)
        {
            $player = $this->selectPlayer($player);
            $this->data['portfolioOfPlayer'] = $player;
            
          
            $this->data['portfolio_select'] = $this->portfolio_select();
            $this->data['portfolio_recent'] = 
                    $this->portfolio_recent($player);
            $this->data['portfolio_owned'] = 
                    $this->portfolio_owned($player);
            
           
		$this->data['pagebody'] = 'portfolio';
                $this->render();
	}
         private function selectPlayer($player)
        {
            // Check for a user selection and prioritize it over other options.
            $portfolioOfPlayer = $this->input->post('portfolioOfPlayer');
            if ($portfolioOfPlayer !== null)
            {
                // Clear the user selection from the session and return it;
                $_POST['portfolioOfPlayer'] = null;
                return $portfolioOfPlayer;
            }
            
            // Sets the selected player to the provided value, then the  
            // logged-in user, then the alphabetically first player in the 
            // database, whichever is valid first.
            
            // If player is not null...
            if ($player !== null)
            {
                // ...then if player does not exist...
                if (!$this->Players->exists($player))
                {
                    // ...then if the user is logged in, select logged-in user.
                    if ($this->session->userdata('logged_in'))
                    {
                        $player = $this->session->userdata('sessionPlayer');
                    }
                    // ...then if the user is not logged in, select first user.
                    else
                    {
                        $player = $this->Players->getFirstPlayerName();
                    }
                }
            }
            // If player is null...
            else
            {
                // ...then if the user is logged in, select logged-in user.
                if ($this->session->userdata('logged_in'))
                {
                    $player = $this->session->userdata('sessionPlayer');
                }
                // ... then if user is not logged in, select first user.
                else
                {
                    $player = $this->Players->getFirstPlayerName();
                }
            }
            
            return $player;
        }
        
        /**
         * Builds the portfolio_select subview.
         */
        private function portfolio_select()
        {
            // Get the game's current players.
            $rows = array();
            foreach ($this->Players->all() as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['players'] = $rows;
            
            return $this->parser->parse('portfolio_select', $this->data, true);
        }
        
        /**
         * Builds the portfolio_recent subview.
         */
        private function portfolio_recent($player)
        {
            // Get the player's recent activity.
            $rows = array();
            foreach ($this->Purchases->getRecentPurchasesForPlayer($player) 
                    as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['activities'] = $rows;
            
            return $this->parser->parse('portfolio_recent', $this->data, 
                    true);
        }
        
        /**
         * Builds the portfolio_owned subview.
         */
        private function portfolio_owned($player)
        {
            // Get the counts of all the piece types.
            $this->data['s11Heads'] = 
                    $this->Collections->getPieceTypeCountForPlayer($player, 
                            '11', '0');
            $this->data['s11Bodies'] = 
                    $this->Collections->getPieceTypeCountForPlayer($player, 
                            '11', '1');
            $this->data['s11Legs'] = 
                    $this->Collections->getPieceTypeCountForPlayer($player, 
                            '11', '2');
            $this->data['s13Heads'] = 
                    $this->Collections->getPieceTypeCountForPlayer($player, 
                            '13', '0');
            $this->data['s13Bodies'] = 
                    $this->Collections->getPieceTypeCountForPlayer($player, 
                            '13', '1');
            $this->data['s13Legs'] = 
                    $this->Collections->getPieceTypeCountForPlayer($player, 
                            '13', '2');
            $this->data['s26Heads'] = 
                    $this->Collections->getPieceTypeCountForPlayer($player, 
                            '26', '0');
            $this->data['s26Bodies'] = 
                    $this->Collections->getPieceTypeCountForPlayer($player, 
                            '26', '1');
            $this->data['s26Legs'] = 
                    $this->Collections->getPieceTypeCountForPlayer($player, 
                            '26', '2');
            
            return $this->parser->parse('portfolio_owned', $this->data, 
                    true);
        }
}
