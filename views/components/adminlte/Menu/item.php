<li class="nav-item">       
<a href="<?=$arg["route"]?>" class="nav-link"> 
<i class="<?=$arg["icon"]?>"></i>
<p>   
   <?=$arg["name"]?>
  <?php if(isset($arg["links"])){ ?>
   <i class="right fas fa-angle-left"></i>
   <?php } ?> 
</p>
</a>
<?php if(isset($arg["links"])){?>
    <ul class="nav nav-treeview">
    <?php    
    foreach($arg["links"] as $link){  ?>
        <li class="nav-item">
          <a href="<?=$base_url?>/<?=$link["route"]?>" class="nav-link"> <i class="<?=$link["icon"]?>"></i><p><?=$link["text"]?></p></a>
        </li>   
   <?php } ?>
    </ul>
<?php } ?>
</li>




