<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = '';
        $data['tag'] = 'grooming';
        $this->load->view('home', $data);
    }
    public function boarding()
    {
        $data['tag'] = 'boarding';
        $data['title'] = '';
        $this->load->view('boarding', $data);
    }
    public function day_care()
    {
        $data['title'] = '';
        $data['tag'] = 'daycare';
        $this->load->view('day-care', $data);
    }
    public function booking()
    {
        if (count($_POST) > 0) {
            $post = $this->input->post();
            // owner details
            $is_owner =   $this->CommonModal->getNumRows('owner_details', ['owner_contact' => $post['owner_contact']]);
            $data_owner = array('owner_name' => $post['owner_name'], 'owner_contact' => $post['owner_contact'], 'owner_contact_1' => $post['owner_contact_1'], 'emerg_owner_name' => $post['emerg_owner_name'], 'emerg_owner_contact' => $post['emerg_owner_contact'], 'owner_address' => $post['owner_address'], 'owner_facebook' => $post['owner_facebook'], 'owner_instagram' => $post['owner_instagram']);
            if ($is_owner == 0) {
                $insertID =   $this->CommonModal->insertRowReturnId('owner_details', $data_owner);
            } else {
                $owner_data =   $this->CommonModal->getSingleRowById('owner_details', ['owner_contact' => $post['owner_contact']]);
                $insertID = $owner_data['oid'];
                $owner_data =   $this->CommonModal->updateRowById('owner_details', 'oid', $insertID, $data_owner);
            }
            // pet details


            $data_pet = array('owner_id' => $insertID, 'pet_type' => $post['pet_type'], 'pet_name' => $post['pet_name'], 'pet_age' => $post['pet_age'], 'pet_age_month' => $post['pet_age_month'], 'pet_gender' => $post['pet_gender'], 'pet_weight' => $post['pet_weight'], 'pet_breed' => $post['pet_breed'], 'pet_microchip_no' => $post['pet_microchip_no'], 'pet_allergies' => $post['pet_allergies'], 'pet_is_rabiesVac' => $post['pet_is_rabiesVac'], 'pet_rabiesVac_expDate' => $post['pet_rabiesVac_expDate']);
            // if($_FILES['vac_book']['name'] != ''){
            // $file1 = imageUpload('vac_book', "uploads/files/");
            // $data_pet['vac_book']= $file1;
            // }

            if ($_FILES['pet_profile_img']['name'] != '') {
                $file2 =  imageUpload('pet_profile_img', "uploads/files/");
                $data_pet['pet_profile_img'] = $file2;
            }
            if ($_GET['pet'] == 'DOGS') {
                $data_pet['pet_is_dhippiVac'] = $post['pet_is_dhippiVac'];
                $data_pet['pet_dhippiVac_expDate'] = $post['pet_dhippiVac_expDate'];
                $data_pet['pet_is_kennelCoughVac'] = $post['pet_is_kennelCoughVac'];
                $data_pet['pet_kennelCoughVac_expDate'] = $post['pet_kennelCoughVac_expDate'];
            } else {
                $data_pet['pet_is_pchVac'] = $post['pet_is_pchVac'];
                $data_pet['pet_pchVac_expDate'] = $post['pet_pchVac_expDate'];
            }
            $is_pet =   $this->CommonModal->getNumRows('basic_details', ['basic_id' => $post['pet_id']]);
            if ($is_pet == 0) {
                $petID =   $this->CommonModal->insertRowReturnId('basic_details', $data_pet);
            } else {
                $pet_data =   $this->CommonModal->getSingleRowById('basic_details', ['basic_id' => $post['pet_id']]);
                $petID = $pet_data['basic_id'];
                $pet_data =   $this->CommonModal->updateRowById('basic_details', 'basic_id', $post['pet_id'], $data_pet);
            }
            // print_r($_FILES['vac_book']);exit;
            for ($i = 0; $i <= count($_FILES['vac_book']['name']); $i++) {
                if ($_FILES['vac_book']['name'][$i] != '') {
                    $_FILES['vac'] = array(
                        'name' => $_FILES['vac_book']['name'][$i],
                        // 'full_path' => $_FILES['vac_book']['full_path'][$i],
                        'type' => $_FILES['vac_book']['type'][$i],
                        'tmp_name' => $_FILES['vac_book']['tmp_name'][$i],
                        'error' => $_FILES['vac_book']['error'][$i],
                        'size'  => $_FILES['vac_book']['size'][$i]
                    );
                    $data = [];
                    $data['book_nm'] = imageUpload('vac', 'uploads/vac/');
                    $data['bid'] = $petID;
                    $vac_b = $this->CommonModal->insertRowReturnId('basic_details_vacbook', $data);
                }
            }
            $tag = $_GET['tag'];
            if ($tag == 'boarding') {
                // boarding details
                $boarding = array('owner_id' => $insertID, 'pet_id' => $petID, 'brand_name' => $post['brand_name'], 'morning_amt' => $post['morning_amt'], 'afternoon_amt' => $post['afternoon_amt'], 'evening_amt' => $post['evening_amt'], 'treats' => $post['treats'], 'restrictions' => $post['restrictions'], 'medication' => $post['medication'], 'from_date' => $post['from_date'], 'to_day' => $post['to_day'], 'regular_vet' => $post['regular_vet'], 'regular_vet_contact' => $post['regular_vet_contact'], 'regular_vet_address' => $post['regular_vet_address'], 'emergency_vet' => $post['emergency_vet'], 'emergency_vet_contact' => $post['emergency_vet_contact'], 'emergency_vet_address' => $post['emergency_vet_address']);
                $serviceID =   $this->CommonModal->insertRowReturnId('boarding_details', $boarding);
                $notice =   $this->CommonModal->insertRowReturnId('all_query_notification', ['owner_id' => $insertID, 'pet_id' => $petID, 'service_type' => 2, 'service_id' => $serviceID]);
            } elseif ($tag == 'grooming') {
                // grooming details
                if (isset($post['other_services']) != '') {
                    $other_services = json_encode($post['other_services']);
                } else {
                    $other_services = json_encode([]);
                }
                $grooming = array('owner_id' => $insertID, 'pet_id' => $petID, 'spa_includes' => $post['spa_includes'], 'other_services' => $other_services, 'my_skin' => (isset($post['my_skin']) ? $post['my_skin'] : ''), 'haircut' => (isset($post['haircut']) ? $post['haircut'] : ''), 'haircut_size' => (isset($post['haircut_size']) ? $post['haircut_size'] : ''), 'nails' => (isset($post['nails']) ? $post['nails'] : ''), 'mood_during_bath' => json_encode((isset($post['mood_during_bath']) ? $post['mood_during_bath'] : [])));
                $serviceID =   $this->CommonModal->insertRowReturnId('grooming_details', $grooming);
                $notice =   $this->CommonModal->insertRowReturnId('all_query_notification', ['owner_id' => $insertID, 'pet_id' => $petID, 'service_type' => 1, 'service_id' => $serviceID]);
            } elseif ($tag == 'day_care') {
                // daycare details
                $grooming = array('owner_id' => $insertID, 'pet_id' => $petID, 'likes' => $post['likes'],   'dislike' => $post['dislike'], 'place_play' => $post['place_play'], 'brand_name' => $post['brand_name'], 'morning_amt' => $post['morning_amt'], 'afternoon_amt' => $post['afternoon_amt'], 'evening_amt' => $post['evening_amt'], 'treats' => $post['treats'], 'restrictions' => $post['restrictions'], 'medication' => $post['medication'], 'select_days' => $post['select_days'], 'single_day_date' => $post['single_day_date'], 'from_date' => $post['from_date'], 'to_date' => $post['to_date'], 'from_time' => $post['from_time'], 'to_time' => $post['to_time'], 'regular_vet' => $post['regular_vet'], 'regular_vet_contact' => $post['regular_vet_contact'], 'regular_vet_address' => $post['regular_vet_address'], 'emergency_vet' => $post['emergency_vet'], 'emergency_vet_contact' => $post['emergency_vet_contact'], 'emergency_vet_address' => $post['emergency_vet_address']);
                $serviceID =   $this->CommonModal->insertRowReturnId('daycare_details', $grooming);
                $notice =   $this->CommonModal->insertRowReturnId('all_query_notification', ['owner_id' => $insertID, 'pet_id' => $petID, 'service_type' => 3, 'service_id' => $serviceID]);
            } else {
                exit;
            }
            if ($insertID) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Thank you for filling form . we will get back to you soon </div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-danger">We are facing technical error, please try again later</div>');
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    // ajax function
    public function get_owner()
    {
        extract($this->input->post());
        $is_owner =   $this->CommonModal->getNumRows('owner_details', ['owner_contact' => $id]);
        if ($is_owner == 0) {
        } else {
            $owner_data =   $this->CommonModal->getSingleRowById('owner_details', ['owner_contact' => $id]);
            $owner_data['pet_count'] =   $this->CommonModal->getNumRows('basic_details', ['owner_id' => $owner_data['oid']]);
            if ($owner_data['pet_count'] == 1) {
                $owner_data['pet_data'] =   $this->CommonModal->getSingleRowById('basic_details', ['owner_id' => $owner_data['oid']]);
                $owner_data['pet_vac'] =   $this->CommonModal->getRowById('basic_details_vacbook', 'bid', $owner_data['pet_data']['basic_id']);
            } elseif ($owner_data['pet_count'] > 1) {
                $pet_data =   $this->CommonModal->getRowById('basic_details', 'owner_id', $owner_data['oid']);
                $msg = '';
                foreach ($pet_data as $pet) {
                    $msg .= ' <span data-id="' . $pet['basic_id'] . '" class="petdata m-2 b-1">' . $pet['pet_name'] . '</span> ';
                }
                $owner_data['pet_data'] = $msg;
                $owner_data['pet_vac'] ='';
            }
            
            

            print_r(json_encode($owner_data));
        }
    }
    public function get_pet()
    {
        extract($this->input->post());
        $pet_data =   $this->CommonModal->getSingleRowById('basic_details', ['basic_id' => $id]);
        $pet_data['pet_vac'] =   $this->CommonModal->getRowById('basic_details_vacbook', 'bid', $owner_data['pet_data']['basic_id']);
        print_r(json_encode($pet_data));
    }
}
