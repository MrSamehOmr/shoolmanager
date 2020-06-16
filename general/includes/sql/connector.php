<?php

$conn = new PDO("mysql:host=localhost;dbname=school_management", "root", "", [PDO::ERRMODE_EXCEPTION]);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->query("SET NAMES 'utf8'");
$conn->query('SET CHARACTER SET utf8');
