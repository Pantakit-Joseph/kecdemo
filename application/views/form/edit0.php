<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>หนังสือคำร้องขอฝึกอาชีพในสถานประกอบการ</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
	<style>
		.bg-register-image {
			background: url("<?= base_url('assets/img/caleb-george-5sF6NrB1MEg-unsplash.jpg') ?>");
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

								<form class="user" action="correct_db.php" method="POST">
									<p>ข้อมูลนักศึกษา</p>
									<div class="form-group row">
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="title" placeholder="คำนำหน้า">
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="FirstName" placeholder="ชื่อ">
										</div>
										<div class="col-sm-4">
											<input type="text" class="form-control form-control-user" name="LastName" placeholder="นามสกุล">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="std_code" placeholder="รหัสประจำตัวนักศึกษา">
										</div>

										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="course" placeholder="นักเรียนนักศึกษาหลักสูตร">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="dep" placeholder="แผนกวิชา">
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="class" placeholder="ชั้นปีที่">
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="group" placeholder="กลุ่ม">
										</div>
									</div>

									<hr>
									<p>มีความประสงค์ขอแก้ไขผลการเรียน 0 / มส </p>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="term" placeholder="วิชา">
										</div>
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="year" placeholder="ปีการศึกษา">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="subject" placeholder="ประจำภาคเรียนที่">
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="subject_code" placeholder="รหัสวิชา">
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="unit" placeholder="จำนวนหน่วยกิต">
										</div>
									</div>
									<hr>
									<p> ชื่อครูผู้สอน</p>
									<div class="form-group row">
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="title_te" placeholder="คำนำหน้า">
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="FirstName_te" placeholder="ชื่อ">
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="LastName_te" placeholder="นามสกุล">
										</div>
									</div>
									<div class="form-group">

										<div class="form-group">
											<p class="custom-file-input-label">ลายเซ็นต์ผู้ยื่นคำร้อง</p>
											<input type="file" class="form-control form-control-file " name="student_signature">
										</div>
									</div>
									<hr>
									<div class="form-group">
										<p class="custom-file-input-label">ลายเซ็นต์ครูที่ปรึกษา</p>
										<input type="file" class="form-control form-control-file " name="teacher_signature">
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
