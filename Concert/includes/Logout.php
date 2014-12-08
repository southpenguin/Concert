<?php
    session_start();
    session_destroy();
 ?>
 Page will be redirected to login page in 2 seconds.<br>
<script type="text/javascript"> 
    document.location = "/Concert/Start.php";
</script>