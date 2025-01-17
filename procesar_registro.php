<?php 
    if(isset($_POST["email"]) && isset($_POST["pass"])) {
        saveEventsToJson($_POST["nombre"], $_POST["email"], $_POST["pass"]);
    }
?>