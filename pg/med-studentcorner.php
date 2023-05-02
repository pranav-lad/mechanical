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
  <!-- PCCOE HEADER FOOTER CSS FILE -->
  <link rel="stylesheet" href="../imp-pccoe-style.css" type="text/css" />
  <!-- Icon Link -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">


  <title>Student Corner | M.tech Design Engineering | PG | Department of Mechanical Engineering at PCCOE</title>
  <style></style>
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
                <li><a href="me-design.php">M.Tech Design Engineering</a></li>
                <li><a href="me-heatpower.php">M.Tech Heat Power Engineering</a></li>
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
            <li><a href="../facilities/public_php/laboratories.php">Laboratories</a></li>
            <li><a href="../facilities/public_php/library.php">Library</a></li>
            <li><a href="../facilities/public_php/seminar_hall.php">Seminar Hall</a></li>
          </ul>
        </li>
        <li class="b-left"><a href="#">Student Development & Welfare
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="smsdw">▾</label>
          </a>
          <input type="checkbox" id="smsdw">
          </a>
          <ul class="sub-menu">
            <li><a href="../Student_development&Welfare/public_php/higher_studies.php">Higher study cell</a></li>
            <li><a href="../Student_development&Welfare/public_php/Communication_Personality_Development.php">Communication and Personality Development Cell</a></li>
            <li><a href="../Student_development&Welfare/public_php/professional_development.php">Professional Development Cell</a></li>
            <li><a href="../Student_development&Welfare/public_php/ISR.php">Institutional Social Responsibility</a></li>
            <li><a href="../Student_development&Welfare/public_php/nation_services_scheme.php">National Service Scheme</a></li>
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


  <br>
  <div class="container-fluid p-3">
    <div class="row">
      <div class="col-lg-3">
        <div class="section mt-4 bg-light">
          <div class="border-bottom border-1 border-primary pt-3">
            <p class="fs-5 color-blue">&nbsp; <i class="fas fa-angle-double-right"></i>&nbsp;Design Engineering</p>
          </div>
        </div>
        <div class="section">

          <ul class="section-list">
            <a href="med-co-ordinatordesk.php">
              <li>Co-ordinator Desk</li>
            </a>
            <a href="med-peoplepage.php">
              <li>People </li>
            </a>
            <a href="med-rnd.php">
              <li>Research and Development</li>
            </a>
            <a href="med-placement.php">
              <li>Internship and Placement</li>
            </a>
            <!-- <a href="">
                            <li>Result Analysis</li>       ?
                        </a> -->
            <a href="med-studentcorner.php">
              <li>Student corner</li>
            </a>
            <a href="med-alumni.php">
              <li>Alumni</li>
            </a>
            <a href="med-contact.php">
              <li>Contact</li>
            </a>
            <!-- <a href="">
              <li>Placement</li>
            </a> -->

          </ul>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="container p-3 mt-4 pb-5 vision-mision bg-light">
          <div class="container-fluid title">Student Corner</div>
          <div class="container-fluid content-panel">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Admission
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">

                    <strong>P.G. Engineering (M.Tech.) Admission</strong>
                    <br>
                    The P. G. Engineering program is a full-time two-year post graduation programme. The program aims towards all round development of the students to make them competent individuals for industry, academia and research.


                    <br><br>
                    <strong>Eligibility Criteria</strong>

                    <p>The information is given below in brief. For details about Engineering Admission and Eligibility Criteria, refer DTE Maharashtra website</p>
                    <ol>
                      <li>For Maharashtra Candidature Candidates and All India Candidature Candidates :
                        <ol type="a">
                          <li>The Candidate should be an Indian National;</li>
                          <li>Passed Bachelor Degree in the relevant field of Engineering and Technology from All India Council for Technical Education or Central or State Government approved institutions or equivalent, with at least 50% marks (at least 45% marks in case of candidates of Backward class categories and persons with disability belonging to Maharashtra State only);

                          </li>
                          <li>Passed Bachelor Degree in the relevant course of Engineering and Technology as specified in the eligibility criteria for admission to a Post Graduate Degree course of the concerned University for which admission is being sought;</li>
                          <li>Obtained score in Graduates Aptitude Test in Engineering (GATE) conducted by Indian Institute of Technology;</li>
                          <li>For sponsored candidates, minimum of two years of full time work experience in a registered firm/ company/industry/ educational and/ or research institute/ any Government Department or Government Autonomous Organization in the relevant field in which admission is being sought.</li>

                        </ol>
                      </li>
                      <br>
                      <li>(2) Children of NRI / OCI / PIO, Children of Indian workers in the Gulf countries, Foreign National :
                      </li>
                      <ol type="a">
                        <li>Passed Bachelor Degree in the relevant field of Engineering and Technology from All India Council for Technical Education or Central or State Government approved institutions or equivalent, with at least 50 % marks;</li>
                        <li>Passed Bachelor Degree in the relevant course of Engineering and Technology as specified in the eligibility criteria for admission to a Post Graduate Degree course of the concerned University for which admission is being sought;</li>
                        <li>Any other criterion declared by appropriate authority from time to time.</li>
                      </ol>


                    </ol>

                    <strong>Documents Required At The Time Of Admission For First Year MBA / MCA / ME / Academic Year 2019-20.
                      <br>

                      The Following Documents Are Required At The Time Of Admission :</strong>
                    <br> <br>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Sr.No.</th>
                          <th scope="col">Documents</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Allotment Letter and ARC Confirmation Letter</td>

                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>MHT-CET / GATE Exam Score Card – Exam held in 2019</td>

                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Statement of Marks – SSC * (10th)</td>

                        </tr>

                        <tr>
                          <th scope="row">4</th>
                          <td colspan="2">Statement of Marks – HSC * (12th)</td>

                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td colspan="2">Diploma / Degree Mark sheet</td>

                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td colspan="2">Leaving Certificate / Transfer Certificate</td>

                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td colspan="2">Equivalent / Migration Certificate (if applicable)</td>

                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td colspan="2">Certificate of Indian Nationality in the name of the Candidate</td>

                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td colspan="2">Domicile Certificate (if applicable), clearly indicating the place of Permanent Residence of the Candidate / Father or Mother or Husband</td>

                        </tr>
                        <tr>
                          <th scope="row">10</th>
                          <td colspan="2">Cast Certificate (if applicable)</td>

                        </tr>
                        <tr>
                          <th scope="row">11</th>
                          <td colspan="2">Cast Validity</td>

                        </tr>
                        <tr>
                          <th scope="row">12</th>
                          <td colspan="2">Non – Creamy Layer Certificate valid up to 31st March 2020 (if applicable)</td>

                        </tr>
                        <tr>
                          <th scope="row">13</th>
                          <td colspan="2">Tahsildar Income Certificate</td>

                        </tr>
                        <tr>
                          <th scope="row">14</th>
                          <td colspan="2">Certificates in Performa A, B, C, D, E, G, J, K, L, O, U and V as applicable</td>

                        </tr>
                        <tr>
                          <th scope="row">15</th>
                          <td colspan="2">Gap Certificate (if applicable)</td>

                        </tr>
                        <tr>
                          <th scope="row">16</th>
                          <td colspan="2">Aadhaar Card and Pan Card (True Copy)</td>

                        </tr>
                        <tr>
                          <th scope="row">17</th>
                          <td colspan="2">Any other relevant document</td>

                        </tr>
                      </tbody>
                    </table>


                  </div>

                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Syllabus
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <button type="button" class="btn btn-primary">
                      <a href="vender\files\syllabus\Final_Syllabus booklet of M.Tech.(Design) 24_09_2021 Copy.pdf" style="color : white; text-decoration : none" target="_blank">
                        M.E. Design Syllabus
                      </a>
                    </button>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Academic Calendar
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <button type="button" class="btn btn-primary">
                      <a href="vender\files\academic_calendar\SY M.Tech Design Sem 2.pdf" style="color : white; text-decoration : none" target="_blank">
                        SY M.Tech Design Engineering - Academic Calendar (Sem 2)
                      </a>
                    </button>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingseven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                    Time Table
                  </button>
                </h2>
                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <button type="button" class="btn btn-primary">
                      <a href="vender\files\timetable\Timetable.pdf" style="color : white; text-decoration : none" target="_blank">
                        Time Table
                      </a>
                    </button>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Results
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="row">
                      <div class="col-6">
                        <table class="table table-hover">
                          <thead class="table-success">
                            <tr>
                              <th colspan="3" class="text-center align-middle">Academic Year 2020-21</th>
                            </tr>
                          </thead>
                          <tr class="table-primary">
                            <th class="text-center align-middle">Year</th>
                            <th class="text-center align-middle">First Year M.E</th>
                            <th class="text-center align-middle">Second Year M.E</th>
                          </tr>
                          <tr>
                            <td>Appeared Students</td>
                            <td>11</td>
                            <td>18</td>
                          </tr>
                          <tr>
                            <td>All Clear Students</td>
                            <td>11</td>
                            <td>18</td>
                          </tr>
                          <tr>
                            <td>All Clear passed (in %)</td>
                            <td>100</td>
                            <td>100</td>
                          </tr>
                          <tr>
                            <td>Quality Result (>=60%)</td>
                            <td>100</td>
                            <td>100</td>
                          </tr>
                          <tr>
                            <td>Distinction</td>
                            <td>10</td>
                            <td>13</td>
                          </tr>
                          <tr>
                            <td>First Class</td>
                            <td>1</td>
                            <td>5</td>
                          </tr>
                        </table>
                      </div>
                      <div class="col-6">
                        <table class="table table-hover">
                          <thead class="table-success">
                            <tr>
                              <th colspan="3" class="text-center align-middle">Academic Year 2019-20</th>
                            </tr>
                          </thead>
                          <tr class="table-primary">
                            <th class="text-center align-middle">Year</th>
                            <th class="text-center align-middle">First Year M.E</th>
                            <th class="text-center align-middle">Second Year M.E</th>
                          </tr>
                          <tr>
                            <td>Appeared Students</td>
                            <td>13</td>
                            <td>18</td>
                          </tr>
                          <tr>
                            <td>All Clear Students</td>
                            <td>10</td>
                            <td>16</td>
                          </tr>
                          <tr>
                            <td>All Clear passed (in %)</td>
                            <td>76.92</td>
                            <td>94</td>
                          </tr>
                          <tr>
                            <td>Quality Result (>=60%)</td>
                            <td>76.92</td>
                            <td>94</td>
                          </tr>
                          <tr>
                            <td>Distinction</td>
                            <td>07</td>
                            <td>09</td>
                          </tr>
                          <tr>
                            <td>First Class</td>
                            <td>03</td>
                            <td>07</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-6">
                        <table class="table table-hover">
                          <thead class="table-success">
                            <tr>
                              <th colspan="3" class="text-center align-middle">Academic Year 2018-19</th>
                            </tr>
                          </thead>
                          <tr class="table-primary">
                            <th class="text-center align-middle">Year</th>
                            <th class="text-center align-middle">First Year M.E</th>
                            <th class="text-center align-middle">Second Year M.E</th>
                          </tr>
                          <tr>
                            <td>Appeared Students</td>
                            <td>17</td>
                            <td>17</td>
                          </tr>
                          <tr>
                            <td>All Clear Students</td>
                            <td>17</td>
                            <td>14</td>
                          </tr>
                          <tr>
                            <td>All Clear passed (in %)</td>
                            <td>100</td>
                            <td>78</td>
                          </tr>
                          <tr>
                            <td>Quality Result (>=60%)</td>
                            <td>70</td>
                            <td>73</td>
                          </tr>
                          <tr>
                            <td>Distinction</td>
                            <td>03</td>
                            <td>12</td>
                          </tr>
                          <tr>
                            <td>First Class</td>
                            <td>09</td>
                            <td>01</td>
                          </tr>
                        </table>
                      </div>
                      <div class="col-6">
                        <table class="table table-hover">
                          <thead class="table-success">
                            <tr>
                              <th colspan="3" class="text-center align-middle">Academic Year 2017-18</th>
                            </tr>
                          </thead>
                          <tr class="table-primary">
                            <th class="text-center align-middle">Year</th>
                            <th class="text-center align-middle">First Year M.E</th>
                            <th class="text-center align-middle">Second Year M.E</th>
                          </tr>
                          <tr>
                            <td>Appeared Students</td>
                            <td>18</td>
                            <td>15</td>
                          </tr>
                          <tr>
                            <td>All Clear Students</td>
                            <td>18</td>
                            <td>15</td>
                          </tr>
                          <tr>
                            <td>All Clear passed (in %)</td>
                            <td>100</td>
                            <td>100</td>
                          </tr>
                          <tr>
                            <td>Quality Result (>=60%)</td>
                            <td>88</td>
                            <td>100</td>
                          </tr>
                          <tr>
                            <td>Distinction</td>
                            <td>12</td>
                            <td>15</td>
                          </tr>
                          <tr>
                            <td>First Class</td>
                            <td>04</td>
                            <td>00</td>
                          </tr>
                        </table>
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col-6 d-flex justify-content-center align-item-center ">
                        <img src="vender\img\result\img1.png" class="card-img shadow-sm" alt="" style="height: auto; width: 470px;">
                      </div>
                      <div class="col-6 d-flex justify-content-center align-item-center ">
                        <img src="vender\img\result\img2.png" class="card-img shadow-sm" alt="" style="height: auto; width: 470px;">
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-6 d-flex justify-content-center align-item-center ">
                        <img src="vender\img\result\img3.png" class="card-img shadow-sm" alt="" style="height: auto; width: 470px;">
                      </div>
                      <div class="col-6 d-flex justify-content-center align-item-center ">
                        <img src="vender\img\result\img4.png" class="card-img shadow-sm" alt="" style="height: auto; width: 470px;">
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-6 d-flex justify-content-center align-item-center ">
                        <img src="vender\img\result\img5.png" class="card-img shadow-sm" alt="" style="height: auto; width: 470px;">
                      </div>
                      <div class="col-6 d-flex justify-content-center align-item-center ">
                        <img src="vender\img\result\img6.png" class="card-img shadow-sm" alt="" style="height: auto; width: 470px;">
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    University Rank Holders
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="mt-5">
                      <table class="table table-hover">
                        <thead class="table-success">
                          <tr>
                            <th colspan="5" class="text-center align-middle">University Rank Positions - 2017</th>
                          </tr>
                        </thead>
                        <tr>
                          <th class="text-center align-middle">1</th>
                          <td class="text-center align-middle">Kalaskar Pratik Vinayakrao</td>
                          <td class="text-center align-middle">9.03</td>
                          <td class="text-center align-middle">Branchwise Rank 4</td>
                        </tr>
                        <tr>
                          <th class="text-center align-middle">2</th>
                          <td class="text-center align-middle">Bhosale Dhanaji Haridas</td>
                          <td class="text-center align-middle">8.95</td>
                          <td class="text-center align-middle">Branchwise Rank 6</td>
                        </tr>
                        <tr>
                          <th class="text-center align-middle">3</th>
                          <td class="text-center align-middle">Mane Sarika Amit</td>
                          <td class="text-center align-middle">8.87</td>
                          <td class="text-center align-middle">Branchwise Rank 7</td>
                        </tr>
                        <tr>
                          <th class="text-center align-middle">4</th>
                          <td class="text-center align-middle">Pawar Shital Macchindra</td>
                          <td class="text-center align-middle">8.82</td>
                          <td class="text-center align-middle">Branchwise Rank 9</td>
                        </tr>
                      </table>
                    </div>
                    <div class="mt-5">
                      <table class="table table-hover">
                        <thead class="table-success">
                          <tr>
                            <th colspan="5" class="text-center align-middle">University Rank Positions - 2016</th>
                          </tr>
                        </thead>
                        <tr>
                          <th class="text-center align-middle">1</th>
                          <td class="text-center align-middle">Wable Yogita Arun</td>
                          <td class="text-center align-middle">9.04</td>
                          <td class="text-center align-middle">Branchwise Rank 3</td>
                        </tr>
                        <tr>
                          <th class="text-center align-middle">2</th>
                          <td class="text-center align-middle">Dhakad Bhushan Rajendra</td>
                          <td class="text-center align-middle">8.99</td>
                          <td class="text-center align-middle">Branchwise Rank 4</td>
                        </tr>
                        <tr>
                          <th class="text-center align-middle">3</th>
                          <td class="text-center align-middle">Joshi Amey Shrish</td>
                          <td class="text-center align-middle">8.88</td>
                          <td class="text-center align-middle">Branchwise Rank 5</td>
                        </tr>
                      </table>
                    </div>
                    <div class="mt-5">
                      <table class="table table-hover">
                        <thead class="table-success">
                          <tr>
                            <th colspan="5" class="text-center align-middle">University Rank Positions - 2015</th>
                          </tr>
                        </thead>
                        <tr>
                          <th class="text-center align-middle">1</th>
                          <td class="text-center align-middle">Dholay Sushant Gulabrao</td>
                          <td class="text-center align-middle">8.87</td>
                          <td class="text-center align-middle">Branchwise Rank 2</td>
                        </tr>
                        <tr>
                          <th class="text-center align-middle">2</th>
                          <td class="text-center align-middle">Kulkarni Akshay Pramod</td>
                          <td class="text-center align-middle">8.76</td>
                          <td class="text-center align-middle">Branchwise Rank 3</td>
                        </tr>
                        <tr>
                          <th class="text-center align-middle">3</th>
                          <td class="text-center align-middle">Swagat Surya Sinha</td>
                          <td class="text-center align-middle">8.57</td>
                          <td class="text-center align-middle">Branchwise Rank 8</td>
                        </tr>
                      </table>
                    </div>
                    <strong>Toppers</strong>
                    <br><br>
                    <strong>ME Design Topper 2014-2016</strong>
                    <br>
                    <center>
                      <img src="toppers/res1.jpg">

                    </center>

                    <strong>ME Design Topper 2013-2015</strong>
                    <br> <br>
                    <center>
                      <img src="toppers/res2.jpg">

                    </center>
                    <br><br>

                    <strong>ME Design Topper 2012-2014</strong>
                    <center>

                      <img src="toppers/res3.jpg">
                    </center>

                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Examination
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Data not available
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>



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
                <a targrt="_blank" href="https://www.linkedin.com/company/pccoe-pune/?trk=biz-companies-cym" class="text-decoration-none text-white">
                  <span class="fs-4">
                    <i class="fab fa-linkedin-in"></i>
                  </span>
                </a>
                <a targrt="_blank" href="https://www.facebook.com/PCCOENigadi/" class="text-decoration-none text-white">
                  <span class="fs-4">
                    <i class="fab fa-facebook"></i>
                  </span>
                </a>

                <a targrt="_blank" href="https://twitter.com/pccoe_pune?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="text-decoration-none text-white">
                  <span class="fs-4">
                    <i class="fab fa-twitter"></i>
                  </span>
                </a>
                <a targrt="_blank" href="https://www.youtube.com/channel/UCQiPDETOiteTLmAvvPk1WjA" class="text-decoration-none text-white">
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
                  <a targrt="_blank" href="index.php" class="text-decoration-none text-white">
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
      <?php include("pccoe-footer.php"); ?>
      <!-- End footer -->
      <script src="../vender/js/bootstrap.bundle.js"></script>
      <!-- <script src="vender/js/navbar.js"></script> -->

</body>

</html>