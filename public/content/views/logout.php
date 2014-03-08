<?php
    unset($_SESSION["FLIRT_USER"]);
    header("Location: ".FULL_URL."index");
?>