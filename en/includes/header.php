<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T48332M');</script>
    <!-- End Google Tag Manager -->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="<?php echo $metaTitle ?>">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="Death Metal, Metal Mexicano, Grindcore, Puerto Vallarta ">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Axl Sánchez">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;900&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/235ca587ad.js" crossorigin="anonymous"></script>
	<script src="../js/main.js" defer type="text/javascript"></script>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T48332M"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
	<header>
		<nav class="navigation" id="navigation">
            <div class="container">
                <div class="mobile-navigation">
                    <a class="logo" href="index.php">
                        <img class="color" src="../img/logo-rotten-pork-red.png">
                        <img class="white" src="../img/logo-rotten-pork-white.png">
                    </a>
                    <div class="dropdown lang-dropdown d-lg-none">
                        <button class="btn btn-sm dropdown-toggle" type="button" id="lang-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lang</button>
                        <div class="dropdown-menu" aria-labelledby="lang-dropdown">
                            <a class="dropdown-item" href="index.php">English</a>
                            <a class="dropdown-item" href="../index.php">Spanish</a>
                        </div>
                    </div>
                    <button type="button" class="btn d-lg-none" id="show-sidebar"><i class="fa fa-bars fa-fw"></i></button>
                </div>
                <div class="sidebar">
                    <div class="sidebar-top">
                        <span>Rotten Pork Presskit digital</span>
                        <button type="button" class="btn btn-sm" id="hide-sidebar"><i class="fa fa-times fa-fw"></i></button>
                    </div>
                    <ul class="nav main-navigation">
                        <li class="nav-item">
                            <a class="nav-link hover-red <php? echo $currentPage == Home ? 'active' : '' ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-red <php? echo $currentPage == Bio ? 'active' : '' ?>" href="bio.php">Bio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-red <php? echo $currentPage == Music ? 'active' : '' ?>" href="discografia.php">Music</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-red <php? echo $currentPage == Contact ? 'active' : '' ?>" href="contacto.php">Contact</a>
                        </li>  
                    </ul>
                    <div class="dropdown lang-dropdown d-none d-lg-block">
                        <button class="btn btn-sm dropdown-toggle" type="button" id="lang-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lang</button>
                        <div class="dropdown-menu" aria-labelledby="lang-dropdown">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">Spanish</a>
                        </div>
                    </div>
                    <div class="sidebar-bottom">
                        2020 Rotten Pork &copy;
                    </div>
                </div>
            </div>
        </nav>