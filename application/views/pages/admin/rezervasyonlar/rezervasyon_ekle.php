<div class="container-fluid">
  <div class="page-header">
    <div class="row">
      <div class="col-sm-6">
        <h3>Yönetim Paneli</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Rezervasyonlar</li>
          <li class="breadcrumb-item active">Rezervasyon Ekle</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="card">
    <div class="card-header pb-0">
      <h5>Rezervasyon Ekle</h5>
    </div>
    <div class="card-body">
		<form class="form theme-form" name="rezervasyon_ekle" id="rezervasyon_ekle">
			<div class="card-body">
				<div class="row">

					<div class="form-group col-md-6">
						<div class="mb-1 row">
							<label class="col-sm-4 col-form-label">Nereden</label>
							<div class="col-sm-7">
								<select class="js-example-basic-single" name="nereden" autocomplete="off">
									<option value="Ankara">Ankara</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group col-md-6">
						<div class="mb-1 row">
							<label class="col-sm-4 col-form-label">Nereye</label>
							<div class="col-sm-7">
								<select class="js-example-basic-single" name="nereye" autocomplete="off">
									<option value="Ankara">Ankara</option>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group col-md-6">
						<div class="mb-1 row">
							<label class="col-sm-4 col-form-label">Tarih</label>
							<div class="col-sm-7">
								<input class="form-control"  type="date" name="tarih" autocomplete="off">
							</div>
						</div>
					</div>
					<div class="form-group col-md-6">
						<div class="mb-1 row">
							<label class="col-sm-4 col-form-label">Saat</label>
							<div class="col-sm-7">
								<input class="form-control"  type="time" name="saat" autocomplete="off">
							</div>
						</div>
					</div>

					<div class="form-group col-md-6">
						<div class="mb-1 row">
							<label class="col-sm-4 col-form-label">Kişi Sayısı</label>
							<div class="col-sm-7">
								<select class="js-example-basic-single" name="kisi_sayisi" autocomplete="off">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group col-md-6">
						<div class="mb-1 row">
							<label class="col-sm-4 col-form-label">Uçuş No</label>
							<div class="col-sm-7">
								<input class="form-control"  type="text" name="ucus_no" autocomplete="off">
							</div>
						</div>
					</div>

					<div class="form-group col-md-6">
						<div class="mb-1 row">
							<label class="col-sm-4 col-form-label">Araç</label>
							<div class="col-sm-7">
								<select class="js-example-basic-single" name="arac" autocomplete="off">
									<option value="Araç 1">Araç 1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group col-md-6">
						<div class="mb-1 row">
							<label class="col-sm-4 col-form-label">Fiyat</label>
							<div class="col-sm-7">
								<input class="form-control"  type="text" name="fiyat" autocomplete="off">
							</div>
						</div>
					</div>

					<div class="form-group col-md-8">
						<div class="mb-1 row">
							<label class="col-sm-3 col-form-label">Ekstra Hizmet</label>
							<div class="col-sm-7 m-checkbox-inline">
								<div class="checkbox checkbox-primary">
									<input id="bebek_koltugu" name="bebek_koltugu" type="checkbox" value="1">
									<label for="bebek_koltugu">Bebek Koltuğu</label>
								</div>
								<div class="checkbox checkbox-primary">
									<input id="hava_limani_karsilama" name="hava_limani_karsilama" type="checkbox" value="1">
									<label for="hava_limani_karsilama">Hava Limanı Karşılama</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group col-md-8">
						<div class="mb-1 row">
							<label class="col-sm-3 col-form-label">E-posta</label>
							<div class="col-sm-9">
								<input class="form-control"  type="email" name="eposta" autocomplete="off">
							</div>
						</div>
					</div>

					<div class="form-group col-md-8">
						<div class="mb-1 row">
							<label class="col-sm-3 col-form-label">Telefon No</label>
							<div class="col-sm-9">
								<input class="form-control"  type="text" name="telefon_no" autocomplete="off">
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="card-footer text-end">
				<div class="col-md-12">
					<button class="btn btn-primary btn-sm" name="rezervasyon_ekle" type="button">Kaydet</button>
				</div>
			</div>
		</form>
      </div>
  </div>
</div>
