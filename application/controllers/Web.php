<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('layout/header', $data);
        $this->load->view('home');
        $this->load->view('senarai_waris');
        $this->load->view('harta_pusaka');
        $this->load->view('pengiraan');
        $this->load->view('layout/footer');
    }

    public function senarai_waris()
    {
        $data['title'] = 'Senarai Waris';
        $this->load->view('layout/header', $data);
        $this->load->view('senarai_waris');
        $this->load->view('layout/footer');
    }

    public function harta_pusaka()
    {
        $data['title'] = 'Harta Pusaka';
        $this->load->view('layout/header', $data);
        $this->load->view('harta_pusaka');
        $this->load->view('layout/footer');
    }

    public function pengiraan()
    {
        $data['title'] = 'Pengiraan';
        $this->load->view('layout/header', $data);
        $this->load->view('pengiraan');
        $this->load->view('layout/footer');
    }
}
