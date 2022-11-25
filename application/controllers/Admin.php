<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this -> auth -> isLoggedIn();
		if($this -> auth -> kullanicibilgisi() -> yetki == 2)
		{
			redirect('tedarikci');
		}
		else if($this -> auth -> kullanicibilgisi() -> yetki == 3)
		{
			redirect('acente');
		}
	}

	public function index()
	{
		$data['title'] = 'Anasayfa';
		$data['content'] = 'admin/anasayfa';

		$this->load->view('pages/index', $data);
	}

	public function rezervasyonlar($durum)
	{
		if($durum == "islemde")
		{
			$data['title'] = 'İşlemde Olanlar';
			$data['content'] = 'admin/rezervasyonlar/rezervasyon_listesi';
			$data['rezervasyonlar'] = $this -> admin -> rezervasyonlar(0);
			$this->load->view('pages/index', $data);
		}
		else if($durum == "onay_bekleyenler")
		{
			$data['title'] = 'Onay Bekleyenler';
			$data['content'] = 'admin/rezervasyonlar/rezervasyon_listesi';
			$data['rezervasyonlar'] = $this -> admin -> rezervasyonlar(1);
			$this->load->view('pages/index', $data);
		}
		else if($durum == "iptal_edilen")
		{
			$data['title'] = 'İptal Edilenler';
			$data['content'] = 'admin/rezervasyonlar/rezervasyon_listesi';
			$data['rezervasyonlar'] = $this -> admin -> rezervasyonlar(2);
			$this->load->view('pages/index', $data);
		}
		else if($durum == "tamamlananlar")
		{
			$data['title'] = 'Tamamlananlar';
			$data['content'] = 'admin/rezervasyonlar/rezervasyon_listesi';
			$data['rezervasyonlar'] = $this -> admin -> rezervasyonlar(3);
			$this->load->view('pages/index', $data);
		}
		else
		{
			redirect('admin');
		}
	}

	public function rezervasyon_ekle()
	{
		$data['title'] = 'Rezervasyon Ekle';
		$data['content'] = 'admin/rezervasyonlar/rezervasyon_ekle';

		$this->load->view('pages/index', $data);
	}

	public function rezervasyon_ekle_kaydet()
	{
		if($this -> input -> is_ajax_request())
		{
			$nereden =  $this -> input -> post("nereden");
			$nereye =  $this -> input -> post("nereye");
			$tarih =  $this -> input -> post("tarih");
			$saat =  $this -> input -> post("saat");
			$kisi_sayisi =  $this -> input -> post("kisi_sayisi");
			$ucus_no =  $this -> input -> post("ucus_no");
			$arac =  $this -> input -> post("arac");
			$fiyat =  $this -> input -> post("fiyat");

			if($this -> input -> post("bebek_koltugu"))
			{
				$bebek_koltugu =  $this -> input -> post("bebek_koltugu");
			}
			else
			{
				$bebek_koltugu =  0;
			}

			if($this -> input -> post("hava_limani_karsilama"))
			{
				$hava_limani_karsilama =  $this -> input -> post("hava_limani_karsilama");
			}
			else
			{
				$hava_limani_karsilama =  0;
			}

			$eposta =  $this -> input -> post("eposta");
			$telefon_no =  $this -> input -> post("telefon_no");

			$insert = $this -> admin -> rezervasyon_ekle(
				array(
					"nereden" => $nereden,
					"nereye" => $nereye,
					"tarih" => $tarih,
					"saat" => $saat,
					"kisi_sayisi" => $kisi_sayisi,
					"ucus_no" => $ucus_no,
					"arac" => $arac,
					"fiyat" => $fiyat,
					"bebek_koltugu" => $bebek_koltugu,
					"hava_limani_karsilama" => $hava_limani_karsilama,
					"eposta" => $eposta,
					"telefon_no" => $telefon_no,
					"olusturan" => $this->session->userdata('no'),
					"olusturma_tarihi" => date("Y-m-d")
				)
			);

			if($insert)
			{
				$json_array = array(
					"title" => "Başarılı",
					"mesaj" => "Kaydedildi",
					"type" => "success"
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

	public function tedarikciler()
	{
		$data['title'] = 'Tedarikçiler';
		$data['content'] = 'admin/tedarikciler/tedarikci_listesi';
		$data['tedarikciler'] = $this -> admin -> tedarikciler();

		$this->load->view('pages/index', $data);
	}

	public function kullanici_durum_degistir()
	{
		$durum =  $this -> input -> post("durum");
		$kullanicino =  $this -> input -> post("kullanicino");


		$this -> admin -> kullanici_durum_degistir($kullanicino, $durum);
	}

	public function tedarikci_duzenle($id)
	{
		$data['title'] = 'Tedarikçiler';
		$data['content'] = 'admin/tedarikciler/tedarikci_duzenle';
		$data['tedarikci'] = $this -> admin -> tedarikci($id);

		$this->load->view('pages/index', $data);
	}

  	public function tedarikci_guncelle()
  	{
		if($this -> input -> is_ajax_request())
		{
		  $name =  $this -> input -> post("name");
		  $sicilno =  $this -> input -> post("sicilno");
		  $email =  $this -> input -> post("email");
		  $gender =  $this -> input -> post("gender");
		  $dogum_tarihi =  $this -> input -> post("dogum_tarihi");
		  $dogum_yeri =  $this -> input -> post("dogum_yeri");
		  $tc =  $this -> input -> post("tc");
		  $kan_grubu =  $this -> input -> post("kan_grubu");

		  $update = $this->auth->profile_save(
			  array(
				  "name" => $name,
				  "sicilno" => $sicilno,
				  "email" => $email,
				  "gender" => $gender,
				  "dogum_tarihi" => $dogum_tarihi,
				  "dogum_yeri" => $dogum_yeri,
				  "tc" => $tc,
				  "kan_grubu" => $kan_grubu
			  )
		  );

		  if($update)
		  {
			$json_array = array(
				"title" => "Başarılı",
				"mesaj" => "Kaydedildi",
				"type" => "success"
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

	public function acenteler()
	{
		$data['title'] = 'Acenteler';
		$data['content'] = 'admin/acenteler/acente_listesi';
		$data['acenteler'] = $this -> admin -> acenteler();

		$this->load->view('pages/index', $data);
	}

	public function acente_duzenle($id)
	{
		$data['title'] = 'Acenteler';
		$data['content'] = 'admin/acenteler/acente_duzenle';
		$data['acente'] = $this -> admin -> acente($id);

		$this->load->view('pages/index', $data);
	}

	public function turlar()
	{
		$data['title'] = 'Turlar';
		$data['content'] = 'admin/turlar/tur_listesi';
		$data['turlar'] = $this -> admin -> turlar();

		$this->load->view('pages/index', $data);
	}

	public function acente_talepleri()
	{
		$data['title'] = 'Destek Talepleri';
		$data['content'] = 'admin/destek_talepleri/acente_talepleri';
		$data['destek_talepleri'] = $this -> admin -> destek_talepleri(3);

		$this->load->view('pages/index', $data);
	}

	public function tedarikci_talepleri()
	{
		$data['title'] = 'Destek Talepleri';
		$data['content'] = 'admin/destek_talepleri/tedarikci_talepleri';
		$data['destek_talepleri'] = $this -> admin -> destek_talepleri(2);

		$this->load->view('pages/index', $data);
	}

}
