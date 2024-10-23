<?php 
    $title = 'Update Student';

    include 'includes/header.php'; 
?>

<body>
    <div class="form-container">
        <h1>Update</h1>
        <?php
            $inputID = $_GET['update_ID'];

            $selectStudent = "SELECT * FROM student WHERE studentID='$inputID'";

            $resultSelect = $mysqli->query($selectStudent);

            if (!$resultSelect)
            {
                die('Error: ' . $mysqli->error);
            }
            else
            {
                $studentRow = mysqli_fetch_array($resultSelect);
        ?>
                <form action="update.php" method="post">
                    <input type="hidden" name="inputID" value="<?php echo $studentRow['studentID']; ?>">
                    
                    <label for="inputFirstname">First Name</label>
                    <input type="text" placeholder="Enter your firstname" name="inputFirstname" value="<?php echo $studentRow['studentFirstname']; ?>">
                    <br>

                    <label for="inputLastname">Last Name</label>
                    <input type="text" placeholder="Enter your lastname" name="inputLastname" value="<?php echo $studentRow['studentLastname']; ?>">
                    <br>

                    <label for="userEmail">Email</label>
                    <input type="email" placeholder="Enter your email" name="inputEmail" value="<?php echo $studentRow['studentEmail']; ?>">
                    <br>

                    <button type="submit" name="submit-update">Update</button>
                </form>
        <?php
            }
            $mysqli->close();
        ?>
    </div>
</body>
</html>