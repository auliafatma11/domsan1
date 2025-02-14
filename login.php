<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon"  sizes="64x64" href="logo/dom-san.png" />
     <link href="css/style-login.css" rel="stylesheet" />
</head>
<body>
    <div class="login-container">
        <img src="logo/dom-san.png" alt="">
        <h2>Sebelum masuk, silahkan login dahulu ....</h2>
        <form action="ceklogin.php" method="post">
            <p>Username </p>
            <input type="text" name="username" placeholder="Username" >
            <p>Password </p>
            <input type="password" name="password" placeholder="Password" >
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>


