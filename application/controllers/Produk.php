<?php
class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $config['base_url']     = site_url('produk/index');
        $config['total_rows']   = $this->db->count_all('produk_paintball');
        $config['per_page']     = 8;
        $config['uri_segment']  = 3;
        $choice                 = $config["total_rows"] / $config['per_page'];
        $config["num_links"]    = floor($choice);

        $config['first_link']      = 'First';
        $config['last_link']       = 'Last';
        $config['next_link']       = 'Next';
        $config['prev_link']       = 'Prev';
        $config['full_tag_open']   = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']  = '</ul></nav></div>';
        $config['num_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']   = '</span></li>';
        $config['cur_tag_open']    = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']   = '</span></li>';
        $config['next_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo</span></span></li>';
        $config['prev_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';

        $this->pagination->initialize($config);
        $data['page']   = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['judul'] = 'Halaman Produk';
        $data['produk'] = $this->Produk_tampil->tampil_data($config["per_page"], $data['page'])->result();
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('menu/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('menu/footer');
    }

    public function add_cart($id)
    {

        $data['judul'] = 'Halaman Add Cart';
        $this->load->view('menu/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('menu/footer');

        $produk = $this->Produk_tampil->find($id);

        $data = array(
            'id'        => $produk->id_produk,
            'qty'       => 1,
            'price'     => $produk->harga_produk,
            'name'      => $produk->nama_produk
        );

        $this->cart->insert($data);
        redirect('produk');
    }

    public function detail_cart()
    {
        $data['judul'] = 'Detail Cart';
        $this->load->view('menu/header', $data);
        $this->load->view('produk/add_cart', $data);
        $this->load->view('menu/footer');
    }

    public function payment()
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please login!</div>');
            redirect('login');
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('telp', 'No Telp', 'required|trim');
        $data['judul'] = 'Payment';
        $this->load->view('menu/header', $data);
        $this->load->view('produk/payment', $data);
        $this->load->view('menu/footer');
    }

    public function delete_cart()
    {
        $this->cart->destroy();
        redirect('produk');
    }
    public function order()
    {
        $data['judul'] = 'Order Process';
        $this->cart->destroy();
        $this->load->view('menu/header', $data);
        $this->load->view('produk/order', $data);
        $this->load->view('menu/footer');
    }

    public function detail($id_produk)
    {
        $data['judul'] = 'Halaman Detail Produk';
        $data['produk'] = $this->Produk_tampil->detail_produk($id_produk);
        $this->load->view('menu/header', $data);
        $this->load->view('produk/detail', $data);
        $this->load->view('menu/footer');
    }
}
