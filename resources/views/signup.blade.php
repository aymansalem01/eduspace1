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
        <form action={{url("store")}} method="post" class="form-box register">
            @CSRF
            <h1>Register</h1> <!-- Main heading for the register form -->
            <p class="f">Join us today! Please create your account.</p>

            <div class="input-row"> <!-- Flexbox container for username and email -->
                <div class="input-box">
                    <input type="text" name="Username"  placeholder="Username" required>
                    <i class='bx bxs-user'></i><!-- Icon for username -->
                    @error('Username')
                        {{$message}}
                    @enderror
                </div>

                <div class="input-box">
                    <label for="email"></label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i><!-- Icon for email -->
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i><!-- Icon for password -->
                @error('password')
                    {{$message}}
                @enderror
            </div>

            <div class="input-box">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <i class='bx bxs-lock-alt'></i><!-- Icon for confirm password -->
                @error('confirm_password')
                    {{$message}}
                @enderror
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
