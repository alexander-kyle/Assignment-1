<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Assembly extends Application {

    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    // index for assembly
    //
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    public function index() {
        $this->data['pagebody'] = 'Assembly';
        $this->render();
    }

}
