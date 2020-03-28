<?php

    define ('DB_NAME', 'wheretogo');
    define ('DB_USER', 'root');
    define ('DB_PASSWORD', 'tks1128225');
    define ('DB_HOST', '140.238.210.158:3306');

    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    date_default_timezone_set('Asia/Taipei');

?>