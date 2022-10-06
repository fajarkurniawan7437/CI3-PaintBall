<?php
class Invoice extends CI_Controller
{
    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $data['judul'] = 'Order Process';
        $this->load->view('menu/header', $data);
        $this->load->view('produk/order', $data);
        $this->load->view('menu/footer');
    }
}
