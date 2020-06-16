<?php
##################################
# => To Do
#    : Check if the input dat is valid;
##################################

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include '../general/includes/sql/connector.php';
    $myData = file_get_contents('php://input');
    
    $myData = json_decode($myData);


    // update the sutdent data
    $updateStmnt = $conn->prepare(
        "UPDATE students_data SET $myData->dataName = ? WHERE studentId = ?;"
    );

    
    $updateStmnt->execute([$myData->dataValue, $myData->id]);
}