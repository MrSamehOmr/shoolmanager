<?php
session_start();
ob_start('ob_gzhandler');

include "../general/includes/sql/connector.php";
include "includes/functions/functions.php";
include "../general/includes/converters.php";

if (isset($_SESSION['userId']) && isset($_SESSION['groupId'])) {
    $groupId = $_SESSION['groupId'];

    switch ($groupId) {
        case (0):
            include 'admin.php';
            break;

        case (1):
            // Students
            break;

        case (2):
            // Employees
            break;

        case (3):
            // Exams
            break;
    }
} else {
    echo 'Somthing Wrong';
    header("location: ../logout.php");
}

ob_end_flush();