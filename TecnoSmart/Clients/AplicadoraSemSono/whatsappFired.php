<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require('header.php'); 
    @$fp = fopen("whatsappFired.txt", 'rb');
    while (!feof($fp)) {
		$order= fgets($fp);
		echo htmlspecialchars($order)."<br />";
}
    require('footer.php'); 
?>
