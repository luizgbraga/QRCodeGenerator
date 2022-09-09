<?php

    $link = "http://192.168.68.150/php_course/qrcode3000/redirect.php?qr=$model->id";

?>

<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?= urlencode($link) ?>" title="Link to Google.com" />
