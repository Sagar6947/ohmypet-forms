<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AdminDashboard extends CI_Controller
{
	public $profile_data = array();
	public function __construct()
	{
		parent::__construct();
		if (sessionId('user_id') == "") {
			redirect("Admin");
		}
		$this->profile_data = $this->CommonModal->getRowById('login', 'login_id', sessionId('user_id'));
		date_default_timezone_set("Asia/Kolkata");
	}
	public function index()
	{
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		$data['title'] = ' Dashboard';
		$data['grooming_count'] = $this->CommonModal->getNumRows('all_query_notification', array('service_type' => '1', 'is_new' => '0'));
		$data['boarding_count'] = $this->CommonModal->getNumRows('all_query_notification', array('service_type' => '2', 'is_new' => '0'));
		$data['daycare_count'] = $this->CommonModal->getNumRows('all_query_notification', array('service_type' => '3', 'is_new' => '0'));
		$data['total_grooming_count'] = $this->CommonModal->getNumRow('grooming_details');
		$data['total_boarding_count'] = $this->CommonModal->getNumRow('boarding_details');
		$data['total_daycare_count'] = $this->CommonModal->getNumRow('daycare_details');
		$this->load->view('admin/admindashboard', $data);
	}
	public function new_sub_admin()
	{
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		$data['title'] = 'Add sub admin ';
		$data['tag'] = 'new';
		if (count($_POST) > 0) {
			$post = $this->input->post();
			$sub_admin_id = $this->CommonModal->insertRowReturnId('login', $post);
			if ($sub_admin_id) {
				userData('msg', '<div class="alert alert-success">Sub admin added successfully</div>');
				redirect('AdminDashboard/sub_admin_list');
			} else {
				userData('msg', '<div class="alert alert-danger">Sub admin not added, Server error..</div>');
				$this->load->view('admin/new_sub_admin', $data);
			}
		} else {
			$this->load->view('admin/new_sub_admin', $data);
		}
	}
	public function sub_admin_list()
	{
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		$data['title'] = 'Sub admin list ';
		$data['sub_admin_list'] = $this->CommonModal->getRowById('login', 'login_type', '0');
		$this->load->view('admin/sub_admin_list', $data);
	}
	public function update_sub_admin($pid)
	{
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		$data['title'] = 'Update sub admin';
		$data['tag'] = 'edit';
		$data['sub_admin_list'] = $this->CommonModal->getRowById('login', 'login_id', $pid);
		if (count($_POST) > 0) {
			$post = $this->input->post();
			$sub_admin_id = $this->CommonModal->updateRowById('login', 'login_id', $pid, $post);
			if ($sub_admin_id) {
				userData('msg', '<div class="alert alert-success">Sub admin Updated successfully</div>');
				redirect('AdminDashboard/sub_admin_list');
			} else {
				userData('msg', '<div class="alert alert-danger">Sub admin not updated, Server error..</div>');
				$this->load->view('admin/new_sub_admin', $data);
			}
		} else {
			$this->load->view('admin/new_sub_admin', $data);
		}
	}
	public function user_details()
	{
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		$data['title'] = 'User list ';
		$data['user_details'] = $this->CommonModal->getAllRows('owner_details');
		$this->load->view('admin/user_details', $data);
	}
	public function view_user($bid)
	{
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		$data['title'] = 'User details ';
		$data['user'] = $this->CommonModal->getSingleRowById('basic_details', array('basic_id' => $bid));
		$this->load->view('admin/view_user', $data);
	}
	public function view_user_details($bid)
	{
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		$data['title'] = 'User details ';
		$data['user'] = $this->CommonModal->getSingleRowById('owner_details', array('oid' => $bid));
		$data['basic'] = $this->CommonModal->getRowById('basic_details', 'owner_id', $bid);
		$this->load->view('admin/view_user_details', $data);
	}
	public function change_password()
	{
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		$data['title'] = 'Change password';
		if (count($_POST) > 0) {
			extract($this->input->post());
			if ($old == $data['profile'][0]['password']) {
				if ($new == $con) {
					$doctor_id = $this->CommonModal->updateRowById('login', 'login_id', $data['profile'][0]['login_id'], array('password' => $new));
					if ($doctor_id) {
						userData('msg', '<div class="alert alert-success">Password changed successfully</div>');
					} else {
						userData('msg', '<div class="alert alert-danger">Server error..</div>');
					}
				} else {
					userData('msg', '<div class="alert alert-danger">New password and old password doesnt match</div>');
				}
			} else {
				userData('msg', '<div class="alert alert-danger">Wrong Old Password</div>');
			}
			redirect('AdminDashboard/change_password');
		} else {
			$this->load->view('admin/change_password', $data);
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_type');
		redirect(base_url());
	}
	public function grooming_details()
	{
		if (isset($_GET['notification']) == 'enable') {
			$pet_data =   $this->CommonModal->updateRowById('all_query_notification', 'service_type', '1', ['is_new' => '1']);
		}
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		$data['title'] = 'Grooming list ';
		$data['tag'] = 'grooming';
		$data['grooming_details'] = $this->CommonModal->getAllRowsInOrder('grooming_details', 'grooming_id', 'desc');
		$this->load->view('admin/grooming_details', $data);
	}
	public function boarding_details()
	{
		if (isset($_GET['notification']) == 'enable') {
			$pet_data =   $this->CommonModal->updateRowById('all_query_notification', 'service_type', '2', ['is_new' => '1']);
		}
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		$data['title'] = 'Boarding list ';
		$data['tag'] = 'boarding';
		$data['grooming_details'] = $this->CommonModal->getAllRowsInOrder('boarding_details', 'boarding_id', 'desc');
		$this->load->view('admin/grooming_details', $data);
	}
	public function day_care_details()
	{
		if (isset($_GET['notification']) == 'enable') {
			$pet_data =   $this->CommonModal->updateRowById('all_query_notification', 'service_type', '3', ['is_new' => '1']);
		}
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		$data['title'] = 'Day care list ';
		$data['tag'] = 'daycare';
		$data['grooming_details'] = $this->CommonModal->getAllRowsInOrder('daycare_details', 'daycare_id', 'desc');
		$this->load->view('admin/grooming_details', $data);
	}
	public function all_details($tag, $id)
	{
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel Full details';
		$data['title'] = $tag . ' Info ';
		$data['tag'] = $tag;
		if ($tag == 'grooming') {
			$data['service_details'] = $this->CommonModal->getSingleRowById('grooming_details', ['grooming_id' => $id]);
		} elseif ($tag == 'boarding') {
			$data['service_details'] = $this->CommonModal->getSingleRowById('boarding_details', ['boarding_id' => $id]);
		} elseif ($tag == 'daycare') {
			$data['service_details'] = $this->CommonModal->getSingleRowById('daycare_details', ['daycare_id' => $id]);
		} else {
			redirect(base_url());
		}
		$data['user'] = $this->CommonModal->getSingleRowById('owner_details', ['oid' => $data['service_details']['owner_id']]);
		$data['pet'] = $this->CommonModal->getSingleRowById('basic_details', ['basic_id' => $data['service_details']['pet_id']]);
		$this->load->view('admin/view_user', $data);
	}
	public function user_edit($pid)
	{
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		$data['title'] = 'Update sub admin';
		$data['tag'] = 'edit';
		$data['user'] = $this->CommonModal->getRowById('owner_details', 'oid', $pid);
		$data['basic'] = $this->CommonModal->getRowById('basic_details', 'owner_id', $pid);
		if (count($_POST) > 0) {
			$post = $this->input->post();
			$sub_admin_id = $this->CommonModal->updateRowById('owner_details', 'oid', $pid, $post);
			if ($sub_admin_id) {
				userData('msg', '<div class="alert alert-success">Owner details Updated successfully</div>');
				redirect('AdminDashboard/user_details');
			} else {
				userData('msg', '<div class="alert alert-danger">Owner details not updated, Server error..</div>');
				$this->load->view('admin/update_user_details', $data);
			}
		} else {
			$this->load->view('admin/update_user_details', $data);
		}
	}
	public function update_owner($oid)
	{
		if (count($_POST) > 0) {
			$post = $this->input->post();
			$sub_admin_id = $this->CommonModal->updateRowById('owner_details', 'oid', $oid, $post);
			if ($sub_admin_id) {
				userData('msg', '<div class="alert alert-success">Owner details Updated successfully</div>');
			} else {
				userData('msg', '<div class="alert alert-danger">Owner details not updated, Server error..</div>');
			}
		} else {
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function update_owner_pet($pid)
	{
		$pet = $this->CommonModal->getSingleRowById('basic_details', ['basic_id' => $pid]);
		if (count($_POST) > 0) {
			$post = $this->input->post();
			if ($_FILES['pet_profile_img']['name'] != '') {
				$post['pet_profile_img'] = imageUpload('pet_profile_img', 'uploads/files/');
				if ($pet['pet_profile_img'] != '') {
					unlink(base_url() . 'uploads/files/' . $pet['pet_profile_img']);
				}
			}
			$sub_admin_id = $this->CommonModal->updateRowById('basic_details', 'basic_id', $pid, $post);
			for ($i = 0; $i <= count($_FILES['vac_book']['name']); $i++) {
				if ($_FILES['vac_book']['name'][$i] != '') {
					$_FILES['vac'] = array(
						'name' => $_FILES['vac_book']['name'][$i],
						'full_path' => $_FILES['vac_book']['full_path'][$i],
						'type' => $_FILES['vac_book']['type'][$i],
						'tmp_name' => $_FILES['vac_book']['tmp_name'][$i],
						'error' => $_FILES['vac_book']['error'][$i],
						'size'  => $_FILES['vac_book']['size'][$i]
					);
					$data = [];
					$data['book_nm'] = imageUpload('vac', 'uploads/vac/');
					$data['bid'] = $pid;
					$vac_b = $this->CommonModal->insertRowReturnId('basic_details_vacbook', $data);
				}
			}
			// if ($sub_admin_id) {

				userData('msg', '<div class="alert alert-success">Owner details Updated successfully</div>');
			// } else {
			// 	userData('msg', '<div class="alert alert-danger">Owner details not updated, Server error..</div>');
			// }
		} else {
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function vac_delete($bid)
	{
		if (isset($bid)) {
			$insert = $this->CommonModal->deleteRowById('basic_details_vacbook', array('id' => $bid));
			if ($insert) {
				userData('msg', '<div class="alert alert-success">Vaccine book deleted</div>');
			} else {
				userData('msg', '<div class="alert alert-danger">We are facing technical error </div>');
			}
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function user_delete($bid)
	{
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';

		$data['tag'] = 'edit';


		if ($this->CommonModal->deleteRowById('owner_details', array('oid' => $bid))) {
			$this->session->set_flashdata('msg', 'Owner info Delete successfully');
			$this->session->set_flashdata('msg_class', 'alert-success');
		} else {
			$this->session->set_flashdata('msg', 'Owner info not Delete Please try again!!');
			$this->session->set_flashdata('msg_class', 'alert-danger');
		}
		redirect(base_url() . 'AdminDashboard/user_details');
	}
	public function query_delete($table, $bid)
	{
		$data['profile'] = $this->profile_data;
		$data['projectTitle'] = 'Pet Hostel';
		if ($table == 'grooming_details') {
			$cid = 'grooming_id';
		} elseif ($table == 'boarding_details') {
			$cid = 'boarding_id';
		} elseif ($table == 'daycare_details') {
			$cid = 'daycare_id';
		}
		if ($this->CommonModal->deleteRowById($table, array($cid => $bid))) {
			$this->session->set_flashdata('msg', 'Query Delete successfully');
			$this->session->set_flashdata('msg_class', 'alert-success');
		} else {
			$this->session->set_flashdata('msg', 'Query not Delete Please try again!!');
			$this->session->set_flashdata('msg_class', 'alert-danger');
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
