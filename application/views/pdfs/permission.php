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

    <h2>İzin Formu</h2>

    <table>
        <tr>
          <td>
            <b>İzinli Personel: </b>
            <span><?php echo $session_user_get_permission['izindolduran_isim']; ?></span>
          </td>
        </tr>
        <tr>
          <td>
            <b>İzin Türü: </b>
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
            <b>İzinde Bulunacağı Adres: </b>
            <span><?php echo $session_user_get_permission['izinde_bulunacagi_adres']; ?></span>
          </td>
        </tr>
    </table>

    <table width="100%" style="text-align: center;">
        <tr>
          <td colspan="3">
            <h3>İzinli Tarihler ve Saatler</h3>
          </td>
        </tr>
        <tr>
          <td width="30%">
            <b>İzne Başlama Tarihi ve Saati</b>
          </td>
          <td width="30%">
            <b>İzin Bitiş Tarihi ve Saati</b>
          </td>
          <td width="30%">
            <b>İzin Süresi</b>
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
            <b>Toplam İzin Süresi:</b>
            <span><?php echo array_sum($total_time); ?> Saat</span>
          </td>
        </tr>
    </table>

    <table width="100%" style="text-align: center;margin-top:100px;">
        <tr>
          <td>
            <b>İzinli Personel İmza</b>
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
