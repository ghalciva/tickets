<?php

if(isset($_POST) && !empty($_POST)){
    $username = $_POST ['username'];
    $password = $_POST ['password'];

    if($username == 'admin' && $password == 'admin'){
        ?>
        {
            "success":true,
            "secret": "only admin"
        }
        <?php
    }else{
        ?>
    {
        "success":false,
        "message": "invalid credentials"
    }
        <?php
    }else{
        ?>
    {
        "success":false,
        "message": "only post access"
    }
    <?php
    }
?>