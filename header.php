<!DOCTYPE html>
    <html lang="en">

        <head>
        <meta charset="utf-8">
        <title>TheEvent </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <base href="<?php echo DOMAIN;?>">

        <!-- Favicons -->
        <!-- <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="src/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="vendor/toastr/toastr.min.css">

        <!-- Libraries CSS Files -->
        <link href="src/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="src/lib/animate/animate.min.css" rel="stylesheet">
        <link href="src/lib/venobox/venobox.css" rel="stylesheet">
        <link href="src/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="src/lib/jquery-ui/jquery-ui.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="src/css/style.css" rel="stylesheet">
        <!-- website custom style -->
        <link href="src/css/website.css" rel="stylesheet">

    
        </head>

    <body>
    <?php
        if($currentPage != 'home'){
            echo "<div id='navbar_background'></div>";
        }
    ?>
    
   