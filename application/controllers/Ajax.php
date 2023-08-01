<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ajax extends CI_Controller
{
	public function index()
	{
	}
	public function delete()
	{
		extract($_POST);
		$table = ' ';
		$idnm = ' ';
		if ($datatable == 'admin') {
			$table = 'login';
			$idnm = 'login_id';
		}
		if ($datatable == 'category') {
			$table = 'webangel_category';
			$idnm = 'cat_id';
		}
		if ($datatable == 'product') {
			$table = 'webangel_product';
			$idnm = 'product_id';
		}
		if ($datatable == 'quantity') {
			$table = 'webangel_quantity_type';
			$idnm = 'qty_id';
		}
		if ($datatable == 'service') {
			$table = 'webangel_service_type';
			$idnm = 'id';
		}
		if ($datatable == 'servicel') {
			$table = 'webangel_service_list';
			$idnm = 'id';
		}
		if ($datatable == 'pro_groupl') {
			$table = 'webangel_product_group';
			$idnm = 'id';
		}
		$update = $this->CommonModal->deleteRowById($table, array($idnm => $dataid));
		if ($update) {
			echo '1';
		} else {
			echo '0';
		}
	}
	public function block()
	{
		extract($_POST);
		if ($datatable == 'admin') {
			$table = 'login';
			$idnm = 'login_id';
			$status_col = 'admin-status';
		} else {
			$table = '';
			$idnm = '';
			$status_col = '';
		}
		$update = $this->CommonModal->updateRowById($table, $idnm, $dataid, array($status_col => $status));
		if ($update) {
			echo '1';
		} else {
			echo '0';
		}
	}
	public function searchproduct()
	{
		extract($_POST);
		$row = $this->CommonModal->getRowByIn('webangel_product_group', $getproduct, 'id', 'name', 'asc');
		$msg = '';
		$i = 1;
		if ($row) {
			foreach ($row as $data) {
				$row_data = $this->CommonModal->getRowById('webangel_product_group_items', 'pg_id', $data['id']);
				foreach ($row_data as $row_datapro) {
					$row_data_product = $this->CommonModal->getRowById('webangel_product', 'product_id', $row_datapro['product_id']);
					$msg .= '<tr>
                <td> ' . $i . ' </td>
                <td>' . $row_data_product[0]['product_name'] . ' </td>
                <td><input type="text" name="mrp" class="element quantity " data-id="' . $row_data_product[0]['product_id'] . '" id="mrp' . $row_data_product[0]['product_id'] . '" value="' . $row_data_product[0]['product_mrp'] . '" /></td>
                <td><input type="text" name="quantity" class="element quantity" data-id="' . $row_data_product[0]['product_id'] . '" id="quan' . $row_data_product[0]['product_id'] . '" value="' . $row_data_product[0]['product_quantity'] . '" /> </td>
                <td> <input type="text" name="total" value="' . ((int)$row_data_product[0]['product_mrp'] * (int)$row_data_product[0]['product_quantity']) . '" class="element total" data-id="' . $row_data_product[0]['product_id'] . '"/> </td>
                <td> Remove </td>
                </tr>';
					$i++;
				}
			}
			echo $msg;
		} else {
			echo '0';
		}
	}
	public function geteditdata()
	{
		extract($_POST);
		$table = ' ';
		$idnm = ' ';
		if ($datatable == 'admin') {
			$table = 'login';
			$idnm = 'login_id';
		}
		if ($datatable == 'category') {
			$table = 'webangel_category';
			$idnm = 'cat_id';
		}
		if ($datatable == 'product') {
			$table = 'webangel_product';
			$idnm = 'product_id';
		}
		if ($datatable == 'quantity') {
			$table = 'webangel_quantity_type';
			$idnm = 'qty_id';
		}
		if ($datatable == 'service') {
			$table = 'webangel_service_type';
			$idnm = 'id';
		}
		if ($datatable == 'servicel') {
			$table = 'webangel_service_list';
			$idnm = 'id';
		}
		if ($datatable == 'pro_groupl') {
			$table = 'webangel_product_group';
			$idnm = 'id';
		}
		$update = $this->CommonModal->getRowById($table, $idnm, $dataid);
		print_r($update);
	}
	public function searchproduct_name()
	{
		extract($_POST);
		$row = $this->CommonModal->getRowById('webangel_product',  'product_id', $getproduct);
		if (!empty($row)) {
			$msg = '<tr class="fieldGroup">
                <td> ' . $row[0]['product_item_code'] . '<input type="hidden" name="dataid[]" class="element   "   value="' . $row[0]['product_id'] . '" /></td>
                <td>' . $row[0]['product_name'] . ' </td>
                <td><input type="text" name="unit[]" class="element   " data-id="' . $row[0]['product_id'] . '" id="mrp' . $row[0]['product_id'] . '" value="PCS" /></td>
                <td><input type="text" name="quantity[]" class="element  " data-id="' . $row[0]['product_id'] . '" id="quan' . $row[0]['product_id'] . '" value="1" /> </td>
                <td> <a href="javascript:void(0)" class="btn btn-danger remove"><span class="fa fa-trash" aria-hidden="true"> </span> </a>  </td>
                </tr>';
			echo $msg;
		} else {
			echo '0';
		}
	}
}
