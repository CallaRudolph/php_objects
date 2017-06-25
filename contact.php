<?php

    class Contact
    {
        public $name;
        public $phone;
        public $address;
        public $image_path;
    }

    $hendrix = new Contact();
    $hendrix->name = "Jimi Hendrix";
    $hendrix->phone = "503-826-9371";
    $hendrix->address = "208 SW 5th st. Portland, OR 97204";
    $hendrix->image_path = "img/hendrix.jpeg";

    $elvis = new Contact();
    $elvis->name = "Elvis Presley";
    $elvis->phone = "617-356-3571";
    $elvis->address = "Graceland";
    $elvis->image_path = "img/elvis.jpeg";

    $einstein = new Contact();
    $einstein->name = "Albert Einstein";
    $einstein->phone = "415-738-4935";
    $einstein->address = "3718 MLK blvd. Oakland, CA 94609";
    $einstein->image_path = "img/einstein.jpeg";

    $marie = new Contact();
    $marie->name = "Marie Curie";
    $marie->phone = "432-154-3523";
    $marie->address = "1911 West 1st Ave. Fictional, OR 44556";
    $marie->image_path = "img/marie.jpeg";

    $janis = new Contact();
    $janis->name = "Janis Joplin";
    $janis->phone = "415-124-2445";
    $janis->address = "Haight Ashbury, San Francisco, CA 94117";
    $janis->image_path = "img/janis.jpeg";

    $address_book = array($hendrix, $elvis, $einstein, $marie, $janis);
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Address Book</title>
</head>
<body>
    <div class="container">
        <h1>Address Book</h1>
        <ul>
            <?php
                foreach ($address_book as $contact) {
                    echo "<li>";
                    echo $contact->name;
                    echo "<ul>";
                    echo "<li><img src='$contact->image_path'></li>";
                    echo "<li> $contact->phone </li>";
                    echo "<li> $contact->address </li>";
                    echo "</ul>";
                    echo "</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>
