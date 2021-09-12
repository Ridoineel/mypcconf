<?php
    session_start();

    //Connection status redirection
    include("../../includes/conRedirection.php");
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("../../includes/head.php"); ?>
        <title>Mypcconf</title>
    </head>
    <body>
    
        <div id="page_body">
            <?php
                include("../../includes/nav.php");
            ?>
            <div class="col-12 mt-5">
                <h3 class="col-10 container mint-box">
                    LISTE DES MATERIELS UTILISEES POUR LE COURS DE INF113
                </h3>
                
                <form action="./" method="GET" class="col-12 col-sm-7 col-md-3 mb-2">
                    <label for="sortby">Trier par: </label>
                    <select name="sortby" id="sortby" class="form-control">
                        <option value="id">Id</option>
                        <option value="card_number">Numéro de carte</option>
                        <option value="name">Nom</option>
                        <option value="speciality">Spécialité</option>
                        <option value="machine">Machine</option>
                        <option value="hd">HD</option>
                        <option value="ram">RAM</option>
                        <option value="cpu">CPU</option>
                        <option value="battery">Batterie</option>
                        <option value="keyboard">Clavier</option>
                        <option value="screen">Ecran</option>
                    </select>
                    <input type="submit" class="btn btn-secondary mt-1" value="Valider">
                </form>

                <?php
                    //Connetion to database
                    include_once("../../includes/dbConnection.php");

                    /* <<Sort By>> value */
                    $valuesList = ["id", 
                                    "card_number",
                                    "name",
                                    "speciality",
                                    "machine",
                                    "hd",
                                    "ram",
                                    "cpu",
                                    "battery",
                                    "keyboard",
                                    "screen"
                                ];
                                
                    $default = "id";

                    if (isset($_GET["sortby"]) && in_array($_GET["sortby"], $valuesList)) {
                        $sortby = $_GET["sortby"];
                    }else {
                        $sortby = $default;
                        
                    }
                    /*********************/

                    $req = $db->query("SELECT * FROM configsinfos ORDER BY $sortby");

                    echo "<table class='col table_dark--merge mb-3'>";

                    //Table Head
                    echo "<thead>
                            <tr>
                                <th>id</th>
                                <th>Numéro de carte</th>
                                <th>Nom</th>
                                <th>Prénom(s)</th>
                                <th>Spécialité</th>
                                <th>Machine</th>
                                <th>HD (Go)</th>
                                <th>RAM (Go)</th>
                                <th>CPU (Mhz)</th>
                                <th>Batterie</th>
                                <th>Clavier</th>
                                <th>Ecran</th>
                            </tr>
                        </thead>";
                        
                    echo "<tbody>";

                    while ($datas = $req->fetch()) {
                        //Configurations Render

                        echo "<tr id='#" . $datas["id"] . "'>
                                <td>" . $datas["id"] . "</td>
                                <td>" . $datas["card_number"] . "</td>
                                <td>" . $datas["name"] . "</td>
                                <td>" . $datas["first_name"] . "</td>
                                <td>" . $datas["speciality"] . "</td>
                                <td>" . $datas["machine"] . "</td>
                                <td>" . $datas["hd"] . "</td>
                                <td>" . $datas["ram"] . "</td>
                                <td>" . $datas["cpu"] . "</td>
                                <td>" . $datas["battery"] . "</td>
                                <td>" . $datas["keyboard"] . "</td>
                                <td>" . $datas["screen"] . "</td>
                        </tr>";

                        
                        
                    }
                    
                    echo "</tbody>
                        </table>";

                    $req->closeCursor();

                ?>

                <div class="row mb-2">
                    <button class="btn btn-secondary col-9 col-md-4 container" onclick="print()">Télécharger</button>
                </div>
            </div>
           

        </div>
        
    </body>
</html>

