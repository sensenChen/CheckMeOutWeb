<?php
    $link = mysql_connect('CheckMeOutHacks','us-cdbr-azure-east-a.cloudapp.net', 'b94754eb2c3c77', 'e2eb2fa2');
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
    echo 'Connected successfully';
    mysql_close($link);
?>
