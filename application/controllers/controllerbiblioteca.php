<?php

/**
 * Description of ControllerBiblioteca
 *
 * @author hunter
 */
class ControllerBiblioteca extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('querys');
    }

    public function index()
    {
        $this->load->view('principal');
    }
    
    public function procesar()
    {
        $nombre=  $this->input->post('name');
        echo "Nombre $nombre";
        $users=$this->querys->sampleQuery();
        print_r($users);
    }
}

?>
