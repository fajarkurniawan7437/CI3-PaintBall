<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user/home');
        }
        $this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered !'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Password dont match !',
            'min_length' => 'Password too short !'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('date', 'Date', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('image', 'Image', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Form Resgistration';
            $this->load->view('menu/header', $data);
            $this->load->view('registration/index');
            $this->load->view('menu/footer');
        } else {
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
                $config['upload_path'] = './assets/img/';
                $config['encypt_name'] = true;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $nimage = $this->upload->data('file_name');
                    $this->db->set('image', $nimage);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = [
                'first_name' => htmlspecialchars($this->input->post('firstname', true)),
                'last_name' => htmlspecialchars($this->input->post('lastname', true)),
                'email' => $this->input->post('email', true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'date_created' => time(),
                'active' => 1,
                'image' => 'profile.jpg',
                'date_birth' => date($this->input->post('date', true)),
                'gender' => htmlspecialchars($this->input->post('gender', true)),
                'image' => $upload_image = $this->input->post('image', true)
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Account has been Created. Please Login</div>');
            redirect('login');
        }
    }
}
