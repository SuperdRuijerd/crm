<?php

class Auth_Model extends CI_Model
{

	public function giris($kullaniciadi, $sifre)
	{
		$this->db->where('kullaniciadi', $kullaniciadi);
		$this->db->where('sifre', $sifre);
		$query = $this->db->get('kullanicilar');
		if($query->num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}

	public function kullanicibilgisi()
	{
		$this->db->where('no', $this->session->userdata('no'));
		$query = $this->db->get('kullanicilar');
		if($query->num_rows() == 1)
		{
			return $query->row();
		}
	}

    public function isLoggedIn()
	{
      if($this -> session -> userdata('logged_in') == false)
      {
          return redirect('', 'refresh');
      }
    }

    public function hesap_olustur($data)
    {
      if($this->db->insert("kullanicilar", $data))
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    public function kullaniciadi_sorgula($kullaniciadi)
    {
      $this->db->from('kullanicilar');
      $this->db->where('kullaniciadi', $kullaniciadi);
      $query = $this->db->get();
      if($query->num_rows() == 1)
      {
        return false;
      }
	  else
	  {
		  return true;
	  }
    }

	public function eposta_sorgula($eposta)
	{
		$this->db->from('kullanicilar');
		$this->db->where('eposta', $eposta);
		$query = $this->db->get();
		if($query->num_rows() == 1)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

}
