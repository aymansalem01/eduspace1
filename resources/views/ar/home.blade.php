<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="assest/image/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>EduSpace</title>

    <link rel="stylesheet" href="assest/css/home.css">
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.5/build/spline-viewer.js"></script>
</head>
<body dir="rtl">
@include('chatbot')

   <!-- Navbar Section -->
   <header>

        <a href="/whyspace" class="logo">
            <img src="assest/image/logo.png" alt="Logo" />
        </a>
        <nav>
            <a href="/ar" class="active">الرئيسية</a>
            <div class="dropdown">
                <a href="#" class="dropbtn">عنا</a>
                <div class="dropdown-content">
                    <a href="/ar/whyspace" >لماذا نحن</a>
                    <a href="/ar/team" >الفريق</a>

                </div>
            </div>
            <a href="/ar/course" >كورساتنا</a>
            <a href="/ar/feedback" >اقتراحات</a>
            {{-- <a href="/profile" >Profile</a> --}}
            <a href="/" >English</a>
            @if(Auth::check())
           <li>
            <form action={{ route('logout') }} method="POST">
                @csrf
                <button type="submit" class="btn">تسجيل خروج</button>
            </form>
            </li>
        @else
        <li>
            <a href="/login" class="btn">تسجيل دخول</a>
        </li>
        @endif
        </nav>
    </header>


    <!-- Solar System Content -->
    <section class="home" dir="rtl">
        <div class="home-content">
            <h1>نحن<span>EduSpace</span></h1>
            <h3 class="typing-text">صنع باستخدام<span></span></h3>
            <p>استكشف الكيمياء، الفيزياء، الأحياء والمزيد مع محاكاة متطورة، مختبرات الواقع الافتراضي، ومساعدة الذكاء الاصطناعي</p>
            <a href="/course" class="btn">ابدأ</a>
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
                <h3>تعليم مخصص</h3>
                <p>تجارب تعلم مخصصة وإرشادات الذكاء الاصطناعي لتعزيز التفوق الأكاديمي</p>
            </div>
            <!-- Second Feature Card -->
            <div class="feature-card">
                <h3>بيئات تعلم قابلة للتوسع.</h3>
                <p>أنشئ بيئات تعلم آمنة وقابلة للتوسع لدعم النمو الأكاديمي للطلاب.</p>
            </div>
            <!-- Third Feature Card -->
            <div class="feature-card">
                <h3>تحسين التفاعل</h3>
                <p>زيادة تفاعل الطلاب وتحفيزهم من خلال تجارب تعلم غامرة ومحفزة بالألعاب.</p>
            </div>
        </div>

   <!-- Promo Video Section -->
   <section class="video-text-section">
    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/KLOcj5qvOio" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="text-container">
        <h2>شاهد فيديو العرض الترويجي الخاص بنا.</h2>
        <p>يُبرز هذا الفيديو الميزات والإمكانيات المثيرة لـ EduSpace، بما في ذلك مختبرات الواقع الافتراضي المتطورة، والمحاكاة التفاعلية، والمزيد. انغمس في التجربة لترى كيف نجعل التعليم ينبض بالحياة!</p>
    </div>
</section>

    <!-- Footer Section -->
    <footer>
        <div class="footerContainer">

            <footer>
                <div class="footerNav">
                    <ul>
                        <li><a href="ar">الرئيسية</a></li>
                        <li><a href="/whyspace">عنا</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="/team">Our Team</a></li>
                    </ul>
                </div>

                <!-- Email Subscription Box -->
                <div class="emailSubscription">
                    <h4>أدخل بريدك الإلكتروني حتى نتمكن من التواصل معك.</h4>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <button type="submit">اشترك</button>
                    </form>
                </div>
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
