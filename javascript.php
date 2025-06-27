<?php
    $folder="js";
    foreach (glob("{$folder}/*.library.js") as $filename)
    {
        echo "<script src='$base_url/$filename'></script>";
    }

    foreach (glob("{$folder}/*.helper.js") as $filename)
    {
        echo "<script src='$base_url/$filename'></script>";
    }
  ?>