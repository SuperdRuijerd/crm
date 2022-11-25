<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Tedarikçi Paneli</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">Destek Talepleri</li>
					<li class="breadcrumb-item active">Taleplerim</li>
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
					<h5>Taleplerim</h5>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="display text-center" id="basic-14">
							<thead>
							<tr>
								<th>Sıra No</th>
								<th>Talep No</th>
								<th>Başlık</th>
								<th>Konu</th>
							</tr>
							</thead>
							<tbody>
							<?php
							if($taleplerim):
								foreach($taleplerim as $i => $row):
									?>
									<tr>
										<td><?php echo $i + 1; ?></td>
										<td><?php echo $row['talep_no']; ?></td>
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
