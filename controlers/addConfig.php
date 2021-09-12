
<?php
    session_start();

    $_SESSION["success"] = false;
    $_SESSIOn["message"] = "";

    //Connection to database
    include_once("../includes/dbConnection.php");

    /************* FUNCTIONS *************/
    function userExist($datas) {
        global $db;

        $req = $db->prepare("SELECT COUNT(id) as nb_id FROM configsinfos WHERE card_number=:card_number");
        $req->execute(array("card_number" => $datas["card_number"]));

        $result = $req->fetch()["nb_id"]; // 1 or 0

        $req->closeCursor();

        return $result;

    }

    function addInfos($datas) {
        global $db;

        $req = $db->prepare("INSERT INTO configsinfos(
                                card_number,
                                name,
                                first_name,
                                speciality,
                                machine,
                                hd,
                                ram,
                                cpu,
                                battery,
                                keyboard,
                                screen
                                )   
                                    VALUE(
                                :card_number,
                                :name,
                                :first_name,
                                :speciality,
                                :machine,
                                :hd,
                                :ram,
                                :cpu,
                                :battery,
                                :keyboard,
                                :screen
                                )");

        $req->execute($datas);

        $req->closeCursor();
        

    }

    function updateInfos($datas, $card_number) {
        global $db;

        $req = $db->prepare("UPDATE configsinfos SET 
            name = :name,
            first_name = :first_name,
            speciality = :speciality,
            machine = :machine,
            hd = :hd,
            ram = :ram,
            cpu = :cpu,
            battery = :battery,
            keyboard = :keyboard,
            screen = :screen

            WHERE card_number = :card_number
        ");

        $req->execute($datas);

        $req->closeCursor();

    }
    
    /*************************************/

    if (isset($_POST["card_number"]) and sizeof($_POST) == 11) {
        
        // Characters encoded
        foreach($_POST as $index => $value) {
            $_POST[$index] = htmlspecialchars($value);
        }

        $_SESSION["success"] == true;

        //if card_number exist, update
        //else add (create)

        if (userExist($_POST)) {
            try {
                updateInfos($_POST, $_POST["card_number"]);

                $_SESSION["message"] = "Modification réalisée avec succès";
            }catch (Exception $e){
                $_SESSION["success"] = false;
                $_SESSION["message"] = "La modification a échouée";
            }
        }else {
            try {
                addInfos($_POST);

                $_SESSION["message"] = "Ajout réalisé avec succès";
            }catch (Exception $e) {
                $_SESSION["success"] = false;
                $_SESSION["message"] = "L'ajout des informations a échouée";
            }
        }

        header("Location: ../tg/configsrender/#" . $_POST["card_number"]);
        exit();
    }

    // echo $_SESSION["success"] . "   " . $_SESSION["message"];

    header("Location: ../");
?>