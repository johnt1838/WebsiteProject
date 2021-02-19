<?php
include "config.php";
include_once "Common.php";
if (isset($_GET['NotesId'])){
    $NotesId = $_GET['NotesId'];
    $common = new Common();
    $delete = $common->deleteNotesById($connection,$NotesId);
    if ($delete){
        echo '<script>alert("Record deleted successfully !")</script>';
        echo '<script>window.location.href="mathimata.php";</script>';
    }
}