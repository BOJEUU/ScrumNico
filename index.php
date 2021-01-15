<?php
if (file_exists('source.xml')) {
    $xml = simplexml_load_file('source.xml');
} else {
    exit('Echec lors de l\'ouverture du fichier source.xml.');
}

$show = 0 ;

if (isset($_GET["page"]) && $_GET["page"] == "accueil") {
    $show= 0;
}
if (isset($_GET["page"]) && $_GET["page"] == "quiSommesNous") {
    $show = 1;
}
if (isset($_GET["page"]) && $_GET["page"] == "nosClients") {
    $show = 2;
}
if (isset($_GET["page"]) && $_GET["page"] == "contact") {
    $show = 3;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ORCODO TEST NICO</title>
</head>

<body>
    <div class="bg contentCenter">
        <a type="button" href="1.html">
            <h2><?php echo $xml->page[0]->menu; ?></h2>
        </a>
        <a type="button" href="2.html">
            <h2><?php echo $xml->page[1]->menu; ?></h2>
        </a>
        <a type="button" href="3.html">
            <h2><?php echo $xml->page[2]->menu; ?></h2>
        </a>
        <a type="button" href="4.html">
            <h2><?php echo $xml->page[3]->menu; ?></h2>
        </a>
    </div>
    <?php if(isset($show)){
         echo $xml->page[$show]->content;
    }
    ?>
</body>

</html>