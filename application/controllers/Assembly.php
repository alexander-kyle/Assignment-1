<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assembly extends Application  {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->data['pagebody'] = 'Assembly';
                $this->render();
                
	}
}
