<?php
    // Dynamic Variables
    $buttonText = "Print Routine Sheet";
    $routine = $arg["routine"];
    // print_r($routine);
?>

<style>
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

    .school-header {
        text-align: center;
        margin-top: 20px;
    }

    .school-header img {
        border-radius: 50%;
        height: 65px;
        margin-bottom: 10px;
    }

    .school-header h1,
    .school-header h2 {
        margin: 0;
    }

    .school-header p {
        font-size: 0.9rem;
        margin-top: 5px;
    }

    .print-button {
        text-align: center;
        margin-top: 20px;
    }
</style>


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
    <?php echo AcademyRoutine::routine($routine->class_id); ?>
</div>

<div class="print-button">
    <button onclick="printResultSheet();" class="btn btn-primary"><?= $buttonText; ?></button>
</div>

<script>
    function printResultSheet() {
        window.print();
    }
</script>
