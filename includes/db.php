<?php

$link = mysqli_connect('localhost', 'root', '', 'projectone');

if (!$link) {
    echo "Database connection failed";
}
