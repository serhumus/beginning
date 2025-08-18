 <?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$date=date('H:i, jS F Y');
$outputstring="$date the button to Whatsapp was clicked.\n";
$fp = fopen('whatsappFired.txt', 'r+');
fwrite($fp, $outputstring);
fclose($fp);
?>
