<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>แบบคำร้องแก้ไขผลการเรียน</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
	<style>
		.bg-register-image {
			background: url("<?= base_url('assets/img/photo-1650646002407-f8b4537c1cce.jpeg') ?>");
			background-position: center;
			background-size: cover;
		}
	</style>
</head>

<body>

	<body class="bg-gradient-primary">

		<div class="container">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-4 d-none d-lg-block bg-register-image"></div>
						<div class="col-lg-8">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">หนังสือคำร้องแก้ไขผลการเรียน</h1>
								</div>

								<form class="user" action="<?= site_url('form/edit_grade/submit') ?>" method="POST" enctype="multipart/form-data">
									<p>ข้อมูลนักศึกษา</p>
									<div class="form-group row">
										<div class="col-sm-4 mb-3 mb-sm-0">
											<select class="form-control" name="title" id="title" placeholder="คำนำหน้า">
												<option value="" selected>คำนำหน้า</option>
												<option value="นาย">นาย</option>
												<option value="นาย">นาง</option>
												<option value="นางสาว">นางสาว</option>
											</select>
											<!-- <input type="text" class="form-control form-control-user" name="title" placeholder="คำนำหน้า"> -->
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="firstname" placeholder="ชื่อ">
										</div>
										<div class="col-sm-4">
											<input type="text" class="form-control form-control-user" name="lastname" placeholder="นามสกุล">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="number" class="form-control form-control-user" name="std_code" placeholder="รหัสประจำตัวนักศึกษา" required>
										</div>

										<div class="col-sm-6 mb-3 mb-sm-0">
											<select class="form-control" name="class" id="class" placeholder="ระดับชั้น">
												<option value="" selected>ระดับชั้น</option>
												<option>ปวช</option>
												<option>ปวส</option>
											</select>
											<!-- <input type="text" class="form-control form-control-user" name="course" placeholder="นักเรียนนักศึกษาหลักสูตร"> -->
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-4 mb-3 mb-sm-0">
											<select class="form-control" name="dep" id="dep" placeholder="แผนกวิชา">
												<option value="" selected>แผนกวิชา</option>
												<?php foreach ($index->majors as $major) { ?>
													<option value="<?= $major->id ?>"><?= $major->major_name ?></option>
												<?php } ?>
											</select>
											<!-- <input type="text" class="form-control form-control-user" name="dep" placeholder="แผนกวิชา"> -->
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<select class="form-control" name="year" id="year" placeholder="ชั้นปีที่">
												<option value="" selected>ชั้นปีที่</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<!-- <input type="text" class="form-control form-control-user" name="year" placeholder="ชั้นปีที่"> -->
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="group" placeholder="กลุ่ม">
										</div>
									</div>

									<hr>
									<p>มีความประสงค์ขอแก้ไขผลการเรียน 0 / มส </p>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="subject" placeholder="วิชา">
										</div>
										<div class="col-sm-6 mb-3 mb-sm-0">
											<select class="form-control" name="year0" id="year0" placeholder="ปีการศึกษา">
												<option value="" selected>ปีการศึกษา</option>
												<?php foreach ($index->years as $year) { ?>
													<option value="<?= $year ?>"><?= $year ?></option>
												<?php } ?>
											</select>
											<!-- <input type="text" class="form-control form-control-user" name="year0" placeholder="ปีการศึกษา"> -->
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-4 mb-3 mb-sm-0">
											<select class="form-control" name="term" id="term" placeholder="ประจำภาคเรียนที่">
												<option value="" selected>ประจำภาคเรียนที่</option>
												<option>1</option>
												<option>2</option>
											</select>
											<!-- <input type="text" class="form-control form-control-user" name="subject" placeholder="ประจำภาคเรียนที่"> -->
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="subject_code" placeholder="รหัสวิชา">
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="number" class="form-control form-control-user" name="unit" placeholder="จำนวนหน่วยกิต">
										</div>
									</div>
									<hr>
									<p> ชื่อครูผู้สอน</p>
									<div class="form-group row">
										<div class="col-sm-4 mb-3 mb-sm-0">
											<select class="form-control" name="title_te" id="title_te" placeholder="คำนำหน้า">
												<option value="" selected>คำนำหน้า</option>
												<option value="นาย">นาย</option>
												<option value="นาย">นาง</option>
												<option value="นางสาว">นางสาว</option>
											</select>
											<!-- <input type="text" class="form-control form-control-user" name="title_te" placeholder="คำนำหน้า"> -->
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="firstname_te" placeholder="ชื่อ">
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="lastname_te" placeholder="นามสกุล">
										</div>
									</div>
									<div class="form-group">

										<div class="form-group">
											<p class="custom-file-input-label">ลายเซ็นต์ผู้ยื่นคำร้อง</p>
											<input type="file" class="form-control form-control-file" name="std_signature" accept="image/png, image/jpeg">
										</div>
									</div>
									<hr>
									<div class="form-group">
										<p class="custom-file-input-label">ลายเซ็นต์ครูผู้สอน</p>
										<input type="file" class="form-control form-control-file " name="teacher_signature"  name="parent_signature" accept="image/png, image/jpeg">
									</div>

									<button class="btn btn-primary btn-user btn-block" type="submit">
										ส่งหนังสือคำร้อง
									</button>
							</div>

							</form>
							<hr>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript-->
		<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

		<!-- Core plugin JavaScript-->
		<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

		<!-- Custom scripts for all pages-->
		<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>


	</body>

</html>
