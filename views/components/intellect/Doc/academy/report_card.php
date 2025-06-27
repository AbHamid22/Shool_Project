<?php
 $student=$arg["student"];
?>
<style>
.rtable{
  border-collapse:collapse;
  border: 1px solid gray;
  padding:5px;
  margin-bottom:20px;
}
.rtable td,.rtable  th{
    border: 1px solid gray;
    padding:5px;
}

.rtable th{
    font-weight:bolder;
    text-align:right;
}

</style>
<?php
   $batch_id=AcademyStudent::find($student->id)->academy_batch_id;
   $batch=AcademyBatche::find($batch_id);

  $class_id=$batch->current_class_id;

  $class_name=AcademyClasse::find($class_id)->name;
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

<?php
echo "<h1>Mid Term</h1>";
 echo AcademyResult::report($student->id,1);
 echo "<h1>Final</h1>";
 echo AcademyResult::report($student->id,2);
?>