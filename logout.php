<?php
    session_start();
    session_destroy();
    
    echo "<script>
    window.alert('Anda telah Logout!');
    window.location.href='login.php';
    </script>";
?>