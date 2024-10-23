<?php
    include 'includes/header.php'; 

    $inputID = $_GET['delete_ID'];

    $deleteStudent = "DELETE FROM student WHERE studentID='$inputID' ";
    
    $resultDelete = $mysqli->query($deleteStudent);
    
    if ($resultDelete)
    {
        echo "<script> window.location.href = 'list.php'; </script>";
    }
    else
    {
        echo "Error: " . $mysqli->error;
    }
    $mysqli->close();
?>