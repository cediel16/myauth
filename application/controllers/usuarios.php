<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuarios_model');
    }

    public function entrar() {
        $this->template->load('sign', 'usuarios/entrar');
    }

    public function registrate() {
        $this->template->load('sign', 'usuarios/registrate');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */