<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url("public"); ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url("public"); ?>/assets/images/favicon.png" type="image/x-icon">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style>
      body{
      width: 650px;
      font-family: work-Sans, sans-serif;
      background-color: #f6f7fb;
      display: block;
      }
      a{
      text-decoration: none;
      }
      span {
      font-size: 14px;
      }
      p {
          font-size: 13px;
         line-height: 1.7;
         letter-spacing: 0.7px;
         margin-top: 0;
      }
      .text-center{
      text-align: center
      }
      h6 {
      font-size: 16px;
      margin: 0 0 18px 0;
      }
    </style>
  </head>
  <body style="margin: 30px auto;">
    <table style="width: 100%">
      <tbody>
        <tr>
          <td>
            <table style="background-color: #f6f7fb; width: 100%">
              <tbody>
                <tr>
                  <td>
                    <table style="width: 650px; margin: 0 auto; margin-bottom: 30px">
                      <tbody>
                        <tr>
                          <td><img class="img-fluid" src="<?php echo base_url("public"); ?>/assets/images/logo/logo.png"></td>
                          <td style="text-align: right; color:#999"><span>Nero Endüstri İzin Formu</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table style="width: 650px; margin: 0 auto; background-color: #fff; border-radius: 8px">
              <tbody>
                <tr>
                  <td style="padding: 30px">
                    <h6 style="font-weight: 600">İzin Formu Bilgileri</h6>
                    <p>
                      <b>İzinli Personel: </b>
                      <span><?php echo $adsoyad; ?></span>
                    </p>

                    <p>
                      <b>İzin Türü: </b>
                      <span><?php echo $izin_turu; ?></span>
                    </p>

                    <p>
                      <b>İzin Nedeni: </b>
                      <span><?php echo $izin_nedeni; ?></span>
                    </p>

                    <p>
                      <b>İzinde Bulunacağı Adres: </b>
                      <span><?php echo $izinde_bulunacagi_adres; ?></span>
                    </p>
                    <br>
                    <h6 style="font-weight: 600">İzinli Tarihler ve Saatler</h6>
                    <?php
                      $start_date = strtotime($izne_baslama_tarihi);
                      $end_date = strtotime($izin_bitis_tarihi);
                      for ($i = $start_date; $i <= $end_date;$i = $i + 86400):
                        $izin_bitis_saatleri = "18:00:00";
                        $izin_tarihi = date('Y-m-d', $i);
                        if($izin_tarihi == $izin_bitis_tarihi) { $izin_bitis_saatleri = $izin_bitis_saati; }
                    ?>
                    <p>
                      <span><?php echo $izne_baslama_tarihi." ".$izne_baslama_saati; ?></span> -
                      <span><?php echo $izin_bitis_tarihi." ".$izin_bitis_saatleri; ?></span>
                    </p>
                    <?php endfor; ?>
                  </td>
                </tr>
              </tbody>
            </table>
            <table style="width: 650px; margin: 0 auto; margin-top: 30px">
              <tbody>
                <tr style="text-align: center">
                  <td>
                    <p style="color: #999; margin-bottom: 0">NERO ENDÜSTRİ CRM</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
