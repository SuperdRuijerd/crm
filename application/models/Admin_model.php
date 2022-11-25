<?php

class Admin_model extends CI_Model
{

	public function rezervasyonlar($durum)
	{
		$this->db->from('rezervasyonlar');
		$this->db->where('durum', $durum);
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

  	public function tedarikciler()
  	{
		$this->db->from('kullanicilar');
		$this->db->where('yetki', 2);
		$this->db->order_by('no', 'desc');
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

	public function tedarikci($id)
	{
		$this->db->from('kullanicilar');
		$this->db->where('no', $id);
		$query = $this->db->get();
		if($query->num_rows() != 0)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}

	public function acenteler()
	{
		$this->db->from('kullanicilar');
		$this->db->where('yetki', 3);
		$this->db->order_by('no', 'desc');
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

	public function acente($id)
	{
		$this->db->from('kullanicilar');
		$this->db->where('no', $id);
		$query = $this->db->get();
		if($query->num_rows() != 0)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}

	public function turlar()
	{
		$this->db->from('sehir_turlari');
		$this->db->order_by('tur_no', 'desc');
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

	public function destek_talepleri($no)
	{
		$this->db->from('destek_talepleri');
		$this->db->where('kullanicilar.yetki', $no);
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

	public function kullanici_durum_degistir($kullanicino, $durum)
	{
		$this->db->set('onay', $durum);
		$this->db->where('no', $kullanicino);
		$this->db->update('kullanicilar');
	}
}
