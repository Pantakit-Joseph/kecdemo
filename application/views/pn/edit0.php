<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>แบบคำร้องแก้ไขผลการเรียน</title>

	<link rel="stylesheet" href="<?= base_url('assets/font/font.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/reset.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/print/edit0.css') ?>">
</head>

<body>
	<div class="pagebreak">
		<div class="data">
			<!-- ส่วนที่ 1 -->
			<div class="bg text-center" style="width: 50mm; top: 50mm; left: 45mm;">
				<?= (isset($in['title']) ? $in['title'] : '') . (isset($in['firstname']) ? $in['firstname'] : '') . ' ' . (isset($in['lastname']) ? $in['lastname'] : '') ?>
			</div>
			<div class="bg text-center" style="width: 50mm; top: 50mm; left: 133mm;">
				<?= isset($in['std_code']) ? $in['std_code'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 20mm; top: 58.5mm; left: 45mm;">
				<?= isset($in['class']) ? $in['class'] : '' ?>
			</div>
			<div class="bg" style="width: 38mm; top: 58.5mm; left: 79mm;">
				<?php
				if (isset($in['dep'])) {
					$dep = $this->db->get_where('majors', ['id' => $in['dep']])->row();
					echo isset($dep->major_name) ? $dep->major_name : '';
				}
				?>
			</div>
			<div class="bg text-center" style="width: 20mm; top: 58.5mm; left: 128mm;">
				<?= isset($in['year']) ? $in['year'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 20mm; top: 58.5mm; left: 157mm;">
				<?= isset($in['group']) ? $in['group'] : '' ?>
			</div>

			<div class="bg text-center" style="width: 30mm; top: 67mm; left: 101mm;">
				<?= isset($in['term']) ? $in['term'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 30mm; top: 67mm; left: 152mm;">
				<?= isset($in['year0']) ? $in['year0'] : '' ?>
			</div>
			<div class="bg" style="width: 43mm; top: 75.5mm; left: 6mm;">
				<?= isset($in['subject']) ? $in['subject'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 32mm; top: 75.5mm; left: 62mm;">
				<?= isset($in['subject_code']) ? $in['subject_code'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 16mm; top: 75.5mm; left: 118mm;">
				<?= isset($in['unit']) ? $in['unit'] : '' ?>
			</div>
			<div class="bg" style="width: 40mm; top: 75.5mm; left: 153mm;">
				<?= (isset($in['title_te']) ? $in['title_te'] : '') . (isset($in['firstname_te']) ? $in['firstname_te'] : '') . ' ' . (isset($in['lastname_te']) ? $in['lastname_te'] : '') ?>
			</div>

			<div class="bg signature text-center" style="width: 42mm; height: 13mm; top: 98.8mm; left: 108mm;">
				<?php
				$sign_std = $this->db->get_where('users', ['std_id' => $in['std_code']])->row();
				?>
				<img src="<?= base_url('storage/' . (isset($sign_std->std_img) ? $sign_std->std_img : '')) ?>" alt="" class="">
			</div>
			<div class="bg text-center" style="width: 53mm; top: 115mm; left: 103mm;">
				<?= (isset($in['title']) ? $in['title'] : '') . (isset($in['firstname']) ? $in['firstname'] : '') . ' ' . (isset($in['lastname']) ? $in['lastname'] : '') ?>
			</div>

			<!-- ส่วนที่ 2 -->
			<div class="bg text-center" style="width: 58mm; top: 153mm; left: 42mm;">
				<?= (isset($in['title']) ? $in['title'] : '') . (isset($in['firstname']) ? $in['firstname'] : '') . ' ' . (isset($in['lastname']) ? $in['lastname'] : '') ?>
			</div>
			<div class="bg text-center" style="width: 38mm; top: 153mm; left: 146mm;">
				<?= isset($in['std_code']) ? $in['std_code'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 20mm; top: 161.5mm; left: 44mm;">
				<?= isset($in['class']) ? $in['class'] : '' ?>
			</div>
			<div class="bg" style="width: 46mm; top: 161.5mm; left: 79mm;">
				<?php
				if (isset($in['dep'])) {
					echo isset($dep->major_name) ? $dep->major_name : '';
				}
				?>
			</div>
			<div class="bg text-center" style="width: 20mm; top: 161.5mm; left: 136mm;">
				<?= isset($in['year']) ? $in['year'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 18mm; top: 161.5mm; left: 166mm;">
				<?= isset($in['group']) ? $in['group'] : '' ?>
			</div>
			<div class="bg" style="width: 82mm;top: 170mm; left: 102mm;">
				<?= isset($in['subject']) ? $in['subject'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 20mm; top: 178.5mm; left: 27mm;">
				<?= isset($in['term']) ? $in['term'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 20mm; top: 178.5mm; left: 49mm;">
				<?= isset($in['year0']) ? $in['year0'] : '' ?>
			</div>

			<div class="bg signature text-center" style="width: 42mm; height: 13mm; top: 193mm; left: 106mm;">
				<img src="<?= base_url('storage/' . (isset($sign_std->std_img) ? $sign_std->std_img : '')) ?>" alt="" class="">
			</div>
			<div class="bg text-center" style="width: 53mm; top: 209.5mm; left: 104mm;">
				<?= (isset($in['title']) ? $in['title'] : '') . (isset($in['firstname']) ? $in['firstname'] : '') . ' ' . (isset($in['lastname']) ? $in['lastname'] : '') ?>
			</div>
		</div>

		<p class="text-right b lh-1-5">
			วผ. ๐๘
		</p>
		<p class="text-right lh-1-5">
			• (ส่วนที่ 1 วัดผลแผนกวิชารวบรวมส่งสำหรับงานวัดผล)
		</p>
		<p class="text-center b lh-1-5">
			แบบคำร้องแก้ไขผลการเรียน
		</p>
		<p class="lh-1-5">
			เรื่อง ขออนุญาตแก้ไขผลการเรียน 0/มส
			<br>
			เรียน ผู้อำนวยการวิทยาลัยการอาชีพแก้งคร้อ
		</p>
		<span class="ts-8 lh-1">&nbsp;</span>

		<p class="indent">
			ข้าพเจ้า(นาย/นางสาว)........................................................รหัสประจำตัวนักเรียนนักศึกษา..............................................
			<br>เป็นนักเรียนนักศึกษาหลักสูตร......................แผนกวิชา..........................................ชั้นปีที่..........................กลุ่ม.............................
		</p>
		<p class="indent">
			มีความประสงค์ขอแก้ไขผลการเรียน 0/มส ประจำภาคเรียนที่......................................ปีการศึกษา...................................
			<br>วิชา................................................รหัสวิชา...................................จำนวนหน่วยกิต...................ชื่อครูผู้สอน..................................
		</p>

		<p class="indent">
			จึงเรียนมาเพื่อโปรดพิจารณาอนุญาต
		</p>


		<div class="text-right" style="padding-right: 3em;">
			ขอแสดงความนับถือ&emsp;&emsp;&emsp;&emsp;
		</div>
		<div class="text-right mt" style="padding-right: 3em;">
			ลงชื่อ..............................................ผู้ยื่นคำร้อง
			<br>(..........................................................)&ensp;&emsp;&nbsp;
		</div>

		<p class="line">
			&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;
		</p>

		<p class="text-right lh-1-5">
			(ส่วนที่ 2 สำหรับครูผู้สอนเก็บไว้)
		</p>
		<span class="ts-8 lh-1">&nbsp;</span>

		<p class="indent">
			ตามที่(นาย/นางสาว)................................................................รหัสประจำตัวนักเรียนนักศึกษา.........................................
			<br>เป็นนักเรียนนักศึกษาหลักสูตร......................แผนกวิชา...................................................ชั้นปีที่...........................กลุ่ม...................
		</p>
		<p class="indent">
			นักเรียน นักศึกษาได้ยื่นคำร้องขอแก้ไขผลการเรียน 0/มส วิชา.........................................................................................
			<br>ประจำภาคเรียนที่......................./....................
		</p>
		<span class="ts-8 lh-1">&nbsp;</span>

		<div class="text-right mt" style="padding-right: 1.5em;">
			ลงชื่อ..............................................นักเรียน/นักศึกษา
			<br>(..........................................................)&ensp;&emsp;&emsp;&ensp;
		</div>

		<p class="line">
			&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;&#x2702;
		</p>

		<!-- &#9711; -->
	</div>

	<div class="pagebreak">
		<div class="data">
			<div class="bg text-center" style="width: 58mm;top: 16mm;left: 42mm;">
				<?= (isset($in['title']) ? $in['title'] : '') . (isset($in['firstname']) ? $in['firstname'] : '') . ' ' . (isset($in['lastname']) ? $in['lastname'] : '') ?>
			</div>
			<div class="bg text-center" style="width: 37mm;top: 16mm;left: 147mm;">
				<?= isset($in['std_code']) ? $in['std_code'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 20mm;top: 24.5mm;left: 44mm;">
				<?= isset($in['class']) ? $in['class'] : '' ?>
			</div>
			<div class="bg" style="width: 51mm;top: 24.5mm;left: 79mm;">
				<?php
				if (isset($in['dep'])) {
					echo isset($dep->major_name) ? $dep->major_name : '';
				}
				?>
			</div>
			<div class="bg text-center" style="width: 17mm;top: 24.5mm;left: 141mm;">
				<?= isset($in['year']) ? $in['year'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 19mm;top: 24.5mm;left: 165mm;">
				<?= isset($in['group']) ? $in['group'] : '' ?>
			</div>
			<div class="bg" style="width: 43mm;top: 33mm;left: 145mm;">
				<?= isset($in['subject']) ? $in['subject'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 21mm;top: 41.5mm;left: 26mm;">
				<?= isset($in['term']) ? $in['term'] : '' ?>
			</div>
			<div class="bg text-center" style="width: 18mm;top: 41.5mm;left: 64mm;">
				<?= isset($in['year0']) ? $in['year0'] : '' ?>
			</div>

			<div class="bg signature text-center" style="width: 41mm;height: 15mm;top: 54mm;left: 105mm;">
				<?php
				$edit_grade = $this->db->get_where('edit_grades', ['std_id' => isset($sign_std->id) ? $sign_std->id : null])->row();
				?>
				<img src="<?= base_url('storage/' . (isset($edit_grade->img_teacher) ? $edit_grade->img_teacher : '')) ?>" alt="" class="">
			</div>
			<div class="bg text-center" style="width: 53mm;top: 73mm;left: 104mm;">
				<?= (isset($in['title_te']) ? $in['title_te'] : '') . (isset($in['firstname_te']) ? $in['firstname_te'] : '') . ' ' . (isset($in['lastname_te']) ? $in['lastname_te'] : '') ?>
			</div>
		</div>
		<p class="text-right lh-1-5">
			(ส่วนที่ 3 สำหรับนักเรียนเก็บไว้)
		</p>
		<span class="lh-1">&nbsp;</span>

		<p class="indent">
			ตามที่(นาย/นางสาว).................................................................รหัสประจำตัวนักเรียนนักศึกษา........................................
			<br>เป็นนักเรียนนักศึกษาหลักสูตร......................แผนกวิชา.........................................................ชั้นปีที่....................กลุ่ม....................
		</p>
		<p class="indent">
			นักเรียน นักศึกษาได้ยื่นคำร้องขอแก้ไขผลการเรียน 0/มส มอบหมายให้นักเรียนนักศึกษาวิชา..........................................
			<br>ประจำภาคเรียนที่.......................ปีการศึกษา....................เรียบร้อยแล้ว และจะดำเนินการแก้ไขผลการเรียนต่อไป
		</p>
		<span class="ts-8 lh-1">&nbsp;</span>

		<div class="text-right mt" style="padding-right: 1.5em;">
			ลงชื่อ..............................................ครูผู้สอนประจำวิชา
			<br>(..........................................................)&ensp;&emsp;&emsp;&ensp;
		</div>
	</div>



	<script type="text/javascript">
		window.onload = function() {
			window.print();
		}
	</script>
</body>

</html>
