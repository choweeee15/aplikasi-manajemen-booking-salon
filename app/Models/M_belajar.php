<?php

namespace App\Models;

use CodeIgniter\Model;

class M_belajar extends Model
{
	protected $table = 'pengguna'; // Table name
	protected $primaryKey = 'id_user'; // Primary key
	protected $allowedFields = ['email', 'password', 'nama', 'level', 'reset_token', 'reset_token_expiry']; // Add reset_token and reset_token_expiry
	// public function tampil($table){
	// 	return $this->db->table($table)
	// 					->get()
	// 					->getResult();
	// }
	public function updateData($table, $data, $where)
	{
		return $this->db->table($table)->update($data, $where);
	}


	public function tampilAktif($table, $orderBy)
	{
		return $this->db->table($table)->where('soft_delete', 0)->orderBy($orderBy, 'ASC')->get()->getResult();
	}

	public function tampilTerhapus($table, $orderBy)
	{
		return $this->db->table($table)->where('soft_delete', 1)->orderBy($orderBy, 'ASC')->get()->getResult();
	}



	public function tampil($table, $orderBy)
{
	$builder = $this->db->table($table);

	if (!$builder) {
		log_message('error', "Builder gagal dibuat untuk tabel: $table");
		return [];
	}

	$query = $builder->orderBy($orderBy, 'desc')->get();

	if (!$query || !is_object($query)) {
		log_message('error', "Query tampil() gagal dijalankan untuk tabel: $table");
		return [];
	}

	return $query->getResult();
}


	public function join($table, $table2, $on, $orderBy)
	{
		return $this->db->table($table)
			->orderby($orderBy, 'desc')
			->join($table2, $on)
			->get()
			->getResult();
	}
	public function join5($table, $table2, $table3, $table4, $table5, $on1, $on2, $on3, $on4, $orderBy)
	{
		return $this->db->table($table)
			->orderby($orderBy, 'desc')
			->join($table2, $on1)
			->join($table3, $on2)
			->join($table4, $on3)
			->join($table5, $on4)
			->get()
			->getResult();
	}
	public function filterpesan($table, $table2, $table3, $table4, $table5, $on1, $on2, $on3, $on4, $orderBy, $filter)
	{
		return $this->db->table($table)
			->orderby($orderBy, 'desc')
			->join($table2, $on1)
			->join($table3, $on2)
			->join($table4, $on3)
			->join($table5, $on4)
			->where($filter)
			->get()
			->getResult();
	}
	public function join3($table, $table2, $table3, $on1, $on2, $orderBy)
	{
		return $this->db->table($table)
			->orderby($orderBy, 'desc')
			->join($table2, $on1)
			->join($table3, $on2)
			->get()
			->getResult();
	}
	public function join32($table1, $table2, $table3, $on1, $on2, $where = [])
	{
		return $this->db->table($table1)
			->join($table2, $on1)
			->join($table3, $on2)
			->where($where) // Apply filtering
			->get()
			->getResult();
	}
	public function filter($table, $table2, $on, $filter, $filter2, $awal, $akhir, $orderBy)
	{
		return $this->db->table($table)
			->join($table2, $on)
			->where($filter, $awal)
			->where($filter2, $akhir)
			->orderby($orderBy, 'desc')
			->get()
			->getResult();
	}
	public function filternota($table, $filter, $filter2, $awal, $akhir, $orderBy)
	{
		return $this->db->table($table)
			->where($filter, $awal)
			->where($filter2, $akhir)
			->orderBy($orderBy, 'desc')
			->get()
			->getResult();
	}
	public function filterpesanan($table1, $table2, $table3, $table4, $table5, $join1, $join2, $join3, $join4, $where, $a, $b)
	{
		return $this->db->table($table1)
			->select('*')
			->join($table2, $join1)
			->join($table3, $join2)
			->join($table4, $join3)
			->join($table5, $join4)
			->where($where . ' >=', $a)
			->where($where . ' <=', $b)
			->get()
			->getResult();
	}
	public function joinw($table, $table2, $on, $w)
	{
		$query = $this->db->table($table)
			->join($table2, $on)
			->where($w)
			->get();

		if ($query === false) {
			return null;
		}

		return $query->getRow();
	}

	public function hapus($table, $where)
	{
		return $this->db->table($table)
			->delete($where);
	}
	public function getWhere($table, $where)
	{
		$query = $this->db->table($table)
			->where($where)
			->get();

		// Check if the query returns a valid result
		if ($query) {
			return $query->getRow(); // Get the first row if available
		} else {
			return null; // Return null if no data is found
		}
	}

	public function edit($table, $data, $where)
	{
		return $this->db->table($table)
			->update($data, $where);
	}
	public function input($table, $data)
	{
		return $this->db->table($table)
			->insert($data);
	}
	public function getAll($table)
	{
		return $this->db->table($table)
			->get()
			->getResult();
	}
	public function log_activity($id, $activity)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = [
			'id_user' => $id,
			'what_happens' => $activity,
			'created_at' => date('Y-m-d H:i:s')
		];
		return $this->db->table('log_activity')
			->insert($data);
	}
	
	//  protected $table = 'user';
	//  protected $table2 = 'barang';
	//  protected $table3 = 'barang_keluar';
	//  protected $table4 = 'barang_masuk';
	//  protected $table5 = 'barang_rusak';
	//  protected $table6 = 'karyawan';
	// public function simpan_user($data)
	// {
	// 	$query = $this->db->table($this->table)->insert($data);
	// 	return $query;
	// }
	// public function simpan_barang($data)
	// {
	// 	$query = $this->db->table($this->table2)->insert($data);
	// 	return $query;
	// }
	// public function simpan_barangk($data)
	// {
	// 	$query = $this->db->table($this->table3)->insert($data);
	// 	return $query;
	// }
	// public function simpan_barangm($data)
	// {
	// 	$query = $this->db->table($this->table4)->insert($data);
	// 	return $query;
	// }
	// public function simpan_barangr($data)
	// {
	// 	$query = $this->db->table($this->table5)->insert($data);
	// 	return $query;
	// }
	// public function simpan_karyawan($data)
	// {
	// 	$query = $this->db->table($this->table6)->insert($data);
	// 	return $query;
	// }
}
