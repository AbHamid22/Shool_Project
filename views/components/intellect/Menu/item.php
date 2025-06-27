<li class="nav-item">
     <a class="nav-link <?=isset($arg["links"])?"dropdown-indicator":"" ?>" href="<?=$arg["route"]?>" role="button" data-bs-toggle="<?=isset($arg["links"])?"collapse":"" ?>" href="<?=$arg["route"]?>"
        aria-expanded="false" aria-controls="dashboard">
        <div class="d-flex align-items-center">
            <span class="nav-link-icon">
              <span class="<?=$arg["icon"]?>"></span></span>
               <span class="nav-link-text ps-1"><?=$arg["name"]?>
            </span>
        </div>
    </a>
   <?php if(isset($arg["links"])){ ?>
    <ul class="nav collapse" id="<?=$arg["id"]?>">
    <?php foreach($arg["links"] as $link){ ?>
        <li class="nav-item"><a class="nav-link" href="<?=$base_url?>/<?=$link["route"]?>">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1"><?=$link["text"]?></span>
                </div>
            </a>           
        </li>    
    <?php } ?>
    </ul>
  <?php } ?>
</li>