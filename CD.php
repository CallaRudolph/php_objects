<?php

    class CD
    {
        public $title;
        public $artist;
        public $cover_art;
        public $price;

        function __construct($album_name, $band_name, $image_path, $album_price = 10.99)
        {
            $this->title = $album_name;
            $this->artist = $band_name;
            $this->cover_art = $image_path;
            $this->price = $album_price;
        }
    }

    $first_cd = new CD("Master of Reality", "Black Sabbath", "img/reality.jpeg");
    $second_cd = new CD("Electric Ladyland", "Jimi Hendrix", "img/ladyland.jpeg");
    $third_cd = new CD("Nevermind", "Nirvana", "img/nevermind.jpeg");
    $fourth_cd = new CD("I don't get it", "Pork Lion", "img/porklion.jpeg", 49.99);

    $cds = array($first_cd, $second_cd, $third_cd, $fourth_cd);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <title>My CD Store</title>
</head>
<body>
    <div class="container">
        <?php
            foreach ($cds as $album) {
                echo "<div class='row'>
                    <div class='col-md-6'>
                        <img src='$album->cover_art'>
                    </div>
                    <div class='col-md-6'>
                        <p>$album->title</p>
                        <p>By $album->artist</p>
                        <p>$$album->price</p>
                    </div>
                </div>
                ";
            }
        ?>
    </div>
</body>
</html>
