<?php

if (isset($_POST["ajax"]) && $_POST["ajax"] == 1) {
    include  "../../general/includes/converters.php";
    include "../../general/includes/sql/connector.php";
    
    $data = json_decode($_POST['dataName']);
    $tableName = $data->semester . '_semester_' . $data->table;

    $checkSql = "SELECT count(studentId) FROM " . $tableName . " WHERE " . $tableName . ".studentId = " . $data->studentId;
    $stmt = $conn->prepare($checkSql);
    $stmt->execute();
    $idExists = $stmt->fetch();
    $result = false;

    if((int)$idExists[0] === 0){

        $insertSql = "INSERT INTO " . $tableName . " (studentId, " . $data->dataName . ") VALUES ('"  . $data->studentId . "', '" .  $data->dataValue . "')";
        $insertStmt = $conn->prepare($insertSql);
        $result = $insertStmt->execute();

    }else{

        $updateSql = "UPDATE " . $tableName . " SET " . $data->dataName . " = '" . $data->dataValue . "' WHERE studentId = '" . $data->studentId . "'";
        $updateStmt = $conn->prepare($updateSql);
        $result = $updateStmt->execute();

    }
    if($result){
        echo '{"state" : "succeeded", "message" : "data inserted"}';
    }
    exit;
}else{
    echo "<div style='height: 80%; margin: auto; padding: 50px 100px; text-align: center; background-color: #ffdee4; color: brown; font-size: 3em;position: relative;'>";
        echo "<p style='position: absolute; top: 40%; left: 50%; transform: translate(-50%,0);text-shadow: 2px 2px 5px #AAA;'>";
        echo "OOOOOOPS Wrong Page !";
        echo "</p>";
    echo "</div>";
}