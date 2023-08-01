<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (sessionId('user_id') != "") {
			redirect("AdminDashboard");
		}
	}
	public function index()
	{
		$data['title'] = 'Admin login  ';
		$data['projectTitle'] = 'Pet Hostel';
		$this->load->view('admin/admin_login', $data);
	}
	public function validatelogin()
	{
		if (count($_POST) > 0) {
			$admin_email = $this->input->post('admin_email');
			$admin_password = $this->input->post('admin_password');
			$user_id = $this->CommonModal->getRowById('login', 'username', $admin_email);
			if ($user_id) {
				if ($user_id[0]['password'] == $admin_password) {
					$this->session->set_userdata('user_id', $user_id[0]['login_id']);
					$this->session->set_userdata('user_type', $user_id[0]['login_type']);
					redirect('AdminDashboard');
					exit();
				} else {
					flashData('msg', '<div class="alert alert-danger">Invalid Password</div>');
				}
			} else {
				flashData('msg', '<div class="alert alert-danger">Invalid username</div>');
			}
			redirect(base_url('Admin'));
			exit();
		} else {
			flashData('msg', '<div class="alert alert-danger">Server Error</div>');
			redirect(base_url('Admin'));
			exit();
		}
	}
}
