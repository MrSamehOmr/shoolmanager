<?php
function getTitle(){
    global $pageTitle;
    if(isset($pageTitle)){
        return $pageTitle;
    }
    else return "Default";
}