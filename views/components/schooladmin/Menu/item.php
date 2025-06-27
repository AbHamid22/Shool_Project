
<li class="nav-item">
        <a data-bs-toggle="<?=isset($arg["links"])?"collapse":"{$arg["route"]}"?>" href="<?=$arg["route"]?>">
            <i class="<?=$arg["icon"]?>"></i>
            <p><?=$arg["name"]?></p>
            <span class="caret"></span>
        </a>

    <?php if(isset($arg["links"])){ ?>
        <div class="collapse" id="<?=$arg["id"]?>">
            <ul class="nav nav-collapse">
             <?php foreach($arg["links"] as $link){ ?>
                <li>
                    <a href="<?=$base_url?>/<?=$link["route"]?>">
                        <span class="sub-item"><?=$link["text"]?></span>
                    </a>
                </li>
              <?php } ?>
            </ul>
        </div>
    <?php } ?>
 </li>
