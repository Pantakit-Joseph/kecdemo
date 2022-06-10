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
									<h1 class="h4 text-gray-900 mb-4">หนังสือคำร้องขอฝึกอาชีพในสถานประกอบการ</h1>
								</div>
								<form class="user">
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
											<input type="text" class="form-control form-control-user" name="code" placeholder="รหัสประจำตัว">
										</div>
										<div class="col-sm-3 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="class" placeholder="ระดับชั้น">
										</div>
										<div class="col-sm-3 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="group" placeholder="กลุ่ม">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-4 mb-3 mb-sm-0">
											<select name="dep" class="form-control form-control-user">
												<option value="">เทคนิคเครื่องกล</option>
											</select>
											<!-- <input type="text" class="form-control form-control-user"  name="dep"
										placeholder="แผนกวิชา">                                            -->
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="minor" placeholder="สาขางาน">
										</div>
										<div class="col-sm-4 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="grade" placeholder="ผลการเรียน">
										</div>
									</div>

									<hr>
									<p>มีความประสงค์ขอฝึกงาน</p>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											จาก <input type="text" class="form-control form-control-user" name="year_form" placeholder="ภาคเรียนที่">
										</div>
										<div class="col-sm-6 mb-3 mb-sm-0">
											ถึง <input type="text" class="form-control form-control-user" name="year_to" placeholder="ภาคเรียนที่">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											ระหว่างวันที่<input type="date" class="form-control form-control-user" name="date_form">
										</div>
										<div class="col-sm-6 mb-3 mb-sm-0">
											ถึงวันที่ <input type="date" class="form-control form-control-user" name="date_to">
										</div>
									</div>
									<hr>
									<div>สถานที่ฝึกอาชีพ</div>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0 ">
											<input type="radio" name="location"> หาสถานที่ฝึกอาชีพเอง
										</div>
										<div class="col-sm-6 mb-3 mb-sm-0 ">
											<input type="radio" name="location"> ให้วิทยาลัยหาสถานที่ฝึกอาชีพให้
										</div>
									</div>
									<hr>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="position" placeholder="ตำแหน่งผู้ที่ติดต่อ.">
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control form-control-user" name="number" placeholder="เลขที่">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="position" placeholder="ถนน">
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control form-control-user" name="number" placeholder="ตำบล">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="district" placeholder="อำเภอ">
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control form-control-user" name="provice" placeholder="จังหวัด">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="text" class="form-control form-control-user" name="post" placeholder="รหัสไปรษณีย์">
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control form-control-user" name="tel" placeholder="เบอร์โทรศัพท์">
										</div>
									</div>
									<hr>
									<p>ความเห็นผู้ปกครอง</p>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" name="parent" placeholder="ความเห็นผู้ปกครอง">
									</div>
									<div class="form-group">
										<p class="custom-file-input-label">ลายเซ็นต์ผู้ปกครอง</p>
										<input type="file" class="form-control form-control-file " name="parent_signature">
									</div>

									<hr>
									<p>ความเห็นครูที่ปรึกษา</p>
									<div class="form-group row">
										<div class="col-sm-4 mb-3 mb-sm-0">
											<div class="custom-control custom-checkbox small">
												<input type="checkbox" class="custom-control-input" name="ok_teacher">
												<label class="custom-control-label" for="customCheck">
													อนุมัติ</label>
											</div>
										</div>
										<div class="col-sm-8 mb-3 mb-sm-0">
											<div class="custom-control custom-checkbox small">
												<input type="checkbox" class="custom-control-input" name="ok1_teacher">
												<label class="custom-control-label" for="customCheck">
													ได้ตรวจสอบคุณสมบัติของสถานประกอบการแล้ว </label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<p class="custom-file-input-label">ลายเซ็นต์ครูที่ปรึกษา</p>
										<input type="file" class="form-control form-control-file " name="parent_teacher">
									</div>
									<hr>
									<p>ความเห็นหัวหน้าแผนกวิชา</p>
									<div class="form-group row">
										<div class="col-sm-4 mb-3 mb-sm-0">
											<div class="custom-control custom-checkbox small">
												<input type="checkbox" class="custom-control-input" name="ok_teacher1">
												<label class="custom-control-label" for="customCheck">
													อนุมัติ</label>
											</div>
										</div>
										<div class="col-sm-8 mb-3 mb-sm-0">
											<div class="custom-control custom-checkbox small">
												<input type="checkbox" class="custom-control-input" name="ok1_teacher1">
												<label class="custom-control-label" for="customCheck">
													ได้ตรวจสอบคุณสมบัติของสถานประกอบการแล้ว </label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<p class="custom-file-input-label">ลายเซ็นต์หัวหน้าแผนกวิชา</p>
										<input type="file" class="form-control form-control-file " name="parent_teacher1">
									</div>

									<a href="login.html" class="btn btn-primary btn-user btn-block">
										ส่งหนังสือคำร้อง
									</a>
									<hr>
								</form>
								<hr>

							</div>
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