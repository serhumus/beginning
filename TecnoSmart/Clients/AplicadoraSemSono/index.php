<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('header.php'); 
require('contentIndex.html');
require('footer.php'); 

echo "
<script>
    window.addEventListener('load', () => {
        if(typeof changerRandomImg === 'function') {
            setInterval(changerRandomImg, 3500);
        }
    });
</script>
";
?>
