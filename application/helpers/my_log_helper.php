<?php
if (!defined('MY_LOG')){
  define('MY_LOG',__DIR__.'/../../log/mylog.log');

}
function log_write($text){
  try
  {
    $fd=fopen(MY_LOG,'a');
    fwrite($fd,"$text\n");
    fclose($fd);
  } catch(Exception $e){

  }

}
