<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSpace Video Courses</title>
    <link rel="stylesheet" href="assest/css/video.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="main_box">
        <input type="checkbox" id="check">
        <div class="btn_one">
            <label for="check">
                <i class="fas fa-bars"></i>
            </label>
            <div class="menu-icon-text">
                <a href="#">Games</a>
            </div>
        </div>
        <div class="sidebar_menu">
            <div class="menu">
                <ul>
                    <li>
                        <i class="fas fa-trophy"></i>
                        <a href="#">Games</a>
                        <ul class="dropdown">
                            <li><a href="#">Level(1)</a></li>
                            <li><a href="#">Level(2)</a></li>
                            <li><a href="#">Level(3)</a></li>
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
        <h1>Welcome to EduSpace Course</h1>
        <p>Watch videos to unlock games</p>
    </div>

    <!-- Video Courses Section -->
    <div class="video-container">
        <div class="video-box" onclick="playVideo('video1.mp4')">
            <img src="assets/image/biocourse.jpg" alt="Video 1">
            <h3>Introduction to Chemistry</h3>
        </div>
        <div class="video-box" onclick="playVideo('video2.mp4')">
            <img src="assets/image/chemcourse.jpg" alt="Video 2">
            <h3>Chemistry Basics</h3>
        </div>
        <div class="video-box" onclick="playVideo('video3.mp4')">
            <img src="assets/image/advchemcourse.jpg" alt="Video 3">
            <h3>Advanced Chemistry</h3>
        </div>
        <div class="video-box" onclick="playVideo('video4.mp4')">
            <img src="assets/image/orgchemcourse.jpg" alt="Video 4">
            <h3>Organic Chemistry</h3>
        </div>
    </div>

    <!-- Video Player Section -->
    <div class="video-player">
        <video id="video" controls>
            <source src="assets/videos/video1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

</body>
</html>
