<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo '<script>
            alert("Você precisa se logar primeiro"); 
            window.location.href = "index.php";
          </script>';
}

include("html\home.html")
?>