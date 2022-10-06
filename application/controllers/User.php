<?php
class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function home()
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please login!</div>');
            redirect('login');
        }
        $this->load->model('Booking_tampil');
        $this->load->library('form_validation');

        $data['judul'] = 'Pemesanan PaintBall';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['booking'] = $this->Booking_tampil->getAllBooking();
        $this->load->view('menu/header1', $data);
        $this->load->view('user/home', $data);
        $this->load->view('menu/footer');
    }
    public function add()
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please login!</div>');
            redirect('login');
        }
        $this->load->model('Booking_tampil');
        $this->load->library('form_validation');

        $data['judul'] = 'Form Tambah Pemesanan PaintBall';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('date', 'Tanggal', 'required');
        $this->form_validation->set_rules('time', 'Waktu', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('menu/header1', $data);
            $this->load->view('user/add', $data);
            $this->load->view('menu/footer');
        } else {
            $this->Booking_tampil->addBooking();
            $this->session->set_flashdata('add', 'Ditambahkan');
            redirect('user/home');
        }
    }

    public function view($id_booking)
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please login!</div>');
            redirect('login');
        }
        $this->load->model('Booking_tampil');
        $this->load->library('form_validation');

        $data['judul'] = 'View Pemesanan Paintball';
        $data['booking'] = $this->Booking_tampil->getBooking($id_booking);
        $this->load->view('menu/header1', $data);
        $this->load->view('user/view', $data);
        $this->load->view('menu/footer');
    }

    public function edit($id_booking)
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please login!</div>');
            redirect('login');
        }
        $this->load->model('Booking_tampil');
        $this->load->library('form_validation');

        $data['judul'] = 'Form Edit Pemesanan PaintBall';
        $data['booking'] = $this->Booking_tampil->getBooking($id_booking);
        $data['paket'] = ['A', 'B'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('date', 'Tanggal', 'required');
        $this->form_validation->set_rules('time', 'Waktu', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('menu/header1', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('menu/footer');
        } else {
            $this->Booking_tampil->editBooking();
            $this->session->set_flashdata('add', 'Diubah');
            redirect('user/home');
        }
    }

    public function delete($id_booking)
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please login!</div>');
            redirect('login');
        }
        $this->load->model('Booking_tampil');
        $this->load->library('form_validation');

        $this->Booking_tampil->deleteBooking($id_booking);
        $this->session->set_flashdata('add', 'Dihapus');
        redirect('user/home');
    }

    public function profile()
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please login!</div>');
            redirect('login');
        }
        $this->load->model('Booking_tampil');
        $this->load->library('form_validation');

        $data['judul'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('menu/header1', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('menu/footer');
    }

    public function change_profile()
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please login!</div>');
            redirect('login');
        }
        $this->load->model('Booking_tampil');
        $this->load->library('form_validation');

        $data['judul'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('firstname', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('lastname', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('date', 'Full Name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('menu/header1', $data);
            $this->load->view('user/change_profile', $data);
            $this->load->view('menu/footer');
        } else {
            $first_name = $this->input->post('firstname');
            $last_name = $this->input->post('lastname');
            $email = $this->input->post('email');
            $date_birth = $this->input->post('date');
            $gender = $this->input->post('gender');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $array = array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'date_birth' => $date_birth,
                'gender' => $gender,
            );
            $this->db->where('email', $email);
            $this->db->update('user', $array);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated !</div>');
            redirect('user/home');
        }
    }
    public function change_password()
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please login!</div>');
            redirect('login');
        }
        $this->load->model('Booking_tampil');
        $this->load->library('form_validation');

        $data['judul'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[6]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confrim New Password', 'required|trim|min_length[6]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('menu/header1', $data);
            $this->load->view('user/change_password', $data);
            $this->load->view('menu/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password !</div>');
                redirect('user/change_password');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password !</div>');
                    redirect('user/change_password');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password change !</div>');
                    redirect('user/change_password');
                }
            }
        }
    }

    public function logout()
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please login!</div>');
            redirect('login');
        }
        $this->load->model('Booking_tampil');
        $this->load->library('form_validation');

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your have been loggout!</div>');
        redirect('login');
    }

    private function _sendEmail($kode, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_user' => 'tika07404@gmail.com',
            'smtp_pass' => 'Kartika123456',
            'smtp_port' =>  465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('tika07404@gmail.com', 'Fajar Kurniawan');
        $this->email->to($this->input->post('email'));

        if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'user/reset_password?email=' . $this->input->post('email') . '&kode=' . urlencode($kode) . '">Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function forgot_password()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Forgot Password';
            $this->load->view('menu/header', $data);
            $this->load->view('user/forgot_password', $data);
            $this->load->view('menu/footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {
                $kode = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'kode' => $kode,
                    'date_created' => time()
                ];
                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($kode, 'forgot');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Please check your email to reset your password!</div>');
                redirect('user/forgot_password');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
                redirect('user/forgot_password');
            }
        }
    }

    public function reset_password()
    {
        $email = $this->input->get('email');
        $kode = $this->input->get('kode');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['kode' => $kode])->row_array();
            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->resetPassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong Kode</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong Email</div>');
            redirect('login');
        }
    }
    public function resetPassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('login');
        }
        $this->load->library('form_validation');

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[6]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Reset Password';
            $this->load->view('menu/header', $data);
            $this->load->view('user/reset_password');
            $this->load->view('menu/footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Reset password has been! Please login</div>');
            redirect('login');
        }
    }
}
