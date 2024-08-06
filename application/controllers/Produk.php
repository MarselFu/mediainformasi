<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function index() {
        $this->load->view('produk/domestik');
    }

    public function domestik() {
        $this->load->view('produk/domestik');
    }

    public function internasional() {
        $this->load->view('produk/internasional');
    }
    public function posaja() {
        $this->load->view('produk/posaja');
    }
    public function cds() {
        $this->load->view('produk/cds');
    }
    public function pembayaran() {
        $this->load->view('produk/pembayaran');
    }
    public function remitansi() {
        $this->load->view('produk/remitansi');
    }
    public function lainnya() {
        $this->load->view('produk/lainnya');
    }
}
?>
