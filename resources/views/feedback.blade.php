<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="edlogo-removebg-preview.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="assest/css/feedback.css">
</head>
<body>
        <!-- Feedback Form Section -->
        <div class="wrapper">
            <form action="" class="form-box feedback">
                <h1>Feedback</h1> <!-- Main heading for the feedback form -->
                <p class="f">We value your feedback! Please share your thoughts with us.</p>

                <div class="input-box">
                    <input type="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i><!-- Icon for email -->
                </div>

                <div class="input-box">
                    <textarea placeholder="Write your feedback here..." required></textarea>
                    <i class='bx bxs-message-square-detail'></i><!-- Icon for feedback -->
                </div>

                <button type="submit" class="btn">Submit Feedback</button><!-- Feedback submit button -->
            </form>
        </div>
        <script src={{asset('assest/js/feedback.js')}}></script>

</body>
</html>
