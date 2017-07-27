<?php
    /**
     * HEADER TEMPLATE
    **/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Take a look at my code. Any feedback is welcomed :) -->
    <meta charset="utf-8">
    <meta name="author" content="Mark Maddocks">
    <meta name="description" content="Award winning Australian Architects">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Favicon -->
    <?php echo "<title>$pageTitle</title>" ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/css/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/css/style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400" rel="stylesheet">

    <!-- <script> Add .hidden to body if wanting to hide until page loaded
        window.onload = function() {
            //alert("Page has loaded");
            document.querySelector(".fade-in").classList.remove("hidden");
            document.querySelector(".fade-in").classList.add("show");
        }
    </script> -->
</head>

<body class="fade-in">

    <div id="overflow-wrapper"><!-- wrapping document for mobile nav (prevents document scroll) -->

        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo BASE_URL;?>">
                        <img id="nav-logo" src="<?php echo BASE_URL;?>/images/logo.svg" width="61" height="30" alt="Logo of Australian Design Architects" >
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                </div><!-- Closing .navbar-header -->

                <!-- The navigation links for toggling -->
                <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo BASE_URL;?>" class="navbar-item <?php echo ($pageID == "home" ? "active" : "");?>">Home</a></li>
                        <li class="dropdown">
                            <a href="projects.php" class="dropdown-toggle navbar-item <?php echo ($pageID == "projects" ? "active" : "");?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo BASE_URL;?>/projects.php">All Projects</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo BASE_URL;?>/projects/project-1.php">Project 1</a></li>
                                <li><a href="<?php echo BASE_URL;?>/projects/project-2.php">Project 2</a></li>
                                <li><a href="<?php echo BASE_URL;?>/projects/project-3.php">Project 3</a></li>
                                <li><a href="<?php echo BASE_URL;?>/projects/project-4.php">Project 4</a></li>
                                <li role="separator" class="divider visible-xs-block"></li><!-- only for mobile -->
                            </ul>
                        </li>
                        <li><a href="<?php echo BASE_URL;?>/strategy.php" class="navbar-item <?php echo ($pageID == "strategy" ? "active" : "");?>">Strategy</a></li>
                        <li><a href="<?php echo BASE_URL;?>/about.php" class="navbar-item <?php echo ($pageID == "about" ? "active" : "");?>">About</a></li>
                        <li><a href="<?php echo BASE_URL;?>/contact.php" class="navbar-item <?php echo ($pageID == "contact" ? "active" : "");?>">Contact</a></li>
                    </ul>
                </div><!-- closing .navbar-collapse -->

            </div><!-- closing .container-fluid -->
        </nav>

    </header>
