<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Metadata for character set, compatibility, and responsive design -->
  <meta charset="UTF-8">
  {{-- <link rel="shortcut Icon" type="x-icon" href= "asset('assest/image/logo.png')"> --}}
  <link rel="shortcut icon" type="x-icon" href="assest/image/logo.png">
  

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS for styling -->
  <link href={{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css')}} rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- Bootstrap JS for interactive components -->
  <script defer src={{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js')}} integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <!-- Custom CSS for additional styles -->
  <link rel="stylesheet" href={{asset('assest/css/course.css')}}>

  <!-- Page title -->
  <title>Courses</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  @include('chatbot')
  <!-- Navigation Bar -->
  <nav class="custom-navbar">
    <ul>
      <li><a href="/">Home</a></li> <!-- Link to Home page -->
    </ul>
  </nav>

  <!-- Carousel Slider -->
  <div class="carousel-container">
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">

      <!-- Carousel indicators (dots) -->
      <div class="carousel-indicators">
        <!-- Active indicator for the first slide -->
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <!-- Indicators for the second and third slides -->
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Carousel inner content (slides) -->
      <div class="carousel-inner">
        <!-- First slide with active class -->
        <div class="carousel-item active c-item">
          <img src="assest/image/chemistrycourse.jpg" class="d-block w-100 c-img" alt="Chemistry"> <!-- Slide image -->
          <div class="carousel-caption top-0 mt-4"> <!-- Caption for the first slide -->
            <p class="mt-5 fs-3 text-uppercase">Explore the world of chemistry</p>
            <h1 class="display-1 fw-bolder text-capitalize">Chemistry</h1>
            <a href="/video" target="_blank" class="btn btn-primary px-4 py-2 fs-5 mt-5">Go to Course</a> <!-- Button to go to the course -->
          </div>
        </div>

        <!-- Second slide -->
        <div class="carousel-item c-item">
          <img src="assest/image/physicscourse.jpg" class="d-block w-100 c-img" alt="Physics"> <!-- Slide image -->
          <div class="carousel-caption top-0 mt-4"> <!-- Caption for the second slide -->
            <p class="text-uppercase fs-3 mt-5">Uncover the laws of physics</p>
            <p class="display-1 fw-bolder text-capitalize">Physics</p>
            <p class="fs-5 mt-5">Coming Soon</p> <!-- Updated to Coming Soon -->
          </div>
        </div>

        <!-- Third slide -->
        <div class="carousel-item c-item">
          <img src="assest/image/biocourse.jpg" class="d-block w-100 c-img" alt="Biology"> <!-- Slide image -->
          <div class="carousel-caption top-0 mt-4"> <!-- Caption for the third slide -->
            <p class="text-uppercase fs-3 mt-5">Discover the wonders of biology</p>
            <p class="display-1 fw-bolder text-capitalize">Biology</p>
            <p class="fs-5 mt-5">Coming Soon</p> <!-- Updated to Coming Soon -->
          </div>
        </div>
      </div>

      <!-- Previous button -->
      <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <!-- Next button -->
      <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- Professional Description Section -->
  <section class="description text-center py-5">
    <div class="container">
      <h2 class="display-4 text-light mb-4">Empowering Education through Innovation</h2> <!-- Section title -->
      <p class="text-light fs-5">At EduSpace, we are dedicated to transforming learning experiences with cutting-edge technology. Our platform offers immersive games, engaging 2D learning activities, and advanced VR labs, all designed to make education more interactive and accessible.</p> <!-- Section description -->
    </div>
  </section>
</body>
</html>
