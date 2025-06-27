<?php
$btn="";
if(isset($arg["create"])){
    $btn=" <a class='btn btn-success' href='$base_url/{$arg["route"]}'>{$arg["create"]}</a>";
}
if(isset($arg["manage"])){
    $btn=" <a class='btn btn-success' href='$base_url/{$arg["route"]}'>{$arg["manage"]}</a>";
}

$html=<<<HTML
<div class="col-lg-col">
   <div class='card'>        
       <div class='card-header d-flex justify-content-between'>
          <div class='flex-fill'>{$arg["title"]}</div>
          $btn
       </div>
        <div class='card-body'>
HTML;
?>