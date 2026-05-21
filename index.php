<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Portfolio de Abigaëlle Thubert, élève en 2ème année de BTS SIO option SLAM">
        <title>Portfolio d'Abigaëlle Thubert</title>
        <link rel="icon" type="image/png" href="assets/images/logo.png">

        <!-- stylesheets -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
    </head>
    
    <body>
        <div id="myModal">
            <img class="modal-content" id="bigimg">
        </div>

        <?php
        if (!isset($_REQUEST['uc']))
        {
            $_REQUEST['uc'] = 'base';
        }
        $uc = htmlspecialchars($_REQUEST['uc']);
        switch ($uc)
        {
            case 'base':
                include 'vues/nav.html';
        ?>
                <div class="main-content">
                    <?php include 'vues/base.php'; ?>
                </div>
        <?php
                break;
            case 'details':
                include 'vues/retour.html';
        ?>
                <div class="main-content">
                    <?php include 'controleurs/controleurDetails.php'; ?>
                </div>
        <?php
                break;
        }
        ?>

        <script src="assets/js/script.js"></script>        
        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
        <script>
            if (window.matchMedia('(max-width: 600px)').matches) {
                // écran <= 600px
                const swiper = new Swiper('.swiper', {
                    loop: true,
                    spaceBetween: 16,
                    grabCursor: true,
                    navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                    },
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                });
            } else {
                const swiper = new Swiper('.swiper', {
                    slidesPerView: 4,
                    spaceBetween: 16,
                    loop: true,
                    keyboard: {
                        enabled: true,
                    },
                    navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                    },
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                });
            }
        </script>
    </body>
</html>