<?php
     session_start();
     ini_set('display_errors', 0);
     error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
     $connect = mysql_connect('smootharrangement.de', 'developer', 'support');
     mysql_select_db('smaccp', $connect);


?>