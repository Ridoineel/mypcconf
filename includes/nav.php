<?php

    $DEBUG = true;

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $domaine_root = "https://"; 
    }else {
        $domaine_root = "http://";  
    }
    // Add domaine name
    $domaine_root .= $_SERVER['HTTP_HOST'];

    // For developpement mode
    if ($DEBUG) {
        $domaine_root .= "/mypcconf";
    }

?>

<div class="">
    <nav class="navbar navbar-dark navbar-expand-sm container-fluid">
        <a href="/" class="navbar-brand"><strong>MyPcConf</strong></a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="<?php echo $domaine_root ?>/tg" class="nav-link active">Add configuration</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $domaine_root ?>/tg/configsrender" class="nav-link">View all</a>
            </li>
            <li class="nav-item">
                <a href="https://ridoineel.alwaysdata.net" target="_blank" class="nav-link">About Dev</a>
            </li>

            <?php
                if (isset($_SESSION["connected"]) && $_SESSION["connected"] == true) {
            ?>
                <li class="nav-item">
                    <a href="<?php echo $domaine_root ?>/controlers/logout.php" class="nav-link" class="">Disconnect</a>
                </li>
            <?php
                }
            ?>
            
        </ul>
    </nav>
</div>