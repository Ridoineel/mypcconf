

<?php
    try {
        // $host = "";
        // $dbname = "";
        // $user = "";
        // $password = "";

        // $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
        $db = new PDO('mysql:host=localhost;dbname=mypcconf', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch (Exception $e) {
        die("<strong>Error</strong>: " . $e->getMessage());
    }

?>
