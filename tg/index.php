<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("../includes/head.php"); ?>
        <title>Mypconf</title>
    </head>
    <body>
    
        <div id="page_body" class="">
            <?php 
                include("../includes/nav.php");

                if ((isset($_SESSION["connected"]) && $_SESSION["connected"])) {
                    include("../includes/form.php");
                }else{
                    include("../includes/authentificationForm.php");
                }
            
            ?>
            
        </div>
        
    </body>
</html>