<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSpace Register</title>
    <link rel="stylesheet" href="assest/css/signup.css"><!-- Linking the CSS file -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" type="x-icon" href="assest/image/logo.png">
</head>
<body>
    <div class="wrapper">
        <form action="" class="form-box register">
            <h1>Register</h1> <!-- Main heading for the register form -->
            <p class="f">Join us today! Please create your account.</p>

            <div class="input-row"> <!-- Flexbox container for username and email -->
                <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <i class='bx bxs-user'></i><!-- Icon for username -->
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i><!-- Icon for email -->
                </div>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i><!-- Icon for password -->
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm Password" required>
                <i class='bx bxs-lock-alt'></i><!-- Icon for confirm password -->
            </div>
            <button type="submit" class="btn">Register</button><!-- Register button -->
            <div class="login-link">
                <p>Already have an account? <a href="/login" class="login-toggle">Login</a></p> <!-- Login link -->
            </div>
        </form>
    </div>
    <script src="assest/js/loginsignup.js"></script>
</body>
</html>
