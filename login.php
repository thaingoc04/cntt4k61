<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
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
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            if($username == 'minhanhpeach' && $password == '0909'){
                header('Location:https://www.reddit.com/r/FUTMobile/');
            }
        }
    ?>
</body>
</html>