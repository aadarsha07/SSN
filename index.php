<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSN</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="main">
        <div id="login">
            <div class="heading">
                <h1>SSN </h1>
            </div>
            <div class="login">
                <form action="app/backend/login.php" class="login-form" method="POST">
                <div class="message">
                        <?php 
                        if(isset($_GET['message'])) {
                            echo($_GET['message']);
                        } 
                        ?>
                    </div>
                    <div class="form-input">
                        <input type="email" name="email" class="form-controll" placeholder="Enter your email" required>
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" class="form-controll" placeholder="Enter your password" required>
                    </div>
                    <div class="form-input">
                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                    </div>
                    <div class="form-input">
                        <a href="app/frontend/register.php">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>