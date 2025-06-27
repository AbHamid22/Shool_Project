<?php
$attendance = $arg["attendance"];

$attend=$attendance;
// echo $attend->id;
// echo $attend->academy_student;


?>
<div id="result-sheet">

<div class="col text-sm-center mt-3 mt-sm-0">
  <!-- <a href="home.php" class="logo">
                <img src="<?=asset();?>/img/kaiadmin/download.png"alt="navbar brand"
				class="navbar-brand rounded-circle rounded-logo" height="65" />

            </a> -->
        <h1 class="mb-3">School</h1>
        <h2 style="display: flex;align-items:center;justify-content:center;">
      <img src="<?= asset(); ?>/img/kaiadmin/download.png" alt="navbar brand"
        class="navbar-brand rounded-circle rounded-logo" height="65" />
      <i class="">International Green School.</i>
    </h2>
        <p class="fs--1 mb-0">123 Badda Road, City<br />Dhaka,Bangladesh</p>
        
      </div>


<div>



<div>
    <?php echo AcademyAttendance::attendance($attendance->id); ?>
</div>
