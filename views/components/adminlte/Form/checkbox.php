<div class='form-group row'>   
    <label for='<?=$arg["name"]?>' class='col-sm-2 col-form-label'><?=$config["label"]?></label>";   
    <div class='col-sm-10'>
        <input type='checkbox' class='<?=$arg["class"]?>' name='<?=$arg["name"]?>' id='<?=$arg["name"]?>' value='<?=$arg["value"]?>' placeholder='<?=$arg["placeholder"]?>' <?=$arg["required"]?> <?=$arg["checked"]?> />    
    </div>
</div>