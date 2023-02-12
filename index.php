<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nails</title>

    <?php include 'php/imports/headerImport.php'; ?>
</head>
<body>

	<form class="loginForm" action="php/checkLogin.php" method="POST">
        <div class="from-box">

            <h1>Login</h1>

            <div class="input-box">
                <i class="item fa fa-user"></i>
                <input class="inputField" type="text" placeholder="Username" name="username" required>
            </div>

            <div class="input-box">
                <i class="item fa fa-key"></i>
                <input class="inputField" type="password" placeholder="Password" name="password" id="myInput" required>
            </div>

            <br>

            <span class="eye" onclick="myFunction()">
                    <i id="hide1" class="fa fa-eye"></i>
                    <i id="hide2" class="fa fa-eye-slash"></i>
            </span>

            <br><br>
            <button name="submit"  class="login-btn">LOGIN</button>
        </div>
	</form>

    <?php include 'php/imports/scriptImport.php' ?>

</body>
</html>