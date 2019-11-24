<!DOCTYPE html>
<html>
<head>
	<title>List Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
<div class="container mt-lg-5">
	<?php echo form_open(base_url('mahasiswa/simpan')); ?>
		<div class="form-group">
			<label>NPM</label>
			<input type="text" name="npm" class="form-control" id="exampleInputEmail1">
		</div>
		<div class="form-group">
				<label >Nama</label>
				<input type="text" name="nama" class="form-control" id="exampleInputEmail1">
	</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>
</body>
</html>
