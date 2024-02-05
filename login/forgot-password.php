<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/admin_login_css/login.css">
    <link rel="icon" href="../assets/admin_login_image/logo.png">
    <title>OTP-Varification</title>
</head>
<body>
    <div class="container">
        <h2>Confirm OTP, Admin!</h2>
        <p>Enter your register Email</p>
        <form action="../controllers/AppController.php?action=otp_verify" class="box" method="post">
            <div class="input">
                <input type="mail" name="mail" placeholder="example@gmail.com" style="font-size: large;"/>
            </div>
            <button type="submit" class="input">Submit</button>
        </form>
    </div>
</body>
</html>
