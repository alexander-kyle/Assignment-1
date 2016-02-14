<?php
class Players extends MY_Model {
    
    function __construct() {
        parent::__construct();
        $this->_tablename ='players';
        $this->_keyField ='Player';
    }
    
    public function getAmountOfPeanuts() 
    {
        $query = $this->db->query(''
               . 'SELECT p.Player, p.Peanuts, COUNT(c.Piece) as Equity '
               . 'FROM players p '
               . 'INNER JOIN collections c '
               . 'ON p.Player = c.Player '
               . 'GROUP BY p.Player '
               . 'ORDER BY p.Player ASC;');
                
                return $query->result();
        
    }
    public function getFirstPlayerName()
    {
        $query = $this->db->query(''
                . 'SELECT Player '
                . 'FROM `players` '
                . 'ORDER BY Player ASC '
                . 'LIMIT 1;');
        
        return $query->row()->Player;
    }
}

