<?php
$message = $_GET{"message"};
$time  = time();


$fp = fopen("data.txt","a");
flock($fp,LOCK_EX);
fwrite($fp,$message."\t".$time."\n");
flock($fp,LOCK_UN);
fclose($fp);

header("Location: chat.php");
