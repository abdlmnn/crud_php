<?php
    $title = "Login";

    include 'includes/header.php';
?>
<body>
    <div class="login-container">
        <h1>Login</h1>
        
        <form action="login.php" method="post">
            <label for="inputUsername">Username</label>
            <input type="text" placeholder="ex. C00-0000" name="inputUsername">
            <br>
            <label for="inputPassword">Password</label>
            <input type="password" placeholder="Enter your password" name="inputPassword">
            <br>
            <button name="submit-button">Login</button>
        </form>

        <?php
            if (isset($_POST['submit-button']))
            {
                $inputUsername = $_POST['inputUsername'];
                $inputPassword = $_POST['inputPassword'];

                if (!empty($inputUsername)&&!empty($inputPassword))
                {
        ?>
                <table border="1" cellpadding="15" cellspacing="0">
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                    <tr>
                        <td><?php echo $inputUsername; ?></td>
                        <td><?php echo $inputPassword; ?></td>
                    </tr>
                </table>
        <?php
                }
                else
                {
                    echo 'Empty username and password!';
                }
            }
            
        ?>
    </div>
</body>
</html>