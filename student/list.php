<?php 
    $title = 'List of Students';
    
    include 'includes/header.php'; 
?>

<body>
    <div class="table-container">
        <table border="1" cellpadding="15" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
                $selectStudent = "SELECT * FROM student";

                $resultSelect = $mysqli->query($selectStudent);

                if (!$resultSelect)
                {
                    die('Error: ' . $mysqli->error);
                }
                else
                {
                    while ($studentRow = $resultSelect->fetch_assoc())
                    {
            ?>
                        <tr>
                            <td><?php echo $studentRow['studentID']; ?></td>
                            <td><?php echo $studentRow['studentFirstname'] . " " . $studentRow['studentLastname']; ?></td>
                            <td><?php echo $studentRow['studentEmail']; ?></td>
                            <td>
                                <button>
                                    <a href="edit.php?update_ID=<?php echo $studentRow['studentID']; ?>" style="text-decoration: none;">Update</a>
                                </button>
                                <button>
                                    <a href="delete.php?delete_ID=<?php echo $studentRow['studentID']; ?>" style="text-decoration: none;">Delete</a>
                                </button>
                            </td>
                        </tr>
            <?php
                    }   
                }
                $mysqli->close();
            ?>
        </table>
    </div>
</body>
</html>