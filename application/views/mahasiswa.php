<!DOCTYPE html>
<html>
<head>
	<title>List Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
<div class="container mt-lg-5">
	<div class="card-deck mb-3 text-center">
		<a href="<?php echo base_url('mahasiswa/tambah');?>"><button class="btn btn-primary">TAMBAH</button></a>
		<br><br>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">NPM</th>
				<th scope="col">Nama</th>
				<th scope="col">Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($mhs as $data): ?>
				<tr>
					<td>
						<?php echo $data->id; ?>
					</td>
					<td>
						<?php echo $data->npm; ?>
					</td>
					<td>
						<?php echo $data->nama; ?>
					</td>
					<td>
						<a href="<?php echo base_url('mahasiswa/edit/').$data->id; ?>">Edit</a> | <a href="<?php echo base_url('mahasiswa/hapus/').$data->id; ?>">Hapus</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>
</body>
</html>
