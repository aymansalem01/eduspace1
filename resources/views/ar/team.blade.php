<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut Icon" type="x-icon" href= {{ asset("assest/image/logo.png")}}>

    <title>meet us</title>
    <!-- Font Awesome for icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href= {{ asset("assest/css/team.css")}} />
  </head>
  <body>
    <section>
      <div class="row">
        <h1>EduSpace Team</h1>
      </div>
      <div class="row">
        <!-- Column 1 -->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <!-- Make sure the path is correct and the file exists -->
              <img src= {{ asset("assest/image/Tala.jpeg")}} alt="Tala Wassas" />
            </div>
            <h3>Tala Wassas</h3>
            <p>AI Student</p>
            <div class="icons">

              <a href="https://www.linkedin.com/in/tala-wassas-154990304?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" aria-label="LinkedIn">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="https://github.com/Talatoto" aria-label="GitHub">
                <i class="fab fa-github"></i>
              </a>
              {{-- <a href="#" aria-label="Email">
                <i class="fas fa-envelope"></i>
              </a> --}}
            </div>
          </div>
        </div>
        <!-- Repeat similar structure for other team members -->
        <!-- Column 2 -->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src= {{ asset("assest/image/Lujain.jpeg")}} alt="Lujain Samara" />
            </div>
            <h3>Lujain Samara</h3>
            <p>SE student</p>
            <div class="icons">

              <a href="https://www.linkedin.com/in/lujain-samara-0324692bb/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" aria-label="LinkedIn">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="https://github.com/lujain03" aria-label="GitHub">
                <i class="fab fa-github"></i>
              </a>
              {{-- <a href="#" aria-label="Email">
                <i class="fas fa-envelope"></i>
              </a> --}}
            </div>
          </div>
        </div>
        <!-- Column 3 -->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src={{ asset("assest/image/Ayman.jpeg")}} alt="Ayman Aborumman" />
            </div>
            <h3>Ayman Aborumman</h3>
            <p>CE Graduate</p>
            <div class="icons">

              <a href="https://www.linkedin.com/in/ayman-aburumman-549931262" aria-label="LinkedIn">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="https://github.com/aymansalem01" aria-label="GitHub">
                <i class="fab fa-github"></i>
              </a>
              {{-- <a href="#" aria-label="Email">
                <i class="fas fa-envelope"></i>
              </a> --}}
            </div>
          </div>
        </div>
       <!-- Column 4 -->
<div class="column">
  <div class="card batool-card">
    <div class="img-container">
      <img src= {{ asset("assest/image/Batool.jpeg")}} alt="Batool Ennab" />
    </div>
    <h3>Batool Ennab</h3>
    <p>AI Student</p>
    <div class="icons">

      <a href="https://www.linkedin.com/in/batoul-ennab-88b4a4289?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" aria-label="LinkedIn">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://github.com/Mustafa-Ananbeh" aria-label="GitHub">
        <i class="fab fa-github"></i>
      </a>
      {{-- <a href="batoulennab17@gmail.com" aria-label="Email">
        <i class="fas fa-envelope"></i>
      </a> --}}
    </div>
  </div>
</div>

        <!-- Column 5 -->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src={{ asset("assest/image/Rahaf.jpeg" )}} alt="Rahaf Baseet" />
            </div>
            <h3>Rahaf Baseet</h3>
            <p>VR Student</p>
            <div class="icons">


              <a href="https://www.linkedin.com/in/rahaf-yasien-b022372b5?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" aria-label="LinkedIn">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="https://github.com/Rayx23x" aria-label="GitHub">
                <i class="fab fa-github"></i>
              </a>

            </div>
          </div>
        </div>
      </div>
    </section>
    <script src= {{ asset("assest/js/team.js")}}></script>

  </body>
</html>
