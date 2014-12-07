<?php
    session_start();
    session_destroy();
 ?>
 Page will be redirected to login page in 2 seconds.<br>
 <script type="text/javascript"> 
            setTimeout(function(){document.location = "/Concert/entry.php"}, 2000);
        </script>