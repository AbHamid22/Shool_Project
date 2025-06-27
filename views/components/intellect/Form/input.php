<div class='form-group row'>        
    <?php 
    if($arg["type"]=="hidden" || $arg["type"]=="submit" || $arg["type"]=="reset"){         
            
    }else{ 
    echo  "<label for='{$arg["name"]}' class='col-sm-2 col-form-label'>{$arg["label"]}</label>";
    } 
    ?> 

    <div class='col-sm-10'>

    <?php if(isset($arg["table"])){ ?> 
         
        <select id='<?=$arg["name"]?>' name='<?=$arg["name"]?>' class='form-select' style='width:100%'>";
          
          <?php
          $result=$db->query("select $id,$name from {$tx}{$arg["table"]}");
          while(list($id,$name)=$result->fetch_row()){          
            if($id==$arg["value"]){
              echo "<option value='$id' selected>$name</option>";  
            }else{
              echo "<option value='$id'>$name</option>";  
            }        
          }?>

          </select>

    <?php  

      }else{//Input tag

            if($arg["type"]=="radio" || $arg["type"]=="checkbox"){
               $css_class="form-check-input";
            }            
        
            if($arg["type"]=="textarea"){

              echo "<textarea class='$css_class' name='{$arg["name"]}' id='{$arg["name"]}' placeholder='{$arg["placeholder"]}' {$arg["required"]}>{$arg["value"]}</textarea>";        
            
            }elseif($arg["type"]=="file"){

              echo  "<input type='{$arg["type"]}' class='$css_class' name='{$arg["name"]}' id='{$arg["name"]}' value='{$arg["value"]}' placeholder='{$arg["placeholder"]}' {$arg["required"]} {$arg["checked"]}>";        
            
              if($arg["value"]!=""){
                 echo "<img src='{$base_url}/img/{$arg["value"]}' width='200' />";
               }       
            
            }else if($arg["type"]=="submit"){
               echo "<input type='{$arg["type"]}' class='$css_class' name='{$arg["name"]}' id='{$arg["name"]}' value='{$arg["value"]}' placeholder='{$arg["placeholder"]}' {$arg["required"]} {$arg["checked"]}>";        
            }else{
              echo "<input type='{$arg["type"]}' class='$css_class' name='{$arg["name"]}' id='{$arg["name"]}' value='{$arg["value"]}' placeholder='{$arg["placeholder"]}' {$arg["required"]} {$arg["checked"]}>"; 
            }
        }
     ?>
 
</div>
</div>