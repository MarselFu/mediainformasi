<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurir extends CI_Controller {

    public function index() {
        $this->load->view('kurir/sameday');
    }

    public function sameday() {
        $this->load->view('kurir/sameday');
    }

    public function produk2() {
        $this->load->view('produk/produk2');
    }

    public function produk3() {
        $this->load->view('produk/produk3');
    }
}
?>
