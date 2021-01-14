<?php
if (file_exists('source.xml')) {
    $xml = simplexml_load_file('source.xml');
} else {
    exit('Echec lors de l\'ouverture du fichier source.xml.');
}
$showHome = false;
$showUs = false ; 
$showClient = false ;
$showContact = false ;


if(isset($_GET["page"]) && $_GET["page"] == "accueil"){
    $showHome = true ;
}
if(isset($_GET["page"]) && $_GET["page"] == "quiSommesNous"){
    $showUs = true ;
}
if(isset($_GET["page"]) && $_GET["page"] == "nosClients"){
    $showClient = true ;
}
if(isset($_GET["page"]) && $_GET["page"] == "contact"){
    $showContact = true ;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ORCODO</title>
</head>

<body>
    <div class="bg contentCenter">
        <a type="button" href="index.php?page=accueil"><h2><?php echo $xml->page[0]->menu; ?></h2></a>
        <a type="button" href="index.php?page=quiSommesNous"><h2><?php echo $xml->page[1]->menu; ?></h2></a>
        <a type="button" href="index.php?page=nosClients"><h2><?php echo $xml->page[2]->menu; ?></h2></a>
        <a type="button" href="index.php?page=contact"><h2><?php echo $xml->page[3]->menu; ?></h2></a>
    </div>
    <?php if ($showHome == true) { ?>
        <div class="bg h1">
            <?php
            echo $xml->page[0]->content;
            ?>
        </div>
    <?php } ?>
    <?php if ($showUs == true) { ?>
        <div class="bg h1">
            <?php
            echo $xml->page[1]->content;
            ?>
        </div>
    <?php } ?>
    <?php if ($showClient == true) { ?>
        <div class="bg h1">
            <?php
            echo $xml->page[2]->content;
            ?>
        </div>
    <?php } ?>
    <?php if ($showContact == true) { ?>
        <div class="bg h1">
            <?php
            echo $xml->page[3]->content;
            ?>
        </div>
    <?php } ?>
</body>

</html>