<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>Galeria produktu | Leica CL</title>
    </head>

    <body>

        <div id="container-title">
            <img id="logo" src="logo/logo.svg" alt="logo Leica"> 
            <h1>Leica CL</h1>
        </div>

        <div id="main-photo">
            <?php
            if (isset($_GET['foto']) && !empty($_GET['foto'])) {

                $foto = filter_var($_GET['foto'], FILTER_SANITIZE_STRING);
                if (file_exists('images')) {
                    echo '<img src="images/' . $foto . '" />';
                }
            } else {
                echo '<img src="images/1.jpg" alt="aparat z przodu"/>';
            }
            ?>
        </div>

        <div id="thumbnails">
            <?php
            $fotki = scandir('images');

            foreach ($fotki as $nazwafotki) {

                if (strlen($nazwafotki) > 2 && $nazwafotki != 'Thumbs.db') {
                    echo '<figure>';
                    echo '<a href="galeria.php?foto=' . $nazwafotki . '"><img src="images/'
                    . $nazwafotki . '"/></a>';
                    echo '</figure>';
                }
            }
            ?>
        </div>

        <div id="main-photo2">
            <img class="image-gallery" src="images/1.jpg" alt="aparat front">
            <img class="image-gallery"  src="images/2.jpg" alt="aparat bok">
            <img class="image-gallery"  src="images/3.jpg" alt="aparat drugi bok">
            <img class="image-gallery"  src="images/4.jpg" alt="aparat tył">
            <img class="image-gallery"  src="images/5.jpg" alt="aparat góra">
            
            <!-- Buttons -->
                <img class="next" src="icons/right-arrow.svg" alt="strzałka w prawo">
                <img class="previous" src="icons/left-arrow.svg" alt="strzałka w lewo">

        </div>

        <div class="clearfix"></div>

        <!-- Scripts -->
        <script src="js/ImageSlider.js"></script>
    </body>

</html>
