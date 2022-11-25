<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Yönetim Paneli</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">Acenteler</li>
					<li class="breadcrumb-item active">Acente Listesi</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Acenteler</h5>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="display text-center" id="basic-14">
							<thead>
							<tr>
								<th>Sıra No</th>
								<th>Acente No</th>
								<th>Acente İsmi</th>
								<th>İletişim No</th>
								<th>E-posta</th>
								<th>Durum</th>
								<th>Düzenle</th>
							</tr>
							</thead>
							<tbody>
								<?php
									if($acenteler):
									foreach($acenteler as $i => $row):
								?>
									<tr>
										<td><?php echo $i + 1; ?></td>
										<td><?php echo $row['no']; ?></td>
										<td><?php echo $row['adsoyad']; ?></td>
										<td><?php echo $row['iletisim_no']; ?></td>
										<td><?php echo $row['eposta']; ?></td>
										<td>
											<div class="media">
												<label class="col-form-label">Kapalı</label>
												<div class="media-body">
													<label class="switch">
														<input type="checkbox" <?php echo $row['onay'] == 1 ? 'checked' : ''; ?> name="acente_durum" value="<?php echo $row['no']; ?>"><span class="switch-state"></span>
													</label>
												</div>
												<label class="col-form-label">Açık</label>
											</div>
										</td>
										<td>
											<a href="<?php echo base_url(''); ?>admin/acente_duzenle/<?php echo $row['no']; ?>">
												<img src="<?php echo base_url('public'); ?>/assets/images/icon/edit.png" width="30" height="30">
											</a>
										</td>
									</tr>
								<?php
									endforeach;
									endif;
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

