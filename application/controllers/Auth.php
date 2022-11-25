<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			if($this -> auth -> kullanicibilgisi() -> yetki == 1)
			{
				redirect('admin');
			}
			else if($this -> auth -> kullanicibilgisi() -> yetki == 2)
			{
				redirect('tedarikci');
			}
			else if($this -> auth -> kullanicibilgisi() -> yetki == 3)
			{
				redirect('acente');
			}
		}

		$data['title'] = "CRM GİRİŞ";
    	$this->load->view('pages/auth/login', $data);
	}

	public function login()
	{
		if($this -> input -> is_ajax_request())
		{
			$kullaniciadi =  $this -> input -> post("kullaniciadi");
      		$sifre =  md5($this -> input -> post("sifre"));

			$config = array(
				  array(
					  'field' => 'kullaniciadi',
					  'label' => 'Kullanıcıadı',
					  'rules' => 'required'
				  ),
				  array(
					  'field' => 'sifre',
					  'label' => 'Şifre',
					  'rules' => 'required'
				  )
			);

			$this -> form_validation -> set_rules($config);
			if($this -> form_validation -> run() == FALSE)
			{
				$json_array = array(
				  	"title" => "Hata",
					"mesaj" => "Kullanıcıadı ve Şifre Boş Olamaz!",
				  	"type" => "danger"
				);
        		echo json_encode($json_array);
			}
			else
			{
				if($kullanicibilgileri = $this -> auth -> giris($kullaniciadi, $sifre))
				{
					if($kullanicibilgileri -> onay != 1)
					{
						$json_array = array(
							"title" => "Hata",
							"mesaj" => "Hesabınız onay sürecindedir",
							"type" => "danger"
						);
						echo json_encode($json_array);
					}
					else
					{
						$userdata = array(
							"no"  => $kullanicibilgileri -> no,
							"kullaniciadi"  => $kullanicibilgileri -> kullaniciadi,
							"logged_in" => TRUE
						);

						if($kullanicibilgileri -> yetki == 1)
						{
							$url = base_url('admin');
						}
						else if($kullanicibilgileri -> yetki == 2)
						{
							$url = base_url('tedarikci');
						}
						else if($kullanicibilgileri -> yetki == 3)
						{
							$url = base_url('acente');
						}

						$this->session->set_userdata($userdata);
						$json_array = array(
							"title" => "Başarılı",
							"mesaj" => "Giriş Başarılı Yönlendiriliyorsunuz...",
							"type" => "success",
							"url" => $url
						);
						echo json_encode($json_array);
					}
				}
				else
				{
					$json_array = array(
	          			"title" => "Hata",
						"mesaj" => "Kullanıcıadı veya Şifre Hatalı!",
	          			"type" => "danger"
	        		);
	        		echo json_encode($json_array);
				}
			}
		}
	}

	public function hesap_olustur()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			if($this -> auth -> kullanicibilgisi() -> yetki == 1)
			{
				redirect('admin');
			}
			else if($this -> auth -> kullanicibilgisi() -> yetki == 2)
			{
				redirect('tedarikci');
			}
			else if($this -> auth -> kullanicibilgisi() -> yetki == 3)
			{
				redirect('acente');
			}
		}
		$data['title'] = "CRM GİRİŞ";
		$this->load->view('pages/auth/hesap_olustur', $data);
	}

	public function hesap_olustur_kaydet()
	{
		if($this -> input -> is_ajax_request())
		{
			$hesap_turu =  $this -> input -> post("hesap_turu");
			$isim =  $this -> input -> post("isim");
			$kullaniciadi =  $this -> input -> post("kullaniciadi");
			$eposta =  $this -> input -> post("eposta");
			$sifre =  $this -> input -> post("sifre");

			$config = array(
				array(
					'field' => 'hesap_turu',
					'label' => 'Hesap Türü',
					'rules' => 'required'
				),
				array(
					'field' => 'isim',
					'label' => 'İsim',
					'rules' => 'required'
				),
				array(
					'field' => 'kullaniciadi',
					'label' => 'Kullanıcıadı',
					'rules' => 'required'
				),
				array(
					'field' => 'eposta',
					'label' => 'E-posta',
					'rules' => 'required|valid_email'
				),
				array(
					'field' => 'sifre',
					'label' => 'Şifre',
					'rules' => 'required'
				),
				array(
					'field' => 'sifre_tekrar',
					'label' => 'Şifre Tekrar',
					'rules' => 'required|matches[sifre]'
				)
			);
			$this -> form_validation -> set_rules($config);
			if($this -> form_validation -> run() == FALSE)
			{
				$json_array = array(
					"title" => "Hata",
					"mesaj" => "Boş Alan Bırakmayınız!",
					"type" => "danger"
				);
				echo json_encode($json_array);
			}
			else
			{
				if($this -> auth -> kullaniciadi_sorgula($kullaniciadi) == false)
				{
					$json_array = array(
						"title" => "Hata",
						"mesaj" => "Kullanıcıadı sistemde bulunmaktadır!",
						"type" => "danger"
					);
					echo json_encode($json_array);
				}
				else if($this -> auth -> eposta_sorgula($eposta) == false)
				{
					$json_array = array(
						"title" => "Hata",
						"mesaj" => "Eposta sistemde bulunmaktadır!",
						"type" => "danger"
					);
					echo json_encode($json_array);
				}
				else
				{
					$insert = $this -> auth -> hesap_olustur(
						array(
							"adsoyad" => $isim,
							"kullaniciadi" => $kullaniciadi,
							"eposta" => $eposta,
							"sifre" => md5($sifre),
							"yetki" => $hesap_turu,
							"olusturma_tarihi" => date("Y-m-d")
						)
					);

					if($insert)
					{
						$json_array = array(
							"title" => "Başarılı",
							"mesaj" => "Kaydedildi",
							"type" => "success",
							"url" => base_url('')
						);
						echo json_encode($json_array);
					}
					else
					{
						$json_array = array(
							"title" => "Hata",
							"mesaj" => "Kaydederken Hata Oluştu",
							"type" => "danger"
						);
						echo json_encode($json_array);
					}
				}
			}

		}
	}

	public function logout()
	{
		$userdata = array(
			"no",
			"kullaniciadi",
			"logged_in"
    	);
    	$this->session->unset_userdata($userdata);
    	redirect();
	}
}
