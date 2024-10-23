<?php 
    $title = 'Create Student';

    include 'includes/header.php';
?>

<body>
    <div class="form-container">
        <h1>Create</h1>
        <form action="create.php" method="post">
            <label for="inputFirstname">First Name</label>
            <input type="text" placeholder="Enter your firstname" name="inputFirstname" required>
            <br>

            <label for="inputLastname">Last Name</label>
            <input type="text" placeholder="Enter your lastname" name="inputLastname" required>
            <br>

            <label for="userEmail">Email</label>
            <input type="email" placeholder="Enter your email" name="inputEmail" required>
            <br>

            <button type="submit" name="submit-button">Submit</button>
        </form>
        <?php
            if (isset($_POST['submit-button']))
            {
                $inputFirstname = $_POST['inputFirstname'];
                $inputLastname = $_POST['inputLastname'];
                $inputEmail = $_POST['inputEmail'];

                $insertStudent = "INSERT INTO student (studentFirstname,studentLastname,studentEmail) VALUES ('$inputFirstname','$inputLastname','$inputEmail')";
            
                $resultInsert = $mysqli->query($insertStudent);

                if ($resultInsert)
                {
                    echo "New student record successfully";
                }
                else
                {
                    echo "Error: " . $mysqli->error;
                }
            }
            $mysqli->close();
        ?>
    </div>
</body>
</html>