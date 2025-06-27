<?php
    $folder="css";
    foreach (glob("{$folder}/*.style.css") as $filename)
    {
        echo "<link rel='stylesheet' href='$base_url/$filename' />";
    }
  ?>