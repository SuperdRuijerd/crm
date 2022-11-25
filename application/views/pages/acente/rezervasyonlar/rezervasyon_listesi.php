<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Acente Paneli</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">Rezervasyonlar</li>
					<li class="breadcrumb-item active"><?php echo $title; ?></li>
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
					<h5>Rezervasyonlar</h5>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="display text-center" id="basic-14">
							<thead>
								<tr>
									<th>Sıra No</th>
									<th>Rezervasyon No</th>
									<th>Nereden</th>
									<th>Nereye</th>
									<th>Tarih</th>
									<th>Saat</th>
								</tr>
							</thead>
							<tbody>
								<?php
									if($rezervasyonlar):
									foreach($rezervasyonlar as $i => $row):
								?>
									<tr>
										<td><?php echo $i + 1; ?></td>
										<td><?php echo $row['revno']; ?></td>
										<td><?php echo $row['nereden']; ?></td>
										<td><?php echo $row['nereye']; ?></td>
										<td><?php echo $row['tarih']; ?></td>
										<td><?php echo $row['saat']; ?></td>
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
