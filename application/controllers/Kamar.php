<?php

class Kamar extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'ravoffc | Hotel Hebat';
        $this->load->view('templates/header', $data);
        $this->load->view('users/kamar/index');
        $this->load->view('templates/footer');
    }
}
?>
