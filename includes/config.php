<?php

    define("PROJECT_NAME", "e-Shopping");

    $connect = mysqli_connect("localhost", "root", "", "e_shopping") or die("db not connected");

    function redirect_to($page) {
        echo"<script>window.open('$page', '_self')</script>";
    }
?>