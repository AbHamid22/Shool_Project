<?php section("master_header.php");?>

<div class="wrapper">
    <?php section("left_sidebar.php");?>
    <div class="main-panel">
       <?php section("topbar.php");?> 
       <div class="container">
          <?php section("main_content.php");?>
        </div>
        <?php section("footer.php");?>
     </div>
</div>

<?php  section("master_footer.php"); ?> 
