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
'date_created' => time(),
'image' => 'profile.jpg',
'date_birth' => date($this->input->post('date', true)),
'gender' => htmlspecialchars($this->input->post('gender', true)),
'image' => $upload_image($this->input->post('image', true))
];














$first_name = htmlspecialchars($this->input->post('firstname', true));
$last_name = htmlspecialchars($this->input->post('lastname', true));
$email = $this->input->post('email', true);
$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
$role_id = 2;
$date_created = time();
$active = 1;
$date_birth = date($this->input->post('date', true));
$gender = htmlspecialchars($this->input->post('gender', true));


if ($image = $this->input->post('image', true)) {
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


$data = array(
'first_name' => $first_name,
'last_name' => $last_name,
'email' => $email,
'password' => $password,
'role_id' => $role_id,
'date_created' => $date_created,
'active' => $active,
'date_birth' => $date_birth,
'gender' => $gender,
'image' => $image,
);