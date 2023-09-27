<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="SQLInjection-MagicQuote.php" method="post">
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
            die("Connection failed: " . $conn->connect_error);
        }
        
        $user = $conn->real_escape_string($_POST['username']);
        $pass = $conn->real_escape_string($_POST['password']);
        
        $query = "SELECT * FROM login WHERE username='$user' AND password='$pass'";
        $result = $conn->query($query);
        
        if (!$result) {
            die("Query failed: " . $conn->error);
        }
        
        // Process the results here, for example:
        if ($result->num_rows > 0) {
            // User exists, do something
            while ($row = $result->fetch_assoc()) {
                // Access data using $row['column_name']
                echo "<p> UserName: " . $row["username"] . "<br> PassWord: " . $row["password"] . "</p><br>";
            }
        } else {
            // User not found, handle accordingly
            echo "<p> Không tìm thấy dữ liệu.</p>";
        }
        
        $conn->close();
    ?>


</body>
</html>