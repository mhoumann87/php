<?php

DEFINE ('DB_USER', 'stock');
DEFINE ('DB_PASS', 'kode1234');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'stock_analyzer');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) OR die('No connection to te database '. mysqli_connect_error());

mysqli_set_charset($connect, "utf8");


?>