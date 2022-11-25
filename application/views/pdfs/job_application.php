<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>İş Başvuru Formu</title>
    <style>
      body { font-family: DejaVu Sans, sans-serif; }
      table { font-size: 11px; }
	  table tr { vertical-align: top; text-align: left; }
	  table tr h2 { text-align: center !important; }
	  h2 { color: #e03646; }
	  .cevap { color: #11aa41; }
    </style>
  </head>
  <body>
    <table width="100%">
		<tr>
			<td colspan="2">
				<h2>KİŞİSEL BİLGİLER</h2>
			</td>
		</tr>
        <tr>
		  	<td>
				<b>Ad Soyad: </b>
				<span><?php echo $job_application_info['adi']." ".$job_application_info['soyadi']; ?></span>
		  	</td>
			<td>
				<b>Kimlik Numarası: </b>
				<span><?php echo $job_application_info['kimlik_numarasi']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Uyruğu: </b>
				<span><?php echo $job_application_info['uyrugu']; ?></span>
			</td>
			<td>
				<b>Baba Adı: </b>
				<span><?php echo $job_application_info['baba_adi']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Telefon No: </b>
				<span><?php echo $job_application_info['telefon_no']; ?></span>
			</td>
			<td>
				<b>Cinsiyeti: </b>
				<span><?php echo $job_application_info['dogum_tarihi']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Medeni Hali: </b>
				<span><?php echo $job_application_info['medeni_hali']; ?></span>
			</td>
			<td>
				<b>Doğum Yeri: </b>
				<span><?php echo $job_application_info['dogum_yeri']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Ehliyet Sınıfı: </b>
				<span><?php echo $job_application_info['ehliyet_sinifi']; ?></span>
			</td>
			<td>
				<b>Ehliyeti Alış Tarihi: </b>
				<span><?php echo day_month_years($job_application_info['ehliyet_alis_tarihi']); ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Askerlik: </b>
				<span><?php echo $job_application_info['kimlik_turu']." ".$job_application_info['tecil_tarihi']; ?></span>
			</td>
			<td>
				<b>Ev: </b>
				<span><?php echo $job_application_info['evi']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Zaman: </b>
				<span>
					<?php
						if($job_application_info['zaman'] != "")
						{
							echo $job_application_info['zaman']." Saniye";
						}
						else
						{
							echo ($job_application_info['ksure1'] + $job_application_info['ksure2'] + $job_application_info['ksure3'] + $job_application_info['dsure1'] + $job_application_info['dsure2'] + $job_application_info['dsure3'] + $job_application_info['isure1'])." Saniye";
						}
					?>
				</span>
			</td>
			<td>
				<b>Sabıka: </b>
				<span><?php echo $job_application_info['kimlik_turu']." ".$job_application_info['tecil_tarihi']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Sağlık Durmu: </b>
				<span><?php echo $job_application_info['evi']; ?></span>
			</td>
			<td>
				<b>Kan Grubu: </b>
				<span><?php echo $job_application_info['kan_grubu']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Mesleği: </b>
				<span><?php echo $job_application_info['meslegi']; ?></span>
			</td>
			<td>
				<b>Acil Durmuda Aranacak Kişi: </b>
				<span><?php echo $job_application_info['acil_dur_aranacak_tel']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Bakmakla Yükümlü Olduğu Kişiler: </b>
				<span><?php echo $job_application_info['bak_yuk_oldugu_kisiler']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Ev Adresi: </b>
				<span><?php echo $job_application_info['ev_adresi']; ?></span>
			</td>
		</tr>
    </table>

	<table width="100%">
		<tr>
			<td colspan="3">
				<h2>Eğitim Durumu</h2>
			</td>
		</tr>
		<tr>
			<td>
				<b>Okul Adı</b>
			</td>
			<td>
				<b>Bitirme Tarihi</b>
			</td>
			<td>
				<b>Derecesi</b>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['orta_okul_adi']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['bitirme_tarihi_orta_okul']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['orta_derece']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['lise_adi']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['bitirme_tarihi_lise']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['lise_derece']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['universite_adi']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['bitirme_tarihi_universite']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['uni_derece']; ?></span>
			</td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td colspan="3">
				<h2>Katıldığı Kurslar / Aldığı Eğitimler / Yaptığı Stajlar</h2>
			</td>
		</tr>
		<tr>
			<td>
				<b>Eğitim / Kurs / Staj</b>
			</td>
			<td>
				<b>Eğitim / Kurs / Staj Veren Kuruluş</b>
			</td>
			<td>
				<b>Tarihi</b>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['egitim1']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['egitim_veren1']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['egitim_tarihi1']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['egitim2']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['egitim_veren2']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['egitim_tarihi2']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['egitim3']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['egitim_veren3']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['egitim_tarihi3']; ?></span>
			</td>
		</tr>
	</table>

	<?php
		if($job_application_info["Net"] != "")
		{
			$Net = $job_application_info["Net"];
			$Net1 = $job_application_info["Net1"];
		}
		else
		{
			$Net = 0;
			$Net1 = 0;
			if($job_application_info["ingilizce_sorulari"] != "")
			{
				$ingilizce_sorulari = explode(";",$job_application_info["ingilizce_sorulari"]);
				$ingilizce_sorulari[0] == "What’s the matter?" ? $Net++ : "";
				$ingilizce_sorulari[1] == "Mine." ? $Net++ : "";
				$ingilizce_sorulari[2] == "They left hours ago." ? $Net++ : "";
				$ingilizce_sorulari[3] == "which" ? $Net++ : "";
				$ingilizce_sorulari[4] == "way" ? $Net++ : "";
				$ingilizce_sorulari[5] == "for" ? $Net++ : "";
				$ingilizce_sorulari[6] == "because" ? $Net++ : "";
				$ingilizce_sorulari[7] == "as" ? $Net++ : "";
				$ingilizce_sorulari[8] == "come" ? $Net++ : "";
				$ingilizce_sorulari[9] == "thoughts" ? $Net++ : "";
				$ingilizce_sorulari[10] == "back" ? $Net++ : "";
				$ingilizce_sorulari[11] == "hardworking/hard" ? $Net++ : "";
				$ingilizce_sorulari[12] == "can/can’t" ? $Net++ : "";
				$ingilizce_sorulari[13] == "Shall" ? $Net++ : "";
				$ingilizce_sorulari[14] == "however….. as long as" ? $Net++ : "";
				$ingilizce_sorulari[15] == "will be developing/won’t have" ? $Net++ : "";
				$ingilizce_sorulari[16] == "Famous places" || $ingilizce_sorulari[16] == "famous places" || $ingilizce_sorulari[16] == "Famous Places" || $ingilizce_sorulari[16] == "Famous Place" || $ingilizce_sorulari[16] == "famous places"  ? $Net1++ : "";
				$ingilizce_sorulari[17] == "fiveteen" || $ingilizce_sorulari[17] == "15" ? $Net1++ : "";
				$ingilizce_sorulari[18] == "5.30" || $ingilizce_sorulari[18] == "5:30" ? $Net1++ : "";
				$ingilizce_sorulari[19] == "Wraxham" || $ingilizce_sorulari[19] == "wraxham" || $ingilizce_sorulari[19] == "Wraxham Street" || $ingilizce_sorulari[19] == "wraxham street" ? $Net1++ : "";
				$ingilizce_sorulari[20] == "9" || $ingilizce_sorulari[20] == "9 to 5 o’clock" || $ingilizce_sorulari[20] == "9 to 5" || $ingilizce_sorulari[20] == "nine" || $ingilizce_sorulari[20] == "9 o'clock" || $ingilizce_sorulari[20] == "9 clock" ? $Net1++ : "";
				$ingilizce_sorulari[21] == "City" || $ingilizce_sorulari[21] == "City Hall" || $ingilizce_sorulari[21] == "city hall" || $ingilizce_sorulari[21] == "city" || $ingilizce_sorulari[21] == "CITY HALL" || $ingilizce_sorulari[21] == "CITY" ? $Net1++ : "";
				$ingilizce_sorulari[22] == "F" ? $Net1++ : "";
				$ingilizce_sorulari[23] == "F" ? $Net1++ : "";
				$ingilizce_sorulari[24] == "T" ? $Net1++ : "";
				$ingilizce_sorulari[25] == "T" ? $Net1++ : "";
				$ingilizce_sorulari[26] == "F" ? $Net1++ : "";
				$ingilizce_sorulari[27] == "T" ? $Net1++ : "";
			}
		}
	?>

	<table width="100%">
		<tr>
			<td colspan="2">
				<h2>Yabancı Dil</h2>
			</td>
		</tr>
		<tr>
			<td>
				<b>Diller</b>
			</td>
			<td>
				<b>Dil Bilgisi</b>
			</td>
		</tr>
		<tr>
			<td>
				<span>İngilizce:</span>
			</td>
			<td>
				<span><?php echo $job_application_info['dil_ingilizce']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['dil_sec']; ?>:</span>
			</td>
			<td>
				<span><?php echo $job_application_info['sec_dil_seviyesi']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span>İnglizce Sınav Sonucu: </span>
			</td>
			<td>
				<span>Cümle/Kelime anlama, yorumlama ve tamamlamada 16 soruda <?php echo $Net; ?> doğru yapılmıştır.</span>
				<br>
				<span>Dinleme, anlama ve yorumlamada 12 soruda <?php echo $Net1; ?> doğru yapılmıştır.</span>
			</td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td colspan="2">
				<h2>Bilgisayar ve Teknik Yazılım Bilgisi</h2>
			</td>
		</tr>
		<tr>
			<td width="100">
				<b>Ofis Programları: </b>
			</td>
			<td>
				<span><?php echo $job_application_info['windows_tecrube']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Teknik Programlar: </b>
			</td>
			<td>
				<span><?php echo $job_application_info['autocad_tecrube']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Yazılım Bilgisi: </b>
			</td>
			<td>
				<span><?php echo $job_application_info['kullanabildigi_tezgahlar']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td colspan="4">
				<h2>İş Tecrübesi</h2>
			</td>
		</tr>
		<tr>
			<td>
				<b>Firma Adı</b>
			</td>
			<td>
				<b>Görev</b>
			</td>
			<td>
				<b>Ayrılma Nedeni</b>
			</td>
			<td>
				<b>Çalıştığı Dönem</b>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['is1_firma_adi']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['is1_gorevi']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['is1_ayrilma_nedeni']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['is1_calistigi_donem']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['is2_firma_adi']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['is2_gorevi']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['is2_ayrilma_nedeni']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['is2_calistigi_donem']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['is3_firma_adi']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['is3_gorevi']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['is3_ayrilma_nedeni']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['is3_calistigi_donem']; ?></span>
			</td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td colspan="3">
				<h2>Referanslar</h2>
			</td>
		</tr>
		<tr>
			<td>
				<b>Adı Soyadı</b>
			</td>
			<td>
				<b>Çalıştığı Yer ve Ünvanı</b>
			</td>
			<td>
				<b>Telefon No</b>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['referanslar_adi_soyadi']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['ref_calistigi_yer']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['ref_telefon']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['referanslar_adi_soyadi1']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['ref_calistigi_yer1']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['ref_telefon1']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['referanslar_adi_soyadi2']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['ref_calistigi_yer2']; ?></span>
			</td>
			<td>
				<span><?php echo $job_application_info['ref_telefon2']; ?></span>
			</td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td colspan="2">
				<h2>İş ve Ücret Bilgisi</h2>
			</td>
		</tr>
		<tr>
			<td width="150">
				<b>İstediğiniz Görev: </b>
			</td>
			<td>
				<span><?php echo $job_application_info['istedigi_gorev']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Son İşinizde Aldığınız Ücret:</b>
			</td>
			<td>
				<span><?php echo $job_application_info['son_isinde_aldigi_ucret']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>İstediği Ücret ve Sartlar</b>
			</td>
			<td>
				<span><?php echo $job_application_info['istedigi_ucret_ve_sartlar']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>İşe Başlayabileceğiniz Tarih</b>
			</td>
			<td>
				<span><?php echo $job_application_info['ise_baslayacagi_tarih']; ?></span>
			</td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td>
				<h2>Değerlendirme Formu</h2>
			</td>
		</tr>
		<tr>
			<td>
				<b>1) 0 ile 100 araşında kaç tane 9 vardır ?</b>
				<span class="cevap">(Cevap: 20)</span>
			</td>
		</tr>
		<tr>
			<td><span><?php echo $job_application_info['soru1']; ?></span></td>
		</tr>
	</table>

  	<table width="100%">
		<tr>
			<td colspan="2">
				<b>2) Lütfen aşağıdaki soruları cevaplayınız ? ( H=20, Çap=10, Pi=3 )</b>
			</td>
		</tr>
		<tr>
			<td>
				<span>a) Aşağıdaki cisim nedir ?</span>
				<span class="cevap">(Cevap: Silindir)</span>
			</td>
			<td>
				<span><?php echo $job_application_info['soru2_a']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span>b) Hacmi nasıl hesaplanır ?</span>
				<span class="cevap">(Cevap: pi*r2*h)</span>
			</td>
			<td>
				<span><?php echo $job_application_info['soru2_b']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<span>c) Toplam hacmi nedir ?</span>
				<span class="cevap">(Cevap: 1500)</span>
			</td>
			<td>
				<span><?php echo $job_application_info['soru2_c']; ?></span>
			</td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td>
				<b>3) İçinde bir miktar su bulunan bir kaba her gün bir önceki gün kadar su konulmaktadır. Kap 32 gün sonra tam olarak dolmaktadır.Kabın çeyreğinin dolması için kaç gün gereklidir ?</b>
			</td>
		</tr>
		<tr>
			<td>
				<span class="cevap">(Cevap: 30 gün)</span>
				<span><?php echo $job_application_info['soru3']; ?></span>
			</td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td>
				<b>4) Aşağıdaki ingiizce metni Türkçeye çeviriniz ?</b>
				<br>
				<span>The Company was envisaged in the seventies and its first production unit i.e. Heavy Rebuild Factory ( T- Serisi ) went into production in 1980.This was followed in the early nineties by a number of other factories and today HIT has grown into a military industrial complex which conists of six major production units, support facilities and administrative establishments.</span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['soru4']; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</td>
		</tr>
	</table>

	<?php if($job_application_info['soru5'] != ""): ?>
	<table width="100%">
		<tr>
			<td>
				<b>5) Sizinle neden çalışmalıyız. Lütfen 5 sebep yazar mısınız ?</b>
			</td>
		</tr>
		<tr>
			<?php $soru5 = explode(";",$job_application_info['soru5']); ?>
			<td>
				<span><?php echo $soru5[0]; ?></span> <br>
				<span><?php echo $soru5[1]; ?></span> <br>
				<span><?php echo $soru5[2]; ?></span> <br>
				<span><?php echo $soru5[3]; ?></span> <br>
				<span><?php echo $soru5[4]; ?></span>
			</td>
		</tr>
	</table>
	<?php endif; ?>

	<?php if($job_application_info['eksor1'] != ""): ?>
	<table width="100%">
		<tr>
			<td>
				<b>6) Şirkete olan bağlılığınızı arttıran 5 konu nedir ?</b>
			</td>
		</tr>
		<tr>
			<?php $eksor1 = explode(";",$job_application_info['eksor1']); ?>
			<td>
				<span><?php echo $eksor1[0]; ?></span> <br>
				<span><?php echo $eksor1[1]; ?></span> <br>
				<span><?php echo $eksor1[2]; ?></span> <br>
				<span><?php echo $eksor1[3]; ?></span> <br>
				<span><?php echo $eksor1[4]; ?></span>
			</td>
		</tr>
	</table>
	<?php endif; ?>

	<?php if($job_application_info['eksor2'] != ""): ?>
	<table width="100%">
		<tr>
			<td>
				<b>7) Şirkete olan bağlılığınızı zedeleyecek 5 konu nedir ?</b>
			</td>
		</tr>
		<tr>
			<?php $eksor2 = explode(";",$job_application_info['eksor2']); ?>
			<td>
				<span><?php echo $eksor2[0]; ?></span> <br>
				<span><?php echo $eksor2[1]; ?></span> <br>
				<span><?php echo $eksor2[2]; ?></span> <br>
				<span><?php echo $eksor2[3]; ?></span> <br>
				<span><?php echo $eksor2[4]; ?></span>
			</td>
		</tr>
	</table>
	<?php endif; ?>

	<table width="100%">
		<tr>
			<td>
				<b>8) Şirkete olan bağlılığınızı kesinlikle bitirecek olan konu nedir ?</b>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['eksor3']; ?></span>
			</td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td>
				<b>9) Hayattaki önem sıranız nedir ?</b>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['eksor4']; ?></span>
			</td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td>
				<b>10) Hayatınızda karşılaştığınız en büyük zorluk nedir ve nasıl üstesinden geldiniz ?</b>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['eksor_aciklama']; ?></span>
			</td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td>
				<b>11) En büyük akademik başarınız nedir ?</b>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['eksor_aciklama2']; ?></span>
			</td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td>
				<b>12) İş yerinde yaşadığınız bir tartışma / anlaşmazlık örneği verip anlatabilirmisiniz ?</b>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $job_application_info['eksor_aciklama3']; ?></span>
			</td>
		</tr>
	</table>

	<?php
		if($job_application_info['mats'] != ""):
			$mats = explode(";",$job_application_info['mats']);
	?>
	<table width="100%">
		<tr>
			<td>
				<b>13) 12/4x6-7.5x2</b>
				<span class="cevap">(Cevap: 3)</span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $mats[0]; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>14) 1 kübik metre kaç litredir ?</b>
				<span class="cevap">(Cevap: 1000)</span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $mats[1]; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>15) 8 + (9 x 52 + 8)</b>
				<span class="cevap">(Cevap: 484)</span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $mats[2]; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>16) 8 + (9 x 5² + 8) x 2.5 x( 4²/4)</b>
				<span class="cevap">(Cevap: 2338)</span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $mats[3]; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>17) 2-¹ x 2² </b>
				<span class="cevap">(Cevap: 2)</span>
			</td>
		</tr>
		<tr>
			<td>
				<span><?php echo $mats[4]; ?></span>
			</td>
		</tr>
	</table>
	<?php endif; ?>

	<?php
		if($job_application_info["sekil_sorulari"] != ""):
			$sekil_sorulari = explode(";",$job_application_info["sekil_sorulari"]);
			$sekil_sorusu_cevap = 0;
			$sekil_sorulari[0] == "d" ? $sekil_sorusu_cevap++ : "";
			$sekil_sorulari[1] == "c" ? $sekil_sorusu_cevap++ : "";
			$sekil_sorulari[2] == "c" ? $sekil_sorusu_cevap++ : "";
			$sekil_sorulari[3] == "b" ? $sekil_sorusu_cevap++ : "";
	?>
	<table width="100%">
		<tr>
			<td>
				<h2>Şekil Soruları</h2>
			</td>
		</tr>
		<tr>
			<td>
				<span>Şekil sorularında 4 sorudan, <?php echo $sekil_sorusu_cevap; ?> doğru yapılmıştır.</span>
			</td>
		</tr>
	</table>
	<?php endif; ?>

	<?php
		if($job_application_info["zeka_sorulari"] != ""):
			$zeka_sorulari = explode(";",$job_application_info["zeka_sorulari"]);

			$duygusal_farkindalik = ($zeka_sorulari[0] + $zeka_sorulari[1] + $zeka_sorulari[2] + $zeka_sorulari[8] + $zeka_sorulari[9] + $zeka_sorulari[11]);
			if($duygusal_farkindalik >= 31)
			{
				$dy = "Çok Güçlü";
			}
			else if($duygusal_farkindalik >= 26 && $duygusal_farkindalik <= 30)
			{
				$dy = "Gelişme İstiyor";
			}
			else if($duygusal_farkindalik <= 25)
			{
				$dy = "Çok Gelişme İstiyor";
			}

			$kendi_kendini_harekete_gecirme = ($zeka_sorulari[3] + $zeka_sorulari[4] + $zeka_sorulari[5] + $zeka_sorulari[6] + $zeka_sorulari[7] + $zeka_sorulari[10]);
			if($kendi_kendini_harekete_gecirme >= 31)
			{
				$kkhg = "Çok Güçlü";
			}
			else if($kendi_kendini_harekete_gecirme >= 26 && $kendi_kendini_harekete_gecirme <= 30)
			{
				$kkhg = "Gelişme İstiyor";
			}
			else if($kendi_kendini_harekete_gecirme <= 25)
			{
				$kkhg = "Çok Gelişme İstiyor";
			}


			$sekil_sorusu_cevap = 0;
			$sekil_sorulari[0] == "d" ? $sekil_sorusu_cevap++ : "";
			$sekil_sorulari[1] == "c" ? $sekil_sorusu_cevap++ : "";
			$sekil_sorulari[2] == "c" ? $sekil_sorusu_cevap++ : "";
			$sekil_sorulari[3] == "b" ? $sekil_sorusu_cevap++ : "";
	?>
	<table width="100%">
		<tr>
			<td>
				<h2>Duygusal Zeka Soruları</h2>
			</td>
		</tr>
		<tr>
			<td>
				<b>Duygusal Farkındalık: </b>
				<span><?php echo $dy; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<b>Duygusal Farkındalık: </b>
				<span><?php echo $kkhg; ?></span>
			</td>
		</tr>
	</table>
	<?php endif; ?>
  </body>
</html>
