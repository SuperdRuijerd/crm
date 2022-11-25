<?php

class Tedarikci_model extends CI_Model
{

	public function rezervasyonlar($durum)
	{
		$this->db->from('rezervasyonlar');
		$this->db->where('durum', $durum);
		$this->db->where('olusturan', $this->session->userdata('no'));
		$this->db->order_by('revno', 'desc');
		$query = $this->db->get();
		if($query->num_rows() != 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	public function rezervasyon_ekle($data)
	{
		if($this->db->insert("rezervasyonlar", $data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function taleplerim()
	{
		$this->db->from('destek_talepleri');
		$this->db->where('kullanicino', $this->session->userdata('no'));
		$this->db->join('kullanicilar', 'kullanicilar.no = destek_talepleri.kullanicino');
		$this->db->order_by('talep_no', 'desc');
		$query = $this->db->get();
		if($query->num_rows() != 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	public function talep_olustur($data)
	{
		if($this->db->insert("destek_talepleri", $data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
