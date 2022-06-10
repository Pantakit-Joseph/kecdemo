<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>แบบฟอร์มคำร้องขอฝึกอาชีพ-วิทยาลัยการอาชีพแก้งคร้อ</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/form.css') ?>">
</head>

<body>
	<div class="container">
		<h1 class="text-center mt-5">แบบฟอร์มคำร้องขอฝึกอาชีพในสถานประกอบการ</h1>
		<form action="<?= site_url('pn/request_internship'); ?>" method="post">
			<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>">
			<div class="card">
				<div class="card-body">
					<h3>ข้อมูลนักเรียน/นักศึกษา</h3>
					<div class="row">
						<div class="col-md-6">
							<label for="std_id" class="form-label">รหัสนักเรียน/นักศึกษา</label>
							<input type="number" class="form-control" id="std_id" name="std_id" required>
						</div>
						<div class="col-md-6">
							<label for="id_card" class="form-label">เลขบัตรประชาชน</label>
							<input type="number" class="form-control" id="id_card" name="id_card" required>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-6">
							<label for="firstname" class="form-label">ชื่อ</label>
							<input type="text" class="form-control" id="firstname" name="firstname" required>
						</div>
						<div class="col-md-6">
							<label for="lastname" class="form-label">นามสกุล</label>
							<input type="text" class="form-control" id="lastname" name="lastname" required>
						</div>
					</div>
					<div class="text-center mt-4">
						<button type="submit" class="btn btn-color1">
							ส่ง
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>

	<script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.bundle.js') ?>"></script>
</body>

</html>
