<?php
    session_start();
    unset($_SESSION['nik']);
    echo "<script>location.href='../index.php' </script>";