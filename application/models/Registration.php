<?php

//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
// Registers Us as an agent to the server 
//
//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

class Register extends CI_Model {

    protected $register;
    protected $token;

//constructer

    function __construct() {
        parent::__construct();
        $this->register = 'http://botcards.jlparry.com/register';
    }

//regisster function

    function _register() {
        $_POST['team'] = 'A11';
        $_POST['name'] = 'TunnelSnakes';
        $_POST['password'] = 'tuesday';

        $fields = array(
            'team' => urlencode($_POST['team']),
            'name' => urlencode($_POST['name']),
            'password' => urlencode($_POST['password'])
        );
// put data in URL for the POST
        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');
//open connection
        $ch = curl_init();
//set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
//execute post
        $this->token = curl_exec($ch);
//close connection
        curl_close($ch);
    }

// get token function 
    function get_token() {
        return $this->token;
    }

}
