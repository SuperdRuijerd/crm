<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo base_url(); ?>public/assets/images/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>public/assets/images/favicon.png" type="image/x-icon">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/fontawesome.css">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<style>
		body{
			text-align: center;
			margin: 0 auto;
			width: 1400px;
			font-family: work-Sans, sans-serif;
			background-color: #f6f7fb;
			display: block;
			padding: 20px;
		}
		table.order-detail{
			width: 98%;
			margin-left: 15px;
			margin-bottom: 50px;
		}
		table.order-detail tbody td{
			height: 45px;
			font-size:13px;
		}
		table.order-detail , table.order-detail th , table.order-detail td{
			border-bottom: 1px solid #bbb;
			border-collapse: collapse;
		}
		table.order-detail tr:nth-child(even){
			background-color: #f2f2f2;
		}
		.order-detail tbody th{
			font-size: 13px;
			padding: 15px;
		}
		.title{
			font-size: 16px;
			font-weight: bold;
			color: #FFFFFF;
			text-align: left;
		}
		table.order-detail thead th{
			text-align: left;
			padding: 20px;
		}
	</style>
</head>
<body>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%;">
		<tbody>
		<tr>
			<td>
				<p>&nbsp;</p>
				<table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left">
					<thead>
						<tr>
							<th colspan="8" bgcolor="#6495ed">
								<span class="title">ÖNCEKİ GÜNÜN MİSAFİRLERİ</span>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th width="10">Kart No</th>
							<th width="50">Adı Soyadı</th>
							<th width="50">TC</th>
							<th width="50">Telefon No</th>
							<th width="50">Firma Adı</th>
							<th width="50">Görüşülen Kişi</th>
							<th width="60">Giriş Saati</th>
							<th width="60">Çıkış Saati</th>
						</tr>
						<?php if($yesterday_visitor_tracking): foreach($yesterday_visitor_tracking as $row): ?>
							<tr>
								<td><?php echo $row['kart_no']; ?></td>
								<td><?php echo $row['ad_soyad']; ?></td>
								<td><?php echo $row['tc_pasaport']; ?></td>
								<td><?php echo $row['tel_no']; ?></td>
								<td><?php echo $row['firma_adi']; ?></td>
								<td><?php echo $row['gorusulecek_kisi']; ?></td>
								<td><?php echo $row['giris_tarih']; ?></td>
								<td><?php echo $row['cikis_tarih']; ?></td>
							</tr>
						<?php endforeach; endif; ?>
					</tbody>
				</table>

				<table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left">
					<thead>
						<tr>
							<th colspan="7" bgcolor="#6495ed">
								<span class="title">ÖNCEKİ GÜNÜN GÖREV FORMLARI</span>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th width="5">Araç Plakası</th>
							<th width="30">Görev Veren Kişi</th>
							<th width="70">Görevli</th>
							<th width="50">Görev Yeri</th>
							<th width="50">Görev Açıklaması</th>
							<th width="30">Alış Tarihi</th>
							<th width="30">Teslim Tarihi</th>
						</tr>
						<?php if($vehicle_task_list): foreach($vehicle_task_list as $row): ?>
							<tr>
								<td><?php echo $row['AracPlakasi']; ?></td>
								<td><?php echo $row['GoreviVerenKisi']; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['GorevYeri']; ?></td>
								<td><?php echo $row['GorevAciklamasi']; ?></td>
								<td><?php echo $row['AlisTarihi']." ".$row['AlisSaati']; ?></td>
								<td><?php echo $row['TeslimTarihi']." ".$row['TeslimSaati']; ?></td>
							</tr>
						<?php endforeach; endif; ?>
					</tbody>
				</table>

				<table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left">
					<thead>
						<tr>
							<th colspan="2" bgcolor="#6495ed">
								<span class="title">GENEL DETAY</span>
							</th>
						</tr>
					</thead>
					<tbody style="text-align: left !important;text-indent: 15px;">
						<tr>
							<td><b>Tarih</b></td>
							<td><?php echo $date; ?></td>
						</tr>
						<tr>
							<td><b>Toplam Personel</b></td>
							<td><?php echo count($staff_log_entries); ?></td>
						</tr>
						<tr>
							<td><b>Giriş Yapan Personel</b></td>
							<td><?php echo count($staff_log_entries_count); ?></td>
						</tr>
						<tr>
							<td><b>Giriş Yapmayan Personel</b></td>
							<td><?php echo count($staff_log_notentries_count); ?></td>
						</tr>
						<tr>
							<td><b>Misafir Kartı İle Giriş Yapan Personel Sayısı</b></td>
							<td><?php echo count($visitor_tracking); ?></td>
						</tr>
						<tr>
							<td><b>İzinli ve Görevli Personel Sayısı</b></td>
							<td><?php echo count($user_permission_count); ?></td>
						</tr>
					</tbody>
				</table>

				<table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left">
					<thead>
						<tr>
							<th colspan="5" bgcolor="#6495ed">
								<span class="title">GÜNÜN MİSAFİRLERİ</span>
							</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<th width="10">Kart No</th>
						<th width="50">Adı Soyadı</th>
						<th width="50">Görüşeceği Kişi</th>
						<th width="50">Giriş Saati</th>
						<th width="50">Telefon No</th>
					</tr>
					<?php if($visitor_tracking): foreach($visitor_tracking as $row): ?>
						<tr>
							<td><?php echo $row['kart_no']; ?></td>
							<td><?php echo $row['ad_soyad']; ?></td>
							<td><?php echo $row['gorusulecek_kisi']; ?></td>
							<td><?php echo $row['giris_tarih']; ?></td>
							<td><?php echo $row['tel_no']; ?></td>
						</tr>
					<?php endforeach; endif; ?>
					</tbody>
				</table>

				<table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left">
					<thead>
						<tr>
							<th colspan="4" bgcolor="#6495ed">
								<span class="title">GÜNLÜK SABAH GİRİŞ BİLGİLERİ</span>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th width="10">Sicil No</th>
							<th width="50">İsim Soyisim</th>
							<th width="70">Giriş Saati</th>
							<th width="100">İzin / Görev Türü</th>
						</tr>
						<?php if($staff_log_entries): foreach($staff_log_entries as $row): ?>
							<?php $permission = $this->dailymail->user_permission($row['ID'], years_month_day($date)); ?>
						<tr>
							<td><?php echo $row['sicilno']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['saat'] === "00:00:00" ? "Giriş Bilgisi Bulunamadı" : $row['saat']; ?></td>
							<td>
								<?php
									if($permission['izin_turu'] != "")
									{
										echo $permission['izin_turu'];
										echo " (".$permission['izne_baslama_saati']." - ".$permission['izin_bitis_saati'].") ";
										echo calculate_time_two_date($permission['izne_baslama_saati'], $permission['izin_bitis_saati'])." saat";
									}
								?>
							</td>
						</tr>
						<?php endforeach; endif; ?>
					</tbody>
				</table>
			</td>
		</tr>
		</tbody>
	</table>
</body>
</html>
