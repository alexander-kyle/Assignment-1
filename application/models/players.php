<?php
class Players extends MY_Model {
    
    function __construct() {
        parent::__construct();
        $this->_tablename ='players';
        $this->_keyField ='Player';
    }
}

