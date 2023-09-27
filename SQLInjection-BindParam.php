<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="SQLInjection-BindParam.php" method="post">
            <div class="form-control">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-control">
                    <label for="email">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Sign In</button>
            <button type="reset">Clear</button>
    </form>
    <?php
        $servername = "127.0.0.1"; // Change this to your MySQL server hostname
        $username = "root";         // Change this to your MySQL username
        $password = "";             // Change this to your MySQL password
        $database = "login";        // Change this to your MySQL database name

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        if (isset($_POST['username']) && isset($_POST['password'])) {
            // Use prepared statements to prevent SQL injection
            $name = $_POST['username'];
            $password = $_POST['password'];

            $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
            $stmt->bind_param("ss", $name, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<p> UserName: " . $row["username"] . "<br> PassWord: " . $row["password"] . "</p><br>";
                }
            } else {
                echo "<p> Không tìm thấy dữ liệu.</p>";
            }

            $stmt->close();
        }

        $conn->close();
    ?>


</body>
</html>