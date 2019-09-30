<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Biodata extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['mbiodata']);
	}
	public function index()
	{
		// mengambil data dari model mbiodata dengan function detail
		$data['detail'] = $this->mbiodata->detail();
		// memasukan $data ke dalam view
		// view berada dalam directory views/biodata/ dengan nama file detail.php
		$this->load->view('biodata/detail',$data);
	}
}
