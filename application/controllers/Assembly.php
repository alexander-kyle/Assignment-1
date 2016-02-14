<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Assembly extends Application {

    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    // index for assembly
    //
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

	public function index()
	{
            //$playerName = $this->session->userdata('sessionPlayer');
            //if($playerName!=somePlayer()){echo "please log in";)}else{
            $rows = array();
            foreach ($this->Series->assemble('George','0') as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['collections'] = $rows;
            $this->data['pagebody'] = 'Assembly';
            
            $rows = array();
            foreach ($this->Series->assemble('George','1') as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['collections2'] = $rows;
            $this->data['pagebody'] = 'Assembly';
            
            $rows = array();
            foreach ($this->Series->assemble('George','2') as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['collections3'] = $rows;
            $this->data['pagebody'] = 'Assembly';
            //}
            $this->render(); 
                
	}
}
