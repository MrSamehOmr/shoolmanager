<?php

if (isset($_SESSION["userId"]) && isset($_SESSION["groupId"]) && $_SESSION['groupId'] == 0) {
    if (isset($_GET["page"])) {

        $pageTitle = "Admin";

        switch ($_GET["page"]) {
            case ("users"):
                $pageTitle .= " | Users";
                $content_style = "<link rel='stylesheet' href='../admin/layout/css/content.css'>";
                $content = "../admin/users.php";
                $content_script = "<script src='../admin/layout/js/users.js'><script>";
                break;

            case ("employees"):
                $pageTitle .= " | Employees";
                $content_style = "<link rel='stylesheet' href=''>";
                $content = "../employees/employees.php";
                $content_script = "<script src=''><script>";
                break;

            case ("exams"):
                $pageTitle .= " | Exams";
                $content_style = "<link rel='stylesheet' href='../exams/layout/css/content.css'>";
                $content = "../exams/exams.php";
                $content_script = "<script src='../exams/layout/js/content.js'></script>";
                break;

            case ("students"):
                $pageTitle .= " | Students";
                $content_style = "<link rel='stylesheet' href='../students/layout/css/content.css'>";
                $content = "../students/students.php";
                $content_script = "<script src='../students/layout/js/content.js'><script>";
                break;
        }
    }

    include "../admin/includes/templates/header.php";

    if (isset($content_style))  echo $content_style;

    include "../admin/includes/templates/nav.php";

    if (isset($content)) include $content;
    if (isset($content_script)) echo $content_script;
    include "../admin/includes/templates/footer.php";
}
