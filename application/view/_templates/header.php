<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Casa</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
        <link href="<?php echo URL; ?>css/switch.css" rel="stylesheet">
        <link href="<?php echo URL; ?>css/ionicons.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">       
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700" rel="stylesheet">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <?php if (!isset($_SESSION['username'])) { ?>
            <ul class="navigation" id="mobile-nav">
                <li class="nav-item"><a href="<?php echo URL; ?>post">Post a Listing</a></li>
                <li class="nav-item"><a href="<?php echo URL; ?>home/showListings">Browse Listings</a></li>
                <li class="nav-item"><a href="#signup" onclick="document.getElementById('popup-signup').style.display = 'block'">Sign Up</a></li>
                <li class="nav-item"><a href="#login" onclick="document.getElementById('popup-login').style.display = 'block'">Log In</a></li>
            </ul>
            <input type="checkbox" id="nav-trigger" class="nav-trigger" />
            <label for="nav-trigger"></label>
            <div class="site-wrap">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo URL; ?>"><img src="<?php echo URL; ?>img/casa-logo.png" alt="casa-logo" width="100px" height="45px"></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <form method="POST" action="<?php echo URL; ?>home/search" class="navbar-form navbar-left" name="search_form" onsubmit="return validateSearchInput()" id="desktop-search-bar">
                            <div class="inner-addon left-addon">
                                <i class="ionicons ion-ios-search ionicons-search"></i>
                                <input type="text" class="form-control header-search-form" name="search_value" value="<?php echo isset($_SESSION["search_term"]) ? $_SESSION["search_term"] : ""; ?>" placeholder="Search by city, zipcode, rental type.">
                            </div>
                            <button type="submit" class="btn btn-default header-search-btn" name="submit_search">Search</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right" id="desktop-nav">
                            <li><a href="<?php echo URL; ?>post" class="header-post-listing-btn">Post a Listing</a></li>
                            <li><a href="<?php echo URL; ?>home/showListings">Browse Listings</a></li>
                            <li><a href="#signup" onclick="document.getElementById('popup-signup').style.display = 'block'">Sign Up</a></li>
                            <li><a href="#login" onclick="document.getElementById('popup-login').style.display = 'block'">Log In</a></li>
                        </ul>
                    </div>
                    <form method="POST" action="<?php echo URL; ?>home/search" class="navbar-form navbar-left" name="search_form" onsubmit="return validateSearchInput()" id="mobile-search-bar">
                        <div class="inner-addon left-addon">
                            <i class="ionicons ion-ios-search ionicons-search"></i>
                            <input type="text" class="form-control header-search-form" name="search_value" value="<?php echo isset($_SESSION["search_term"]) ? $_SESSION["search_term"] : ""; ?>" placeholder="Search by city, zipcode, etc.">
                        </div>
                        <button type="submit" class="btn btn-default header-search-btn" name="submit_search">Search</button>
                    </form>
                </nav>
            <?php } else { ?>
                <ul class="navigation" id="mobile-nav">
                    <li class="nav-item" style="padding: 15px 22px; color: #fff;"><span class="header-user"><?php if (isset($_SESSION["username"])) echo ($_SESSION["username"]); ?></span><i class="ionicons ion-ios-contact-outline"></i></a></li>
                    <li class="nav-item"><a href="<?php echo URL; ?>post">Post a Listing</a></li>
                    <li class="nav-item"><a href="<?php echo URL; ?>home/showListings">Browse Listings</a></li>
                    <li class="nav-item"><a href="<?php echo URL; ?>manage">Manage Listings</a></li>
                    <?php if ($_SESSION['isStudent'] == 1) { ?> 
                        <li class="nav-item"><a href="<?php echo URL; ?>favorites">Favorites</a></li> 
                    <?php } ?>
                    <li class="nav-item"><a href="<?php echo URL; ?>account">Edit Account</a></li>
                    <li class="nav-item"><a href="<?php echo URL; ?>logout">Logout</a></li>
                </ul>
                <input type="checkbox" id="nav-trigger" class="nav-trigger" />
                <label for="nav-trigger"></label>
                <div class="site-wrap">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo URL; ?>"><img src="<?php echo URL; ?>img/casa-logo.png" alt="casa-logo" width="100px" height="45px"></a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <form action="<?php echo URL; ?>home/search" class="navbar-form navbar-left" method="POST">
                                <div class="inner-addon left-addon">
                                    <i class="ionicons ion-ios-search ionicons-search"></i>
                                    <input type="text" class="form-control header-search-form" name="search_value" value="<?php echo isset($_SESSION["search_term"]) ? $_SESSION["search_term"] : ""; ?>" placeholder="Search by city, zipcode, rental type.">
                                </div>
                                <button type="submit" class="btn btn-default header-search-btn" name="submit_search">Search</button>
                            </form>
                            <ul class="nav navbar-nav navbar-right" id="desktop-nav">
                                <li><a href="<?php echo URL; ?>post" class="header-post-listing-btn">Post a Listing</a></li>
                                <li><a href="<?php echo URL; ?>home/showListings">Browse Listings</a></li>
                                <li class="dropdown header-user-container">
                                    <a href="#" class="dropdown-toggle ionicons-user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="header-user"><?php if (isset($_SESSION["username"])) echo ($_SESSION["username"]); ?></span><i class="ionicons ion-ios-contact-outline"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo URL; ?>manage">Manage Listings</a></li>
                                        <?php if ($_SESSION['isStudent'] == 1) { ?> <li><a href="<?php echo URL; ?>favorites">Favorites</a></li> <?php } ?>
                                        <li><a href="<?php echo URL; ?>account">Edit Account</a></li>
                                        <li><a href="<?php echo URL; ?>logout">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <form method="POST" action="<?php echo URL; ?>home/search" class="navbar-form navbar-left" name="search_form" onsubmit="return validateSearchInput()"  id="mobile-search-bar">
                            <div class="inner-addon left-addon">
                                <i class="ionicons ion-ios-search ionicons-search"></i>
                                <input type="text" class="form-control header-search-form" name="search_value" value="<?php echo isset($_SESSION["search_term"]) ? $_SESSION["search_term"] : ""; ?>" placeholder="Search by city, zipcode, etc.">
                            </div>
                            <button type="submit" class="btn btn-default header-search-btn" name="submit_search">Search</button>
                        </form>
                    </nav>
                <?php } ?>

