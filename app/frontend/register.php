<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSN|Register</title>
    <link rel="stylesheet" href="../../assets/css/login.css">
</head>
<body>
    <div class="main">
        <div id="login">
            <div class="heading">
                <h1>SSN Register</h1>
            </div>
            <div class="login">
                <form action="../backend/register.php" class="login-form" method="POST">
                    <div class="message">
                        <?php 
                        if(isset($_GET['message'])) {
                            echo($_GET['message']);
                        } 
                        ?>
                    </div>
                    <div class="form-input">
                        <input type="text" name="name" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-input">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <div class="form-input">
                        <input type="password" name="cpassword" class="form-control" placeholder="Enter your password again">
                    </div>
                    <div class="form-input">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                    <div class="form-input">
                        <a href="../../index.php">Already have an account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>