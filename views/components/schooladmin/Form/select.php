<div class='form-group row'>
<label class='col-sm-2 col-form-label'><?=$arg["label"]?></label>
<div class='col-sm-10'>
<select name='<?=$arg["name"]?>' id='<?=$arg["name"]?>' class='form-select' style='width:100%'>
<?php   
$result=$db->query("select $id,$name from {$tx}{$arg["table"]}");
     while(list($id,$name)=$result->fetch_row()){
      
       if($id==$arg["value"]){
         echo "<option value='$id' selected>$name</option>";  
       }else{
         echo "<option value='$id'>$name</option>";  
       }
   
     }
?>
</select>
</div>
</div>