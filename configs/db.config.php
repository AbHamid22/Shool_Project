<?php   
   //Remote
   
    // define("SERVER","localhost");
    // define("USER","hamid");
    // define("DATABASE","wdpf62_hamid");
    // define("PASSWORD","2561@;;");

   //Local
   
    define("SERVER","localhost");
    define("USER","root");
    define("DATABASE","test");
    define("PASSWORD","");

    $db=new mysqli(SERVER,USER,PASSWORD,DATABASE);
    $tx="core_";
    

?>