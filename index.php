<?php
    $link = mysql_connect('localhost', 'CheckMeOutHacks', 'YHack2015');
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
    echo 'Connected successfully';
    mysql_close($link);
?>
