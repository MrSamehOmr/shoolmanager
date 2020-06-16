<?php
session_start();

include "init.php";
include $functions . "functions.php";
include "connect.php";

if (isset($_SESSION["userId"])) {
    if ($_SESSION["groupId"] == 0) {
        $pageTitle = "المسئول";


        if (isset($_GET["page"])) {
            if ($_GET["page"] == "users") {
                $pageTitle .= " | Users";
                $cssContent = "<link rel='stylesheet' href='layout/css/content.css'>";
                $content = "users.php";
                echo $cssContent;
                // include "users.php";
            } elseif (
                $_GET["page"] == "employees" ||
                $_GET["page"] == "exams" ||
                $_GET["page"] == "students"
            ) {
                $cssContent = "<link rel='stylesheet' href='";
                $cssContent .= "../" . $_GET["page"] . "/" . "layout/css/" . "content.css" . "'>";

                // $cssPrint = "<link rel='stylesheet' media='print' href='";
                // $cssPrint .= "../" . $_GET["page"] . "/" . "layout/css/" . "print.css" . "'>";

                $scriptPath = "<script src='";
                $scriptPath .= "../" . $_GET["page"] . "/" . "layout/js/" . "content.js" . "'></script>";
                $content = "../" . $_GET["page"] . "/" . $_GET["page"] . ".php";
            } else {
                echo "<div class='page-error'>هذه الصفحة غير موجودة</div>";
            }
        }

        include $templates . "header.php";

        if (isset($cssContent)) echo $cssContent;
        // if (isset($cssPrint)) echo $cssPrint;

        include $templates . "nav.php";
        if (isset($content)) include $content;

        include $templates . "footer.php";
        if (isset($scriptPath)) echo $scriptPath;
        echo "</body>";
        echo "</html>";
    } else {
        header("location: ../logout.php");
        // header("location: ../index.php");
    }
}
