<?php
include(config.php);
class Common
{
    public function getAllRecords($connection) {
        $query = "SELECT * FROM users";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }

    public function deleteRecordById($connection,$recordId) {
        $query = "DELETE FROM users WHERE user_id='$recordId'"; //user_id == id 
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
    
    public function getAllnotes($connection) {
        $query = "SELECT * FROM notesvol2";
        $result = $connection->query($query) or die("Error in query3".$connection->error);
        return $result;
    }

    public function deleteNotesById($connection,$NotesId) {
        $query = "DELETE FROM notesvol2 WHERE inst_ID='$NotesId'"; //user_id == id 
        $result = $connection->query($query) or die("Error in query4".$connection->error);
        return $result;
    }
    
}

?>