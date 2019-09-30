<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mbiodata extends CI_Model {
	public function detail()
	{
        // Buat data dummy seolah-olah mendapatkan data dari database
		$data['nim']            = '12180042';
		$data['nama_lengkap']   = 'ESA PRAKOSO HERYANTO';
		$data['kelas']          = '12.3C.11';
		$data['jenis_kelamin']  = 'LAKI-LAKI';
        $data['matakuliah']     = 'WEB PROGRAMMING 2';
        // mengembalikan $data untuk di tangkap oleh controller
        return $data;
	}
}
