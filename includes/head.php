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
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $domaine_root ?>/publics/bootstrap-4.5.0-dist/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo $domaine_root ?>/publics/css/style.css">
