<div class='card'>      
    <?php if(isset($arg["title"])){?>  
       <div class='card-header d-flex justify-content-between <?=$arg["class-head"]?>'>        
          
            <h6 class="mb-0 fw-bolder fs-2 <?=$arg["class-title"]?>" ><?=$arg["title"]?></h6>          

           <?php if(isset($arg["menu"])){?>

            <div class="dropdown font-sans-serif btn-reveal-trigger">               
               <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button"
                  id="dropdown-shopping-cart-bar" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true"
                  aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
               <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-shopping-cart-bar">

                  <?php
                    foreach($arg["menu"] as $menu){

                     if($menu["text"]!=""){
                   ?>

                  <a class="dropdown-item" href="#!"><?=$menu["text"]?></a>

                  <?php
                     }else{
                  ?>

                     <div class="dropdown-divider"></div>

                  <?php
                     }
               
               } ?>                   
               
               </div>
            </div>  
            <?php } ?>      
       </div>
      <?php } ?>
        <div class='card-body <?=$arg["class-body"]?>'>