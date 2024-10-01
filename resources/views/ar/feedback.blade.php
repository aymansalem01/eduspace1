<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href={{asset("edlogo-removebg-preview.png")}}>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href={{asset("assest/css/feedback.css")}}>
    <link rel="shortcut icon" type="x-icon" href={{asset("assest/image/logo.png")}}>
</head>
<body>
        <!-- Feedback Form Section -->
        <div class="wrapper">
            <form action="" class="form-box feedback">
                <h1>ملاحظتكم</h1> <!-- Main heading for the feedback form -->
                <p class="f">نحن نقدر ملاحظاتك! يرجى مشاركة أفكارك معنا.</p>

                <div class="input-box">
                    <input type="email" name="email" placeholder="حسابك" required>
                    <i class='bx bxs-envelope'></i><!-- Icon for email -->
                </div>

                <div class="input-box">
                    <textarea placeholder="اكتب اقتراحك هنا ..." required></textarea>
                    <i class='bx bxs-message-square-detail'></i><!-- Icon for feedback -->
                </div>

                <button type="submit" class="btn">تسليم الملاحظة</button><!-- Feedback submit button -->
            </form>
        </div>
        <script src={{asset('assest/js/feedback.js')}}></script>

</body>
</html>
