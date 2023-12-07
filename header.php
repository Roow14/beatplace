<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
        <meta charset="utf-8" />
        <title><?php echo $title;?></title>

        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo $NomeDominio;?>/static/<?php echo $favicon;?>" type="image/x-icon" />
        
        <!-- style -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link async="" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet"> -->
        <link rel="stylesheet" href="<?php echo $NomeDominio;?>/style.css" />
        <link rel="stylesheet" href="<?php echo $NomeDominio;?>/custom.css" />
        <!-- banner -->
        <link rel="stylesheet" href="<?php echo $NomeDominio;?>/static/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo $NomeDominio;?>/static/owl.theme.default.min.css">
        <script src="https://kit.fontawesome.com/1834f96748.js" crossorigin="anonymous"></script>

        <!-- SEO -->
        <meta name="description" content="<?php echo $description;?>">
        <meta name="keywords" content="<?php echo $keywords;?>">
        <?php echo $StatusGoogle;?>

        <meta name="Author" content="Forecast Web - forecastweb.com.br">
        <link rel="canonical" href="<?php echo $NomeDominio;?>"/>

        <!-- facebook -->
        <meta property="og:locale" content="pt_BR"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php echo $title;?>" />
        <meta property="og:description" content="<?php echo $description;?>" />
        <meta property="og:NomeDominio" content="<?php echo $NomeDominio;?>"/>
        <meta property="og:image" content="<?php echo $url;?>static/<?php echo $ogimage;?>"/>
        <meta property="og:image:alt" content="<?php echo $ogalt;?>"/>
        <meta property="og:site_name" content="<?php echo $title;?>"/>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $TagManager;?>"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', '<?php echo $TagManager;?>');
        </script>

        <!-- google recaptcha v3 -->
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $recaptcha_site;?>"></script>
    </head>

    <body>    
        <?php include 'nav.php';?>