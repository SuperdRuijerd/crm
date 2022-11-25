<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Yönetim Paneli</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">Destek Talepleri</li>
					<li class="breadcrumb-item active">Acente Talep Listesi</li>
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
					<h5>Talepler</h5>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="display text-center" id="basic-14">
							<thead>
							<tr>
								<th>Sıra No</th>
								<th>Talep No</th>
								<th>Tedarikçi İsim</th>
								<th>Başlık</th>
								<th>Konu</th>
							</tr>
							</thead>
							<tbody>
							<?php
							if($destek_talepleri):
								foreach($destek_talepleri as $i => $row):
									?>
									<tr>
										<td><?php echo $i + 1; ?></td>
										<td><?php echo $row['talep_no']; ?></td>
										<td><?php echo $row['adsoyad']; ?></td>
										<td><?php echo $row['talep_adi']; ?></td>
										<td><?php echo $row['konu']; ?></td>
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
