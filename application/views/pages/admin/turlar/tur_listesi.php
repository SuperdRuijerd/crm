<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Yönetim Paneli</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">Şehir Turları</li>
					<li class="breadcrumb-item active">Tur Listesi</li>
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
					<h5>Turlar</h5>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="display text-center" id="basic-14">
							<thead>
								<tr>
									<th>Sıra No</th>
									<th>Tur No</th>
									<th>Tur Adı</th>
									<th>Tur Süresi</th>
									<th>Gezilecek Yerler</th>
								</tr>
							</thead>
							<tbody>
								<?php
									if($turlar):
									foreach($turlar as $i => $row):
								?>
									<tr>
										<td><?php echo $i + 1; ?></td>
										<td><?php echo $row['tur_no']; ?></td>
										<td><?php echo $row['tur_adi']; ?></td>
										<td><?php echo $row['tur_suresi']; ?></td>
										<td><?php echo $row['gezilecek_yerler']; ?></td>
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
