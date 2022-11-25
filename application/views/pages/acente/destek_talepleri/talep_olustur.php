<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Acente Paneli</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">Destek Talepleri</li>
					<li class="breadcrumb-item active">Talep Oluştur</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="card">
		<div class="card-header pb-0">
			<h5>Talep Oluştur</h5>
		</div>
		<div class="card-body">
			<form class="form theme-form" name="acente_talep_olustur" id="acente_talep_olustur">
				<div class="card-body">
					<div class="row">
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label" for="talep_adi">Talep Adı</label>
							<div class="col-sm-10">
								<input class="form-control" name="talep_adi" id="talep_adi" type="text" placeholder="Talep Adı Giriniz">
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label" for="konu">Konu</label>
							<div class="col-sm-10">
								<input class="form-control" name="konu" id="konu" type="text" placeholder="Konu Giriniz">
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label" for="aciklama">Açıklama</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="aciklama" id="aciklama" rows="5" cols="5" placeholder="Açıklama Giriniz"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer text-end">
					<div class="col-md-12">
						<button class="btn btn-primary btn-sm" name="acente_talep_olustur" type="button">Kaydet</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
