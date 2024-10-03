<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="edlogo-removebg-preview.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="assest/css/feedback.css">
    <link rel="shortcut icon" type="x-icon" href="assest/image/logo.png">
</head>
<body>
        <!-- Feedback Form Section -->
        <div class="wrapper">
            <form action={{url("storefeed")}}  method="post" class="form-box feedback">
                @csrf
                <h1>Feedback</h1> <!-- Main heading for the feedback form -->
                <p class="f">We value your feedback! Please share your thoughts with us.</p>

                <div class="input-box">
                    <input name="email" id="email" type="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i><!-- Icon for email -->
                    @error('email')
                    {{$message}}
                @enderror
                </div>

                <div class="input-box">
                    {{-- <input  name="feedback"  type="text"  placeholder="Write your feedback here..."  required> --}}
                    <textarea  name="feedback"  type="text" placeholder="Write your feedback here..." required></textarea>
                    <i class='bx bxs-message-square-detail'></i><!-- Icon for feedback -->
                    @error('feedback')
                    {{$message}}
                    @enderror
                </div>

                <button type="submit" class="btn">Submit Feedback</button><!-- Feedback submit button -->
                @if (session('success'))
                <div class="alert alert-success">
               {{ session('success') }}
                </div>
                @endif
            </form>
        </div>
       
        <script src={{asset('assest/js/feedback.js')}}></script>

</body>
</html>
