<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Mon Site' : 'Mon Site'; ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer > </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <a href="index.php">
            <img src="img/Chrysea_logo.png" alt="Logo de Chrysea" class="logo">
        </a>
        <nav class="menu_nav">
            <div class="burger" id="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="index.php" class="a_header">Accueil</a></li>
                <li><a href="cv.php" class="a_header">CV</a></li>
                <li>
                    <a href="Portfolio.php" class="a_header">Portfolio</a>
                    <ul class="sub-menu">
                        <li><a href="UIDesign.php" class="a_header">UI Design</a></li>
                        <li><a href="architecture.php" class="a_header">Architecture</a></li>
                        <li><a href="Corseterie.php" class="a_header">Corseterie</a></li>
                        <li><a href="Photographie.php" class="a_header">Photographie</a></li>
                    </ul>
                </li>
                <li><a href="Contact.php" class="a_header">Contact</a></li>
            </ul>
        </nav>
        <a href="tel:+33649749611" class="a_tel">06 49 74 96 11</a>
    </header>
    

