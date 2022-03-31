<?php
    session_start();
    define("HOST","localhost");
    define("USER","root");
    define("PASSWORD","");
    define("DATABASE","elib");
    define("BASEURL",'http://localhost/library/');
    
    date_default_timezone_set("Asia/kolkata");
    $cur_date_time = date('Y-m-d H:i:s');
    define('CURRENT_DATE_TIME',$cur_date_time);
?>