<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require('header.php'); 
    require('contentIndex.html');
    require('footer.php'); 
    echo("
        <script>
            window.onload(setInterval(changerRandomImg,3500)) 
        </script>
        ")
?>
