<?php
    session_start();
    $users = ["admin",  "students", "employees", "exams"];
    $location = 'location: ' . $users[$_SESSION["groupId"]] . "/" . $users[$_SESSION["groupId"]] . ".php";
    // header($location);
    header("location: home/");