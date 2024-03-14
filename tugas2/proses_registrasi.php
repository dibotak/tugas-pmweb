<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Registrasi</title>
</head>
<body>
  <div>
		<?php
			function skor_skill($selected = []) {
				$list_selected = [
					'HTML' => 10,
					'CSS' => 20,
					'JavaScript' => 20,
					'RWD Bootstrap' => 20,
					'PHP' => 30,
					'Python' => 30,
					'Java' => 50
				];
				$skor = 0;
				foreach ($selected as $each) {
					$skor += intval($list_selected[$each]);
				}
				return $skor;
			}

			function kategori_skill($angka_skill = 0) {
				if ($angka_skill == 0) {
					return 'Tidak Memadai';
				} else if ($angka_skill > 0 && $angka_skill <= 40) {
					return 'Kurang';
				} else if ($angka_skill > 40 && $angka_skill <= 60) {
					return 'Cukup';
				} else if ($angka_skill > 60 && $angka_skill <= 100) {
					return 'Baik';
				} else if ($angka_skill > 100 && $angka_skill <= 150) {
					return 'Sangat Baik';
				} else if ($angka_skill > 150) {
					return 'Lebih dari sangat baik';
				}
			}

			$skor_skill = skor_skill($_POST['skills']);
			$kategori_skill = kategori_skill($skor_skill);
			$list_skill = '';
			foreach ($_POST['skills'] as $key => $skill) {
				if (strlen($list_skill) > 0) {
					$list_skill .= ', ';
				}
				$list_skill .= $skill;
			}
		?>
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><?= $_POST['nim'] ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?= $_POST['nama'] ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?= $_POST['jenis-kelamin'] ?></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><?= $_POST['program-studi'] ?></td>
			</tr>
			<tr>
				<td>Skill</td>
				<td>:</td>
				<td><?= $list_skill ?></td>
			</tr>
			<tr>
				<td>Skor Skill</td>
				<td>:</td>
				<td><?= $skor_skill ?></td>
			</tr>
			<tr>
				<td>Kategori Skill</td>
				<td>:</td>
				<td><?= $kategori_skill ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?= $_POST['email'] ?></td>
			</tr>
		</table>
	</div>
</body>
</html>
