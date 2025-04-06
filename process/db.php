<?php

// Database connection
$DB = new mysqli('localhost', 'root', '', 'lifecare_db');

// Check connection
if ($DB->connect_error) {
    die("Connection failed: " . $DB->connect_error);
}