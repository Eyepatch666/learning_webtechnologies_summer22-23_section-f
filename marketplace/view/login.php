<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
    <script src="../js/loginck.js"></script>
</head>

<body>

    <div class="container">
        <p class="navigation">
            <a class="link-button" href="web.php">WEB Home</a>
        </p>

        <div class="login-form">
            <fieldset>
                <legend>LOGIN</legend>
                <p class="error-message" id="errors"></p>
                <form method="post" action="../controller/loginvalidation.php">
                    <label for="userid">UserID:</label>
                    <input type="text" id="userid" name="userid" pattern="\d{2}-\d{5}-\d{1}" required><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required /> <br>
                    <input type="button" id="submitbtn" name="btn" value="Submit" onclick="checkCred()" />
                    <a class="link-button" href="registration.php">Registration</a>
                </form>
            </fieldset>
        </div>
    </div>

</body>

</html>
