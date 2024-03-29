<?php 

$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'PH Learning';?></title>
    <link rel="icon" type="image/x-icon" href="Images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script defer type='text/javascript' src='scripts.js'></script>
</head>

<body>
    
    <div class="navigation" id="main-nav">
        <div class="logo">
            <a href="index.php" class="logo">Company</a>
        </div>
        <a href="javascript:void(0);" class="nav-icon" onclick="openNav()">
            <i class="fa fa-bars"></i>
        </a>
        <div class="nav-links" id="topNav">
            <a href="index.php" class="<?= ($activePage == 'index') ? 'active':'nav-link'; ?>">Home</a>
            <a href="" class="<?= ($activePage == 'services') ? 'active':'nav-link'; ?>">Services</a>
            <a href="courses.php" class="<?= ($activePage == 'courses') ? 'active':'nav-link'; ?>">Courses & Workshops</a>
            <a href="portfolio.php" class="<?= ($activePage == 'portfolio') ? 'active':'nav-link'; ?>">Portfolio</a>
            <a href="" class="<?= ($activePage == 'about') ? 'active':'nav-link'; ?>">About</a>
            <a href="contact.php" class="<?= ($activePage == 'contact') ? 'active':'nav-link'; ?>">Contact</a>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php" class="<?= ($activePage == 'index') ? 'active':''; ?>">Home</a>
            <a href="" class="<?= ($activePage == 'services') ? 'active':''; ?>">Services</a>
            <a href="courses.php" class="<?= ($activePage == 'courses') ? 'active':''; ?>">Courses & Workshops</a>
            <a href="portfolio.php" class="<?= ($activePage == 'portfolio') ? 'active':''; ?>">Portfolio</a>
            <a href="" class="<?= ($activePage == 'about') ? 'active':''; ?>">About</a>
            <a href="contact.php" class="<?= ($activePage == 'contact') ? 'active':''; ?>">Contact</a>
        </div>
    </div>
