<a href="create.php">Create New QR Code</a>

<?php

    foreach($model as $item) {
        $title = $item->title;
        $android_link = $item->android_link;
        $ios_link = $item->ios_link;
        $id = $item->id;

        echo "<p><a href='../qrcode3000/details.php?qr=$id'>$title</a>: Android: $android_link, IOS: $ios_link</p>";
    }

?>