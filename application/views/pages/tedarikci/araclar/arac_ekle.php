<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Tedarikçi Paneli</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">Araçlar</li>
					<li class="breadcrumb-item active">Araç Ekle</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="card">
		<div class="card-header pb-0">
			<h5>Araç Ekle</h5>
		</div>
		<div class="card-body">
			<form class="form theme-form" name="tedarikci_arac_ekle" id="tedarikci_arac_ekle">
				<div class="card-body">
					<div class="row">
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label" for="talep_adi">Araç Adı</label>
							<div class="col-sm-10">
								<input class="form-control" name="talep_adi" id="talep_adi" type="text" placeholder="Talep Adı Giriniz" autocomplete="off">
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label" for="konu">Araç Tipi</label>
							<div class="col-sm-10">
								<select class="js-example-basic-single" name="arac_tipi" autocomplete="off">
									<option value="1">1</option>
								</select>
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label" for="konu">Araç Plakası</label>
							<div class="col-sm-10">
								<input class="form-control" name="konu" id="konu" type="text" placeholder="Konu Giriniz" autocomplete="off">
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer text-end">
					<div class="col-md-12">
						<button class="btn btn-primary btn-sm" name="tedarikci_arac_ekle" type="button">Kaydet</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
