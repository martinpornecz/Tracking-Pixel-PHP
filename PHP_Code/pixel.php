<?php
date_default_timezone_set('Europe/Budapest'); /* Budapest liegt in derselben Zeitzone wie Wien, aber wenn es euch nicht gefällt könnt ihr es gerne ändern */
 
log_request();
 

$p = @$_REQUEST['p'];
if(!$p){
  die("The pixel is live!");
} else {
  // Quelle: https://stackoverflow.com/questions/3203354/php-script-to-render-a-single-transparent-pixel-png-or-gif/3203394
  header('Content-type: image/gif');
  header('Cache-Control: no-cache, no-store, must-revalidate');
  die(hex2bin('47494638396101000100900000ff000000000021f90405100000002c00000000010001000002020401003b'));
}
 

function log_request(){
 
  $logfile = "pixel.log";
 
  $p = @$_REQUEST['p'] ?: 'not_set';
  $date = new DateTime();
  $dateval =  $date->format('Y-m-d H:i:s'); // Datum+Zeit des Besuches
  $ip = @$_SERVER['HTTP_X_FORWARDED_FOR']; // IP-Adresse des Benutzers
  $agent = @$_SERVER['HTTP_USER_AGENT']; // User Agent
  $referer = @$_SERVER['HTTP_REFERER']; // Weitergeleitet von:
  
 
  $list = [$dateval, $p, $ip , $agent, $referer];
 
  $file = fopen($logfile,"a");
  fputcsv($file,$list);
  fclose($file);
}
?>