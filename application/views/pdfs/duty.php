<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>İzin Formu</title>
    <style>
      body { font-family: DejaVu Sans, sans-serif; }
      table { font-size: 14px; }
      h2 { text-align: center;}
    </style>
  </head>
  <body>

    <div>
      <img width="750" src="<?php echo base_url(); ?>public/assets/images/logo/pdf_top_title.jpg"/>
    </div>

    <table width="100%">
      <tr>
        <td>
          <b>Belge No: </b>
          <span>IKY.FRM.5728</span>
        </td>
        <td align="right">
          <b>Form Tarihi: </b>
          <span><?php echo date("d.m.Y"); ?></span>
        </td>
      </tr>
    </table>

    <h2>Görev Formu</h2>

    <table>
        <tr>
          <td>
            <b>Görevli Personel: </b>
            <span><?php echo $session_user_get_permission['izindolduran_isim']; ?></span>
          </td>
        </tr>
        <tr>
          <td>
            <b>Görev Türü: </b>
            <span><?php echo $session_user_get_permission['izin_turu']; ?></span>
          </td>
        </tr>
        <tr>
          <td>
            <b>İzin Nedeni: </b>
            <span><?php echo $session_user_get_permission['mazaret_nedeni']; ?></span>
          </td>
        </tr>
        <tr>
          <td>
            <b>Ülke / İl / İlçe: </b>
            <span><?php echo $session_user_get_permission['ulke']." ".$session_user_get_permission['il']." ".$session_user_get_permission['ilce']; ?></span>
          </td>
        </tr>
    </table>

    <table width="100%" style="text-align: center;">
        <tr>
          <td colspan="3">
            <h3>Görevli Tarihler ve Saatler</h3>
          </td>
        </tr>
        <tr>
          <td width="40%">
            <b>Göreve Başlama Tarihi ve Saati</b>
          </td>
          <td width="30%">
            <b>Görev Bitiş Tarihi ve Saati</b>
          </td>
          <td width="30%">
            <b>Görev Süresi</b>
          </td>
        </tr>
        <?php foreach($session_user_get_permission_group as $row): ?>
        <tr>
          <td>
            <span><?php echo day_month_years($row['izne_baslama_tarihi'])." ".$row['izne_baslama_saati']; ?></span>
          </td>
          <td>
            <span><?php echo day_month_years($row['izin_bitis_tarihi'])." ".$row['izin_bitis_saati']; ?></span>
          </td>
          <td>
            <span><?php echo $total_time[] = calculate_time_two_date($row['izne_baslama_tarihi']." ".$row['izne_baslama_saati'], $row['izin_bitis_tarihi']." ".$row['izin_bitis_saati']); ?> Saat</span>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <table width="100%" style="text-align: center;">
        <tr>
          <td>
            <b>Toplam Görev Süresi:</b>
            <span><?php echo array_sum($total_time); ?> Saat</span>
          </td>
        </tr>
    </table>

    <table width="100%" style="text-align: center;margin-top:100px;">
        <tr>
          <td>
            <b>Görevli Personel İmza</b>
          </td>
          <td>
            <b>Birim Yönetici İmza</b>
          </td>
          <td>
            <b>Üst Yönetim İmza</b>
          </td>
        </tr>
    </table>

  </body>
</html>
