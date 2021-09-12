# mypcconf

**Renseigment de matériels utilisés par les éleves pour le cours d'INF113 (CIC/S2)**

Avant toute utilisation:
_______________________

Créer une base de donnée **"mypcconf"** et ajouter la table **"configsinfos"** avec le schéma si-dessous:

_configsinfos_ (

    id int primary key auto_increment,
    card_number int primary key,
    name varchar(256),
    first_name varchar(256),
    speciality varchar(256),
    machine varchar(256),
    hd int,
    ram int,
    cpu int,
    battery varchar(256),
    keyboard varchar(256),
    screen varchar(256)
  
)

Dans _includes/bdConnection.php_ se trouve les configurations pour la connexion à la base de donnée. 
Mettre à jour cette partie pour pouvoir accéder à la base de donnée.

En mode Developpement, la varaible **$DEBUG** dans _/includes/nav.php_ et _/includes/head.php_ est à **true**, 
donc doit être mis à **false** avant la mise en ligne.
