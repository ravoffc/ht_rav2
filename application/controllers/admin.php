<?php

class Admin extends CI_Controller {
    public function index () {
        $data['judul'] = 'ravoffc | Hotel Hebat';
        $this->load->view('interface/header', $data);
        $this->load->view('admin/home/index');
        $this->load->view('interface/footer');
    }
}

?>
