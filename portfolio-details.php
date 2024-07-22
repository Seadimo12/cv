<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Project Details</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body class="portfolio-details-page">
    <header id="header" class="header dark-background d-flex flex-column">
      <i class="header-toggle d-xl-none bi bi-list"></i>

      <div class="profile-img">
        <img
          src="assets/img/my-profile-img.jpg"
          alt=""
          class="img-fluid rounded-circle"
        />
      </div>

      <a
        href="index.html"
        class="logo d-flex align-items-center justify-content-center"
      >
        <h1 class="sitename">Seadimo Bugqwangu</h1>
      </a>

      <div class="social-links text-center">
        <a
          href="https://www.linkedin.com/in/seadimo-bugqwangu-22609426b"
          class="linkedin"
          ><i class="bi bi-linkedin"></i
        ></a>
        <a href="https://github.com/Seadimo12" class="github"
          ><i class="bi bi-github"></i
        ></a>
        <a href="mailto:seadimo.bugqwangu@gmail.com" class="gmail"
          ><i class="bi bi-gmail"></i
        ></a>
      </div>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li>
            <a href="#hero" class="active"
              ><i class="bi bi-house navicon"></i>Home</a
            >
          </li>
          <li>
            <a href="#about"><i class="bi bi-person navicon"></i> About</a>
          </li>
          <li>
            <a href="#skills"
              ><i class="bi bi-file-earmark-text navicon"></i>Skills</a
            >
          </li>
          <li>
            <a href="#experience"
              ><i class="bi bi-hdd-stack navicon"></i> Experience</a
            >
          </li>
          <li>
            <a href="#education"
              ><i class="bi bi-images navicon"></i> Education</a
            >
          </li>
          <li>
            <a href="#contact"
              ><i class="bi bi-envelope navicon"></i> Contact</a
            >
          </li>
        </ul>
      </nav>
    </header>

    <main class="main">
      <!-- Page Title -->
      <div class="page-title dark-background">
        <div
          class="container d-lg-flex justify-content-between align-items-center"
        >
          <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Portfolio Details</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Portfolio Details Section -->
      <section id="portfolio-details" class="portfolio-details section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    }
                  }
                </script>

                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <img
                      src="assets/img/portfolio/ctubuddy.png"
                      alt="ctubuddy"
                    />
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/portfolio/about.png" alt="about" />
                  </div>

                  <div class="swiper-slide">
                    <img
                      src="assets/img/portfolio/timetable.png"
                      alt="timetable"
                    />
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <div class="col-lg-4">
              <div
                class="portfolio-info"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <h3>Project information</h3>
                <ul>
                  <li><strong>Category</strong>: Web design</li>
                  <li><strong>Client</strong>: School Project</li>
                  <li><strong>Project date</strong>: October 2023</li>
                </ul>
              </div>
              <div
                class="portfolio-description"
                data-aos="fade-up"
                data-aos-delay="300"
              >
                <h2>CTU Buddy School Website</h2>
                <p>
                  This is a group project in which we were tasked with creating
                  a login system for univeristy students to access their daily
                  timetables, share documents with the institution, learn more
                  about the schools vision as well as being able to leave their
                  contact details in order to receive personalized responses on
                  any issues or feedback they may require. My task was to create
                  the About Us page in which all the values were displayed as
                  well as the contact us page form. This project was created
                  using the programming languages HTML and CSS.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Portfolio Details Section -->
    </main>

    <footer id="footer" class="footer position-relative light-background">
      <div class="container">
        <div class="copyright text-center">
          <p>
            © <span>2024 Seadimo Bugqwangu. </span
            ><span>All Rights Reserved</span>
          </p>
        </div>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
