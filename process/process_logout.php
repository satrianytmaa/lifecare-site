<?php

require 'db.php';

session_start();
unset($_SESSION['id_user']);
unset($_SESSION['role']);

header("location: http://localhost/lifecare-site/");
