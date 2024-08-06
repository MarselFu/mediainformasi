<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

    public function index() {
        $this->load->view('tentang/tentang1');
    }

    public function tentang1() {
        $this->load->view('tentang/tentang1');
    }

    public function produk2() {
        $this->load->view('produk/produk2');
    }

    public function produk3() {
        $this->load->view('produk/produk3');
    }
}
?>
