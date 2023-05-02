<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Icon -->
  <link href="../vender/img/logo/PCCOE_LOGO_b.jpg" rel="shortcut icon" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="../vender/css/bootstrap.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
  <link href="../vender/css/navbar.css" rel="stylesheet" />
  <link href="../vender/css/style1.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Icon Link -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!-- PCCOE HEADER FOOTER CSS FILE -->
  <link rel="stylesheet" href="../imp-pccoe-style.css" type="text/css" />
  <title>Admission | Student Corner | Department of Mechanical Engineering at PCCOE</title>
  <style>
    /* Slideshow container */
    .slideshow-container {
      max-width: 700px;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.5s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 3s;
      animation-name: fade;
      animation-duration: 3s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }
  </style>
</head>

<body>
  <!-- Start Header -->
  <?php include("pccoe-header.php"); ?>
  <header>
    <div class="container-fluid header">
      <div class="row">
        <div class="col-lg-3 text-center d-flex justify-content-around align-items-center">
          <div>
            <div class="extern-btn">
              <a href="http://www.pccoepune.com/" class="text-decoration-none">
                <i class="fas fa-home"></i> PCCOE
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="text-center">
            <h4 class="dept-name fs-3 mb-3">Department Of Mechanical Engineering</h4>
          </div>
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- Start Navbar -->
  <div class="menu-section d-flex justify-content-around">
    <nav id="menu">
      <label for="tm" id="toggle-menu"><b>Menu</b> <span class="drop-icon"><b>&#9776;</b></span></label>
      <input type="checkbox" id="tm">
      <ul class="main-menu cf">
        <li class="b-left"><a href="../index.php">Home</a></li>
        <li class="b-left"><a href="#">About us
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm0">▾</label>
          </a>
          <input type="checkbox" id="sm0">
          <ul class="sub-menu">
            <li><a href="../aboutus/hod_desk.php">HOD Desk</a></li>
            <li><a href="../aboutus/vision-mission.php">Vision and Mission</a></li>
            <li><a href="../aboutus/program_outcome.php">PO's/PSO/PEO's</a></li>
            <li><a href="../aboutus/BOS.php">Board Of Studies</a></li>
            <li><a href="../aboutus/student_alumni.php">Student and Alumni's</a></li>
          </ul>
        </li>
        <li class="b-left"><a href="#">People
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm88">▾</label>
          </a>
          <input type="checkbox" id="sm88">
          <ul class="sub-menu">
            <li><a href="../people/faculty.php">Faculty</a></li>
            <li><a href="../people/staff.php">Staff</a></li>
          </ul>
        </li>
        <li class="b-left"><a href="#">Academics
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm8">▾</label>
          </a>
          <input type="checkbox" id="sm8">
          </a>
          <ul class="sub-menu">
            <li><a href="../ug/co_cordinator_desk.php">UG</a></li>
            <li>
              <a href="">PG
                <span class="drop-icon">▸</span>
                <label title="Toggle Drop-down" class="drop-icon" for="sm5">▾</label>
              </a>
              <input type="checkbox" id="sm5">
              </a>
              <ul class="sub-menu">
                <li><a href="../pg/me-design.php">M.Tech Design Engineering</a></li>
                <li><a href="../pg/me-heatpower.php">M.Tech Heat Power Engineering</a></li>
              </ul>
            </li>
            <li><a href="../phd/phd_home.php">Ph. D</a></li>
          </ul>
        </li>
        <li class="b-left"><a href="#">Research
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="smr">▾</label>
          </a>
          <input type="checkbox" id="smr">
          </a>
          <ul class="sub-menu">
            <li><a href="../research/research_team.php">Research Team</a> </li>
            <li><a href="../research/sig.php">Special Interest Groups (SIG)</a></li>
            <li><a href="../research/publication.php">Publication</a></li>
            <li><a href="../research/copyright.php">Intellectual Property Rights</a></li>
            <li><a href="../research/research funding.php">Research Funding </a></li>
            <li><a href="../research/cs_projects.php">Consultancy/Sponsored Projects</a></li>
            <li><a href="../research/student_achivements.php">Student Achievements</a></li>
            <li><a href="../research/entrepreneurship.php">Entrepreneurship</a></li>
          </ul>
        </li>

        <li class="b-left"><a href="#">Training & Placement
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm50">▾</label>
          </a>
          <input type="checkbox" id="sm50">
          </a>
          <ul class="sub-menu">
            <li><a href="../placement/recruiter.php">Major Recruiters</a></li>
            <li><a href="../placement/placement.php">Placement</a></li>
            <li><a href="../placement/internship.php">Internship</a></li>
            <li><a href="../placement/training.php">Industrial Visit & Training Program</a></li>
            <li><a href="../placement/mou.php">MOU's</a></li>
          </ul>
        </li>
        <li class="b-left"><a href="#">Facilities
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="smsfc">▾</label>
          </a>
          <input type="checkbox" id="smsfc">
          </a>
          <ul class="sub-menu">
            <li><a href="../facilities/public_html/laboratories.php">Laboratories</a></li>
            <li><a href="../facilities/public_html/library.php">Library</a></li>
            <li><a href="../facilities/public_html/seminar_hall.php">Seminar Hall</a></li>
          </ul>
        </li>
        <li class="b-left"><a href="#">Student Development & Welfare
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="smsdw">▾</label>
          </a>
          <input type="checkbox" id="smsdw">
          </a>
          <ul class="sub-menu">
            <li><a href="../Student_development&Welfare/public_html/higher_studies.php">Higher study cell</a></li>
            <li><a
                href="../Student_development&Welfare/public_html/Communication_Personality_Development.php">Communication
                and Personality Development Cell</a></li>
            <li><a href="../Student_development&Welfare/public_html/professional_development.php">Professional
                Development Cell</a></li>
            <li><a href="../Student_development&Welfare/public_html/ISR.php">Institutional Social Responsibility</a>
            </li>
            <li><a href="../Student_development&Welfare/public_html/nation_services_scheme.php">National Service
                Scheme</a></li>
          </ul>
        </li>
        <li class="b-left"><a href="#">Clubs
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm9">▾</label>
          </a>
          <input type="checkbox" id="sm9">
          </a>
          <ul class="sub-menu">
            <li><a href="../clubs/mesa.php">MESA</a></li>
            <li><a href="../clubs/ambush.php">Team Ambush</a></li>
            <li><a href="../clubs/redbaron.php">Team Red Baron</a></li>
            <li><a href="../clubs/kratos.php">Team Kratos Racing</a></li>
            <li><a href="../clubs/solarium.php">Team Solarium</a></li>
            <li><a href="../clubs/automaton.php">Team Automatons</a></li>
            <li><a href="../clubs/automaton.php">Team Maverick</a></li>
            <li><a href="../clubs/ishrae.php">ISHRAE</a></li>
            <li><a href="../clubs/iei.php">IEI</a></li>
            <li><a href="../clubs/sport.php">Sports</a></li>
          </ul>
        </li>
        <li class="b-left b-right"><a href="../contact_us/contact.php">Contact us</a></li>
      </ul>
    </nav>
  </div>
  <!-- End Navbar -->
  <br><br>
  <section class="p-3 bg-light">
  <div class="container">
      <div class="row border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark mt-4">
          <h2>Grand Alumni Meet 2023</h2>
      </div>
    </div>
    <div class="container-lg bg-light">
      <br>

      <!-- ---------------------------- -->
      <div class="gallery">
          <img src="img/alumini/img (1).JPG" title="TITLE 1">
          <img src="img/alumini/img (2).JPG" title="TITLE 1">
          <img src="img/alumini/img (3).JPG" title="TITLE 2">
          <img src="img/alumini/img (4).JPG" title="TITLE 2">
          <img src="img/alumini/img (5).JPG" title="TITLE 3">
          <img src="img/alumini/img (6).JPG" title="TITLE 3">
          <img src="img/alumini/img (7).JPG" title="TITLE 4">
          <img src="img/alumini/img (8).JPG" title="TITLE 4">
          <img src="img/alumini/img (9).jpg" title="TITLE 5">
          <img src="img/alumini/img (10).jpg" title="TITLE 5">
          <img src="img/alumini/img (11).jpg" title="TITLE 6">
          <img src="img/alumini/img (12).jpg" title="TITLE 6">
          <img src="img/alumini/img (13).JPG" title="TITLE 6">
          <img src="img/alumini/img (14).JPG" title="TITLE 6">
          <!-- <img src="img/alumini/img (15).JPG" title="TITLE 6"> -->
      <!-- ---------------------------- -->
      
    </div>
    </div>
  </section>
  <!-- ----------------------------------------------- Gallery ----------------------------------------------- -->

  </div>

  <style>
    .gallery {
      /* (B1) GRID LAYOUT - 3 IMAGES PER ROW */
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;

      /* (B2) OPTIONAL WIDTH RESTRICT */
      max-width: 1000px;
      margin: 0 auto;
      overflow: hidden;
    }

    .gallery img {
      /* (C1) DIMENSION */
      width: 100%;
      height: 250px;
      /* optional */
      padding: 10px;

      /* (C2) COLORS */
      border: 1px solid #ddd;
      background: #fff;

      /* (C3) IMAGE RESIZE */
      /* cover | contain | fill | scale-down */
      object-fit: contain;
      position: relative;
    }

    /* (D) ON SMALL SCREENS - 2 IMAGES PER ROW */
    @media only screen and (max-width: 600px) {
      .gallery {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    /* (E) OPTIONAL ZOOM ON HOVER */
    .gallery img:hover {
      z-index: 9;
      transform: scale(1.3);
      /* linear | ease | ease-in | ease-out | ease-in-out */
      transition: transform ease 0.5s;
    }

    .gallery img.full {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 999;
      width: 100vw;
      height: 100vh;
      object-fit: fit;
      background: rgba(0, 0, 0, 0.7);
    }

    .gallery img.full:hover {
      z-index: 999;
      transform: none;
    }
  </style>
  <script>
    window.onload = () => {
      for (let i of document.querySelectorAll(".gallery img")) {
        i.onclick = () => i.classList.toggle("full");
      }
    };
  </script>

  <!-- ----------------------------------------------- Gallery ----------------------------------------------- -->
  <!-- start footer -->
  <footer class="container-fluid">
    <div class="row bg-blue d-flex justify-content-center px-5 pb-3 mt-md-4">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="text-white">
          <div class="mt-5">
            <h5>
              <p class="text-white text-center">
                Follow us
              </p>
            </h5>
          </div>
          <div class="d-flex justify-content-evenly align-self-center">
            <a targrt="_blank" href="https://www.instagram.com/pccoepune/" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-instagram"></i>
              </span>
            </a>
            <a targrt="_blank" href="https://www.linkedin.com/company/pccoe-pune/?trk=biz-companies-cym"
              class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-linkedin-in"></i>
              </span>
            </a>
            <a targrt="_blank" href="https://www.facebook.com/PCCOENigadi/" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-facebook"></i>
              </span>
            </a>

            <a targrt="_blank"
              href="https://twitter.com/pccoe_pune?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
              class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-twitter"></i>
              </span>
            </a>
            <a targrt="_blank" href="https://www.youtube.com/channel/UCQiPDETOiteTLmAvvPk1WjA"
              class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-youtube"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>

    </div>
    <div class="row bg-blue d-flex justify-content-center px-5 pt-md-5">
      <div class="col-lg-4 col-md-6 mb-3 ps-md-5">
        <div class="border-bottom border-2 border-white mb-3">
          <h5>
            <p class="text-white">
              <i class="fas fa-map-marker-alt"></i> Location
            </p>
          </h5>
        </div>
        <div class="text-white">
          <address>
            <h6>Sector - 26, Pradhikaran, Nigdi,</h6>
            <h6>Near Akurdi Railway Station,</h6>
            <h6>Pune - 411 044.</h6>
          </address>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3 ps-md-5">
        <div class="border-bottom border-2 border-white mb-3">
          <h5>
            <p class="text-white">
              <i class="fas fa-phone"></i> Contact us
            </p>
          </h5>
        </div>
        <div class="text-white">
          <h6>Tele : 020 – 2765 3168</h6>
          <h6>Tele : 020 – 2765 3166</h6>
          <h6>Ph : +91 9960984347</h6>
          <h6>
            <a targrt="_blank" href="mailto:admin@pccoepune.org" class="text-decoration-none text-white">
              <i class="fas fa-envelope"></i>&nbsp; admin@pccoepune.org</a>
            </a>
          </h6>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-3 ps-md-5">
        <div class="border-bottom border-2 border-white mb-3">
          <h5>
            <p class="text-white">
              <i class="fas fa-link"></i> Useful Links
            </p>
          </h5>
        </div>
        <div>
          <div>
            <p>
              <a targrt="_blank" href="../index.php" class="text-decoration-none text-white">
                <h6>
                  <i class="fas fa-external-link-alt"></i> Homepage
                </h6>
              </a>
            </p>
            <p>
              <a targrt="_blank" href="http://www.pccoepune.com/" class="text-decoration-none text-white">
                <h6>
                  <i class="fas fa-external-link-alt"></i> PCCOE
                </h6>
              </a>
            </p>
            <p>
              <a targrt="_blank" href="http://pcet.org.in/" class="text-decoration-none text-white">
                <h6>
                  <i class="fas fa-external-link-alt"></i> PCET
                </h6>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2500); // Change image every 2 seconds
    }
  </script>

  <?php include("../pccoe-footer.php"); ?>
  <!-- End footer -->
  <script src="../vender/js/bootstrap.bundle.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <!-- <script src="vender/js/navbar.js"></script> -->

</body>

</html>