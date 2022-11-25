<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Yönetim Paneli</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">Acenteler</li>
					<li class="breadcrumb-item active">Acente Düzenle</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="card">
		<div class="card-header pb-0">
			<h5>Tedarikçi Düzenle</h5>
		</div>
		<div class="card-body">
			<form class="form theme-form" name="tedarikci_duzenle" id="tedarikci_duzenle">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Acente İsmi</label>
								<div class="col-sm-9">
									<input class="form-control"  type="text" name="adsoyad" value="<?php echo $acente-> adsoyad; ?>" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Acente Kullanıcıadı</label>
								<div class="col-sm-9">
									<input class="form-control"  type="text" name="kullaniciadi" value="<?php echo $acente-> kullaniciadi; ?>" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Acente E-posta</label>
								<div class="col-sm-9">
									<input class="form-control"  type="email" name="eposta" value="<?php echo $acente-> eposta; ?>" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">İletişim Numarası</label>
								<div class="col-sm-9">
									<input class="form-control"  type="text" name="iletisim_no" value="<?php echo $acente-> iletisim_no; ?>" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Fatura Bilgileri</label>
								<div class="col-sm-9">
									<input class="form-control"  type="text" name="fatura_bilgileri" value="<?php echo $acente-> fatura_bilgileri; ?>" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Vergi Dairesi</label>
								<div class="col-sm-9">
									<input class="form-control"  type="text" name="vergi_dairesi" value="<?php echo $acente-> vergi_dairesi; ?>" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Vergi Numarası</label>
								<div class="col-sm-9">
									<input class="form-control"  type="text" name="vergi_no" value="<?php echo $acente-> vergi_no; ?>" autocomplete="off">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer text-center">
					<div class="col-md-12">
						<button class="btn btn-success btn-sm" name="acente_duzenle" type="button">Kaydet</button>
						<a href="<?php echo base_url(); ?>/admin/acenteler" class="btn btn-danger btn-sm">İptal Et</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

