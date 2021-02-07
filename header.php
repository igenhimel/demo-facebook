<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     <header class="header">
        <div class="container">
            <div class="logo">
                <img src="assest/logo.png">
            </div>
            <div class="login_area">
                <form action="<?php echo ($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
                    <div class="email">
                        <label for="email">Email or Phone</label>
                        <input id="email" type="text" name="username">
                    </div>
                    <div class="pass">
                        <label for="pas">Password</label>
                        <input id="pas" type="password" name="password">
                        <a href="#">Forgotten account?</a>
                    </div>
                    <div class="login">
                        <input type="submit" value="Log In" name=login>
                    </div>
                </form>
            </div>
        </div>
    </header>
</body>
</html>
