<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="assest/image/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSpace</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('assest/css/home.css')}}">
    <script type="module" src="{{asset('https://unpkg.com/@splinetool/viewer@1.9.5/build/spline-viewer.js')}}"></script>
</head>
<body>
    @include('chatbot')

   <!-- Navbar Section -->
   <header>

        <a href="/whyspace" class="logo">
            <img src="assest/image/logo.png" alt="Logo" />
        </a>
        <nav>
            <a href="/" class="active">Home</a>
            <div class="dropdown">
                <a href="#" class="dropbtn">About</a>
                <div class="dropdown-content">
                    <a href="/whyspace" >Why EduSpace</a>
                    <a href="/team" >Team</a>
                    <a href="/price" >prices</a>
                </div>
            </div>
            <a href="/course" >Courses</a>
            <a href="/feedback" >Feedback</a>
            {{-- <a href="/profile" >Profile</a> --}}
            <a href="/ar">عربي</a>
            <li style="display: inline;">
                @if(Auth::check())
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn" style="background: none; border: none; color: inherit; cursor: pointer;">Log Out</button>
                    </form>
                @else
                    <a href="/login" class="btn">Log In</a>
                @endif
            </li>
        </nav>
    </header>


    <!-- Solar System Content -->
    <section class="home">
        <div class="home-content">
            <h1>Hi we're <span>EduSpace</span></h1>
            <h3 class="typing-text">Created With <span></span></h3>
            <p>Explore Chemistry, Physics, Biology, and more with cutting-edge simulations, VR labs, and AI assistance.</p>
            <a href="/course" class="btn">Get Started</a>
        </div>
        <div class="spline-container">
            <spline-viewer url="https://prod.spline.design/k8juEQ11TwGW10oA/scene.splinecode"></spline-viewer>
        </div>
    </section>

    <hr class="divider">

    <!-- card Section -->

        <div class="features-content">
            <!-- First Feature Card -->
            <div class="feature-card">
                <h3>Personalized Learning</h3>
                <p>Tailored learning experiences and AI guidance to boost academic achievement.</p>
            </div>
            <!-- Second Feature Card -->
            <div class="feature-card">
                <h3>Scalable Learning Environments</h3>
                <p>Create safe and scalable learning environments to support students' academic growth.</p>
            </div>
            <!-- Third Feature Card -->
            <div class="feature-card">
                <h3>Improved Engagement</h3>
                <p>Increase student engagement and motivation through immersive and gamified learning experiences.</p>
            </div>
        </div>

   <!-- Promo Video Section -->
   <section class="video-text-section">
    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/TizH0dsxW08" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="text-container">
        <h2>Explore New Possibilities with EduSpace!</h2>
        <p>TStep into virtual reality labs for not just science, but also medicine, engineering, and more. With EduSpace, you can experience realistic experiments and simulations from anywhere. Our VR technology makes learning fun, accessible, and practical for all subjects. Start your 360-degree learning journey today!"</p>
    </div>
</section>

    <!-- Footer Section -->
    <footer>
        <div class="footerContainer">

            <footer>
                <div class="footerNav">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="https://www.instagram.com/eduspaceteam/?utm_source=ig_web_button_share_sheet">News</a></li>
                        <li><a href="/whyspace">About</a></li>
                        <li><a href="https://www.instagram.com/eduspaceteam/?utm_source=ig_web_button_share_sheet">Contact Us</a></li>
                        <li><a href="/team">Our Team</a></li>
                    </ul>
                </div>

                <!-- Email Subscription Box -->
                <div class="emailSubscription">
                    
                    <h4>enter your Email so we could get in touch with you</h4>
                    <form action={{url("subscribes")}} method="post">
                        @csrf
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>
                        @error('email')
                        {{$message}}
                        @enderror
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
                @if (session('success'))
                <div class="alert alert-success">
               {{ session('success') }}
                </div>
                @endif
                <div class="divider"></div>

                <div class="footerBottom">
        <p class="copyright">&copy; 2024 EduSpace. All Rights Reserved.</p>
                </div>
            </footer>

    </div>
    </footer>

    <script src="assest/js/home.js"></script>
</body>
</html>
