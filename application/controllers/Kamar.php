<?php

class Kamar extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'ravoffc | Hotel Hebat';
        $this->load->view('templates/header');
        $this->load->view('kamar/index');
        $this->load->view('templates/footer');
    }
}
?>