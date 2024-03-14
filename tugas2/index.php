<?php
$list_prodi = [
	'SI' => 'Sistem Informasi',
	'TI' => 'Teknik Informatika',
	'BD' => 'Bisnis Digital'
];

$list_skill = [
	'HTML' => 10,
	'CSS' => 20,
	'JavaScript' => 20,
	'RWD Bootstrap' => 20,
	'PHP' => 30,
	'Python' => 30,
	'Java' => 50
];

$list_domisili = [
	'Jakarta', 'Depok', 'Bogor', 'Tangerang', 'Bekasi', 'Lainnya'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Registrasi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container" style="margin-top: 50px;">
		<form method="POST" action="proses_registrasi.php">
			<div class="form-group row">
				<label for="nim" class="col-4 col-form-label">NIM</label> 
				<div class="col-8">
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fa fa-address-card"></i>
							</div>
						</div> 
						<input id="nim" name="nim" placeholder="NIM" type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
				<div class="col-8">
					<input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-4">Jenis Kelamin</label> 
				<div class="col-8">
					<div class="custom-control custom-radio custom-control-inline">
						<input name="jenis-kelamin" id="jenis-kelamin_0" type="radio" class="custom-control-input" value="laki-laki"> 
						<label for="jenis-kelamin_0" class="custom-control-label">Laki-laki</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input name="jenis-kelamin" id="jenis-kelamin_1" type="radio" class="custom-control-input" value="perempuan"> 
						<label for="jenis-kelamin_1" class="custom-control-label">Perempuan</label>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="program-studi" class="col-4 col-form-label">Program Studi</label> 
				<div class="col-8">
					<select id="program-studi" name="program-studi" class="custom-select">
						<?php
							foreach ($list_prodi as $key => $value) {
								echo '<option value="'. $key .'">'. $value .'</option>';
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-4">Skill Web & Programming</label> 
				<div class="col-8">
					<?php
						$i = 0;
						foreach ($list_skill as $key => $value) {
							echo '<div class="custom-control custom-checkbox custom-control-inline">';
							echo '	<input name="skills[]" id="skill_'. $i .'" type="checkbox" class="custom-control-input" value="'. $key .'">';
							echo '	<label for="skill_'. $i .'" class="custom-control-label">'. $key .'</label>';
							echo '</div>';
							$i++;
						}
					?>
				</div>
			</div>
			<div class="form-group row">
				<label for="tempat" class="col-4 col-form-label">Tempat Domisili</label> 
				<div class="col-8">
					<select id="tempat" name="tempat" class="custom-select">
						<?php
							foreach ($list_domisili as $key => $value) {
								echo '<option value="'. $key .'">'. $value .'</option>';
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="email" class="col-4 col-form-label">Email</label> 
				<div class="col-8">
					<input id="email" name="email" placeholder="email" type="text" class="form-control">
				</div>
			</div> 
			<div class="form-group row">
				<div class="offset-4 col-8">
					<button name="submit" type="submit" class="btn btn-primary">Registrasi</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
