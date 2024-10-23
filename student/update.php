<?php
    include "includes/header.php";

    if (isset($_POST['submit-update']))
    {
        $inputID = $_POST['inputID'];
        $inputFirstname = $_POST['inputFirstname'];
        $inputLastname = $_POST['inputLastname'];
        $inputEmail = $_POST['inputEmail'];

        $updateStudent = "UPDATE student SET studentFirstname='$inputFirstname', studentLastname='$inputLastname', studentEmail='$inputEmail' WHERE studentID='$inputID'";

        $resultUpdate = $mysqli->query($updateStudent);

        if ($resultUpdate)
        {
            echo "<script> window.location.href = 'list.php'; </script>";
        }
        else
        {
            die('Error: ' . $mysqli->error);
        }
    }
    $mysqli->close();
?>