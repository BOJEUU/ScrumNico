<?php
if (file_exists('source.xml')) {
    $xml = simplexml_load_file('source.xml');
} else {
    exit('Echec lors de l\'ouverture du fichier source.xml.');
}

$show = 0;

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  
    <title>ORCODO TEST NICO</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand  text-light" href="#">Maçonnerie Ocordo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-light" aria-current="page" href="1.html"><?php echo $xml->page[0]->menu; ?></a>
                    <a class="nav-link text-light" href="2.html"><?php echo $xml->page[1]->menu; ?></a>
                    <a class="nav-link text-light" href="3.html"><?php echo $xml->page[2]->menu; ?></a>
                    <a class="nav-link text-light" href="4.html"><?php echo $xml->page[3]->menu; ?></a>
                </div>
            </div>
        </div>
    </nav>



   
    <?php if(isset($show)){
         echo $xml->page[$show]->content;
    }
    ?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>