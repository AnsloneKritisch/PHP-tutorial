<?php
session_start();
session_destroy();
echo'<script>location.href="03_login.php"</script>';
?>