<?php

    if (!isset($_SESSION["connected"]) || $_SESSION["connected"] == false) {
        header("Location: /");
    }
?>