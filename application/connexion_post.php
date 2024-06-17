<?php
    $user = false;
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $user = true;
    }
    exit();
?>