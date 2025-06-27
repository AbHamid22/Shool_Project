<?php
$student = $arg["student"];

// $class=$arg["class"];
// print_r($class);
?>
<style>
    .rtable {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        font-family: Arial, sans-serif;
    }
    .rtable td, .rtable th {
        border: 1px solid gray;
        padding: 8px;
        text-align: left;
    }
    .rtable th {
        background-color: #f2f2f2;
        font-weight: bold;
        text-align: right;
    }
    h1 {
        background-color: #d1e7fd;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
    }

    /* Print-specific styling */
    @media print {
        body * {
            visibility: hidden;
        }
        #result-sheet, #result-sheet * {
            visibility: visible;
        }
        #result-sheet {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }
        .print-button {
            display: none;
        }
    }
</style>

<!-- Result Sheet Wrapper -->
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

<?php
   $batch_id=AcademyStudent::find($student->id)->academy_batch_id;
//    print_r($batch_id);
   $batch=AcademyBatche::find($batch_id);
//    print_r($batch);
  $class_id=$batch->current_class_id;

  $class_name=AcademyClasse::find($class_id)->name;
//   print_r($class_name);
  $batch_name=$batch->name;

  ?>
<div style="display:flex;justify-content:space-between">
<table class="rtable">
  <tr><th>Student ID</th><td><?=$student->id?></td><th>Class</th><td><?=$class_name?></td></tr>
  <tr><th>Student Name</th><td><?=$student->name?></td><th>Batch</th><td><?=$batch_name?></td></tr>
  <tr><th>Fathers Name</th><td><?=$student->fathers_name?></td></tr>


</table>
<div>
    <img src="<?=$base_url?>/img/<?=$student->photo?>" width="100" />
</div>
</div>

</div>
    <h1>Mid Term</h1>
    <?= AcademyResult::report($student->id, 1) ?>

    <h1>Final Term</h1>
    <?= AcademyResult::report($student->id, 2) ?>
</div>

<!-- Print Button -->
<div class="print-button">
    <button onclick="printResultSheet();" class="btn btn-primary">Print Result Sheet</button>
</div>

<script>
    function printResultSheet() {
        window.print();
    }
</script>
