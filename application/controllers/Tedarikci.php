<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tedarikci extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this -> auth -> isLoggedIn();
		if($this -> auth -> kullanicibilgisi() -> yetki == 1)
		{
			redirect('admin');
		}
		else if($this -> auth -> kullanicibilgisi() -> yetki == 3)
		{
			redirect('acente');
		}
	}

	public function index()
	{
		$data['title'] = 'Anasayfa';
		$data['content'] = 'tedarikci/anasayfa';

		$this->load->view('pages/index', $data);
	}

	public function rezervasyonlar($durum)
	{
		if($durum == "aktif")
		{
			$data['title'] = 'Aktif Rezervasyonlar';
			$data['content'] = 'tedarikci/rezervasyonlar/rezervasyon_listesi';
			$data['rezervasyonlar'] = $this -> tedarikci -> rezervasyonlar(0);
			$this->load->view('pages/index', $data);
		}
		else if($durum == "iptal_edilen")
		{
			$data['title'] = 'İptal Edilenler';
			$data['content'] = 'tedarikci/rezervasyonlar/rezervasyon_listesi';
			$data['rezervasyonlar'] = $this -> tedarikci -> rezervasyonlar(2);
			$this->load->view('pages/index', $data);
		}
		else if($durum == "tamamlananlar")
		{
			$data['title'] = 'Tamamlananlar';
			$data['content'] = 'tedarikci/rezervasyonlar/rezervasyon_listesi';
			$data['rezervasyonlar'] = $this -> tedarikci -> rezervasyonlar(3);
			$this->load->view('pages/index', $data);
		}
		else
		{
			redirect('tedarikci');
		}
	}

	public function rezervasyon_ekle()
	{
		$data['title'] = 'Rezervasyon Ekle';
		$data['content'] = 'tedarikci/rezervasyonlar/rezervasyon_ekle';

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

			$insert = $this -> acente -> rezervasyon_ekle(
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
					"type" => "success",
					"url" => base_url('tedarikci/rezervasyonlar/aktif')
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

	public function taleplerim()
	{
		$data['title'] = 'Taleplerim';
		$data['content'] = 'tedarikci/destek_talepleri/taleplerim';
		$data['taleplerim'] = $this -> tedarikci -> taleplerim();

		$this->load->view('pages/index', $data);
	}

	public function talep_olustur()
	{
		$data['title'] = 'Talep Oluştur';
		$data['content'] = 'tedarikci/destek_talepleri/talep_olustur';

		$this->load->view('pages/index', $data);
	}

	public function talep_olustur_kaydet()
	{
		if($this -> input -> is_ajax_request())
		{
			$talep_adi =  $this -> input -> post("talep_adi");
			$konu =  $this -> input -> post("konu");
			$aciklama =  $this -> input -> post("aciklama");

			$insert = $this -> acente -> talep_olustur(
				array(
					"talep_adi" => $talep_adi,
					"konu" => $konu,
					"aciklama" => $aciklama,
					"kullanicino" => $this->session->userdata('no'),
					"tarih" => date("Y-m-d")
				)
			);

			if($insert)
			{
				$json_array = array(
					"title" => "Başarılı",
					"mesaj" => "Kaydedildi",
					"type" => "success",
					"url" => base_url('tedarikci/taleplerim')
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

	public function arac_ekle()
	{
		$data['title'] = 'Araçlar';
		$data['content'] = 'tedarikci/araclar/arac_ekle';
		$data['taleplerim'] = $this -> tedarikci -> taleplerim();

		$this->load->view('pages/index', $data);
	}

}
