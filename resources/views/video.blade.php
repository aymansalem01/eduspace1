<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSpace Video Courses</title>
    <link rel="stylesheet" href="assest/css/video.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" type="x-icon" href="assest/image/logo.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body >
    @include('chatbot')
    <!-- Navigation Bar -->
    <nav class="main_box">
        <input type="checkbox" id="check">
        <div class="btn_one">
            <label for="check">
                <i class="fas fa-bars"></i>
            </label>
            <div class="menu-icon-text">
                <a href="#">الالعاب</a>
            </div>
        </div>
        
        <div class="sidebar_menu">
            <div class="menu">
                <ul>
                    <li>
                        <i class="fas fa-trophy"></i>
                        <a href="#">الالعاب</a>
                        <ul class="dropdown">
                            <li><a href="https://learn-2b.github.io/Electron--Configuration/">المستوى(1)</a></li>
                            <li><a href="https://learn-2b.github.io/Electron-Distribution-Game/">المستوى(2)</a></li>
                            <li><a href="https://learn-2b.github.io/GuessAtom/">المستوى(3)</a></li>
                            {{-- <li><a href="https://learn-2b.github.io/GuessAtom/">المستوى(4)</a></li> --}}
                        </ul>
                    </li>
                </ul>
                    {{-- <li>
                        <i class="fas fa-book"></i>
                        <a href="#">Courses</a>
                    </li>
                    
                </ul>
                <div class="language-selector">
                    <a href="index_en.html"><i class="fa-solid fa-globe"></i></a>
                    <a href="index_ar.html"><i class="fa-solid fa-globe"></i></a>
                </div> --}}
            </div>
        </div>
    </nav>

    <!-- Welcome Message -->
    <div class="welcome">
        <h1>EduSpace مرحبا بكم في دروس</h1>
        <p>شاهد الدروس واستمتع بالالعاب التفاعلية  </p>
    </div>

    <!-- Video Courses Section -->
    <div class="video-container">
        <div class="video-box" onclick="playVideo('{{ asset('assest/video1.mp4') }}')">
            <img src="{{ asset('assest/image/im1.jpg') }}" alt="Video 1">
            <h3>التوزيع الالكتروني ( مبدأ أوفباو)</h3>
        </div>
        <div class="video-box" onclick="playVideo('{{ asset('assest/video2.mp4') }}')">
            <img src="{{ asset('assest/image/im2.jpg') }}" alt="Video 2">
            <h3>التوزيع الالكتروني (المدارات)</h3>
        </div>
        <div class="video-box" onclick="playVideo('{{ asset('assest/video3.mp4') }}')">
            <img src="{{ asset('assest/image/im3.jpg') }}" alt="Video 3">
            <h3>التفاعلات الكيميائية</h3>
        </div>
    </div>
    
    <!-- Video Player Section -->
    <div class="video-player">
        <video id="video" controls>
            <source src="{{ asset('assest/video1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <script src="{{ asset('assest/js/video.js') }}"></script>
</body>
</html>
