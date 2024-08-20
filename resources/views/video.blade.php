<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSpace - Course Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boxicons for icons -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assest/css/video.css">
</head>
<body>
    <div class="container-fluid">
        <!-- Header section -->
        <header class="text-white text-center p-3">
            <h1>Welcome to EduSpace</h1>
            <p>Complete the videos to unlock game levels and earn points!</p>
        </header>




            <!-- Main content area for videos -->
            <main class="col-md-9 col-lg-10 p-4">
                <h2>Course Videos</h2>
                <!-- Video Grid -->
                <div class="row g-4 mb-4">
                    <!-- Video Item 1 -->
                    <div class="col-md-3">
                        <div class="video-item" data-video="1">
                            <img src="#" class="img-fluid" alt="Video 1">
                            <div class="video-info">
                                <h5>Video 1 Title</h5>
                                <p>Short description of the video.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Video Item 2 -->
                    <div class="col-md-3">
                        <div class="video-item" data-video="2">
                            <img src="#" class="img-fluid" alt="Video 2">
                            <div class="video-info">
                                <h5>Video 2 Title</h5>
                                <p>Short description of the video.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Video Item 3 -->
                    <div class="col-md-3">
                        <div class="video-item" data-video="3">
                            <img src="#" class="img-fluid" alt="Video 3">
                            <div class="video-info">
                                <h5>Video 3 Title</h5>
                                <p>Short description of the video.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Video Item 4 -->
                    <div class="col-md-3">
                        <div class="video-item" data-video="4">
                            <img src="#" class="img-fluid" alt="Video 4">
                            <div class="video-info">
                                <h5>Video 4 Title</h5>
                                <p>Short description of the video.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video player section -->
                <div id="videoPlayer" class="mt-4">
                    <video id="video1" class="w-100" controls>
                        <source src="#" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>A
                    <p class="text-center mt-2">Now playing: Video 1</p>
                </div>
            </main>
        </div>
    </div>
    <!-- Bootstrap 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="assest/js/video.js"></script>
</body>
</html>
