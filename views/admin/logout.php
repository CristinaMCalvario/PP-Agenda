<?php
session_start();
session_destroy();
print "<script>window.location='loginAdmin.php';</script>";
?>