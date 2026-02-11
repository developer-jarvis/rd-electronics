
<head>
    <?php
    $base_url = "http://localhost/rd-electronics/";
    
    // Detect current page for active menu
    $current_page = '';
    $current_file = basename($_SERVER['PHP_SELF']);
    switch ($current_file) {
        case 'index.php':
            $current_page = 'home';
            break;
        case 'about.php':
            $current_page = 'about';
            break;
        case 'services.php':
            $current_page = 'services';
            break;
        case 'projects.php':
            $current_page = 'projects';
            break;
        case 'career.php':
            $current_page = 'career';
            break;
        case 'contact.php':
            $current_page = 'contact';
            break;
        default:
            if (strpos($_SERVER['PHP_SELF'], '/services/') !== false) {
                $current_page = 'services';
            }
            break;
    }
    ?>
    <!-- Basic Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <!-- Cache Control for Development -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <!-- SEO Meta -->
    <title></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="RD Electronics" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $base_url; ?>assets/images/logo/logo.jpeg" />
    <link rel="apple-touch-icon" href="<?php echo $base_url; ?>assets/images/logo/logo.jpeg" />

    <!-- Bootstrap 5.3.3 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome (Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/rd-electronics.css" />
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/site.css" />
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/service-cards-new.css" />
</head>