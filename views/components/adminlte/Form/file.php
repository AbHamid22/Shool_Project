<div class='form-group row'>   
<label for='<?=$arg["name"]?>' class='col-sm-2 col-form-label'><?=$arg["label"]?></label>
<div class='col-sm-10'>
    <input type='file' class='<?=$arg["class"]?>' name='<?=$arg["name"]?>' id='<?=$arg["name"]?>' value='<?=$arg["value"]?>' placeholder='<?=$arg["placeholder"]?>' <?=$arg["required"]?> <?=$arg["checked"]?>>      
    <?php         
    if($arg["value"]!=""){
      echo "<img src='{$base_url}/img/{$arg["value"]}' width='200' />";
    }    
    ?>
</div>
</div>