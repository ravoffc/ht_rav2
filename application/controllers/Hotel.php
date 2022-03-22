<?php

class Hotel extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'ravoffc | Hotel Hebat';
        $this->load->view('templates/header', $data);
        $this->load->view('hotel/index');
        $this->load->view('templates/footer');
    }
}
?>