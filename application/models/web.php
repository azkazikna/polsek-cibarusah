<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */

class Web extends CI_Model
{
    function auth($data)
	{
		$query = $this->db->where("email", $data['email'])->where("password", $data['password'])->get('user');
		return array(
			'res'	=> $query->row(),
			'sum'	=> $query->num_rows()
		);
	}

    function profile($id_user)
	{
		return $this->db->get_where('user', "id_user='$id_user'")->result();
	}

    function comp()
	{
        return $this->db->get('company_profile')->row();
	}

    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_data($table, $id)
    {
        return $this->db->order_by($id, 'DESC')->get($table);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function get_count($table)
    {
        $sql = "SELECT count(*) FROM $table";
        $result = $this->db->query($sql);
        return $result->row();
    }

    public function cek_id($id_sk)
    {
        $query_str =
            $this->db->where('id_sk', $id_sk)
            ->get('sk_number');
        if ($query_str->num_rows() > 0) {
            return $query_str->row();
        } else {
            return false;
        }
    }
    
    function cek_status($id_sk)
	{
		return $this->db->get_where('sk_number', "id_sk='$id_sk'")->row();
	}

} 