<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>PDC | Student_Development_welfare | Department Of Mechanical Engineering at PCCOE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		
	<!--for title logo-->
    <link href="../../vender/img/logo/PCCOE_LOGO_b.jpg"  rel="shortcut icon" type="image/x-icon">

 <link rel="stylesheet" href="imp-pccoe-style.css" type="text/css"/>
    <!--for icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        
         <link rel="stylesheet" href="bootstrap.min.css" type="text/css"/>
         <link href="../../vender/css/navbar.css" rel="stylesheet" />
		 <link href="../../vender/css/style1.css" rel="stylesheet" />
     <style>
       * {
         margin: 0;
       }
     </style>
    </head>
    <body>
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
            <li class="b-left"><a href="../../index.php">Home</a></li>
            <li class="b-left"><a href="#">About us
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm0">▾</label>
                </a>
                <input type="checkbox" id="sm0">
                <ul class="sub-menu">
                    <li><a href="../../aboutus/hod_desk.php">HOD Desk</a></li>
                    <li><a href="../../aboutus/vision-mission.php">Vision and Mission</a></li>
                    <li><a href="../../aboutus/program_outcome.php">Program Outcomes</a></li>
                    <li><a href="../../aboutus/BOS.php">Board Of Studies</a></li>
                    <li><a href="../../aboutus/student_alumni.php">Student and Alumni's</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">People
              <span class="drop-icon">▾</span>
              <label title="Toggle Drop-down" class="drop-icon" for="sm88">▾</label>
              </a>
              <input type="checkbox" id="sm88">
              <ul class="sub-menu">
                  <li><a href="../../people/faculty.php">Faculty</a></li>
                  <li><a href="../../people/staff.php">Staff</a></li>
              </ul>
          </li>
            <li class="b-left"><a href="#">Academics
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm8">▾</label>
                </a>
                <input type="checkbox" id="sm8">
                </a>
                <ul class="sub-menu">
                    <!--<li>
                      <a href="">UG
                        <span class="drop-icon">▸</span>
                        <label title="Toggle Drop-down" class="drop-icon" for="smug">▾</label>
                      </a>
                      <input type="checkbox" id="smug">
                      </a>
                      <ul class="sub-menu">
                          <li><a href="../../ug/workshop_organised.php">Workshop Organised</a></li>
                          <li><a href="../../ug/workshop_attended.php">Workshop Attended</a></li>
                          <li><a href="../../ug/course_outline.php">Course Outline</a></li>
                          <li><a href="../../ug/activity_calender.php">Activity Calendar</a></li>
                      </ul>
                    </li>-->
					<li><a href="../../ug/co_cordinator_desk.php">UG</a></li>
                    <li>
                      <a href="">PG
                        <span class="drop-icon">▸</span>
                        <label title="Toggle Drop-down" class="drop-icon" for="sm5">▾</label>
                      </a>
                      <input type="checkbox" id="sm5">
                      </a>
                      <ul class="sub-menu">
                          <li><a href="../../pg/me-design.php">M.Tech Design Engineering</a></li>
                          <li><a href="../../pg/me-heatpower.php">M.Tech Heat Power Engineering</a></li>
                      </ul>
                    </li>
                    <li><a href="../../phd/phd_home.php">Ph. D</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Research
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smr">▾</label>
                </a>
                <input type="checkbox" id="smr">
                </a>
                <ul class="sub-menu">
                    <li><a href="../../research/sig.php">Research Team</a></li>
					<li><a href="research/sig.php">Special Interest Groups (SIG)</a></li>
                    <li><a href="../../research/publication.php">Publication</a></li>
                    <li><a href="../../research/copyright.php">Intellectual Property Rights</a></li>
                    <li><a href="../../research/research funding.php">Research Funding </a></li>
                    <li><a href="../../research/cs_projects.php">Consultancy/Sponsored Projects</a></li>
                    <li><a href="../../research/student_achivements.php">Student Achievements</a></li>
                    <li><a href="../../research/entrepreneurship.php">Entrepreneurship</a></li>
                </ul>
            </li>

            <li class="b-left"><a href="#">Training & Placement
              <span class="drop-icon">▾</span>
              <label title="Toggle Drop-down" class="drop-icon" for="sm50">▾</label>
              </a>
              <input type="checkbox" id="sm50">
              </a>
              <ul class="sub-menu">
                  <li><a href="../../placement/recruiter.php">Major Recruiters</a></li>
                  <li><a href="../../placement/placement.php">Placement</a></li>
                  <li><a href="../../placement/internship.php">Internship</a></li>
                  <li><a href="../../placement/training.php">Industrial Visit & Training Program</a></li>
                  <li><a href="../../placement/mou.php">MOU's</a></li>
              </ul>
            </li>
            <li class="b-left"><a href="#">Facilities
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smsfc">▾</label>
                </a>
                <input type="checkbox" id="smsfc">
                </a>
                <ul class="sub-menu">
                    <li><a href="../../facilities/public_html/laboratories.php">Laboratories</a></li>
                    <li><a href="../../facilities/public_html/library.php">Library</a></li>
					<li><a href="../../facilities/public_html/seminar_hall.php">Seminar Hall</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Student Development & Welfare
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smsdw">▾</label>
                </a>
                <input type="checkbox" id="smsdw">
                </a>
                <ul class="sub-menu">
                    <li><a href="higher_studies.php">Higher study cell</a></li>
                    <li><a href="Communication_Personality_Development.php">Communication and Personality Development Cell</a></li>
                    <li><a href="professional_development.php">Professional Development Cell</a></li>
                    <li><a href="ISR.php">Institutional Social Responsibility</a></li>
                    <li><a href="nation_services_scheme.php">National Service Scheme</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Clubs
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm9">▾</label>
                </a>
                <input type="checkbox" id="sm9">
                </a>
                <ul class="sub-menu">
                    <li><a href="../../clubs/mesa.php">MESA</a></li>
                    <li><a href="../../clubs/ambush.php">Team Ambush</a></li>
                    <li><a href="../../clubs/redbaron.php">Team Red Baron</a></li>
                    <li><a href="../../clubs/kratos.php">Team Kratos Racing</a></li>
                    <li><a href="../../clubs/solarium.php">Team Solarium</a></li>
                    <li><a href="../../clubs/automaton.php">Team Automatons</a></li>
                    <li><a href="../../clubs/maverick.php">Team Maverick</a></li>
                    <li><a href="../../clubs/ishrae.php">ISHRAE</a></li>
                    <li><a href="../../clubs/iei.php">IEI</a></li>
                    <li><a href="../../clubs/sport.php">Sports</a></li>
                </ul>
            </li>
            <li class="b-left b-right"><a href="../../contact_us/contact.php">Contact us</a></li>
        </ul>
    </nav>
  </div>
  <!-- End Navbar -->
  <br>
    <section class="p-3">
	   <div class="container-lg">
	   <br>
	   <div class="border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark">
	   <h2>Professional Development Cell</h2>
       </div>
        <div class="bg-light shadow rounded p-3">
          <div class="border-bottom border-1 border-primary mb-3">
            <p class="fs-3 text-primary">About us</p>
          </div>
        <div class="row my-3">
          <div class="col-lg-9 col-md-12">
              
            <p class="my-4 text-dark">
                <h4>Objective</h4>
                <p>To arrange various technical skill development and foreign language training programs to improve professional 
                standards and to develop personality of students.</p>
       
        <p class="my-4 text-dark">
                <h4>Functions</h4>
                <ul>
                    <li>To encourage students for enhancing their technical skills through various training programs like IBM certification, MSIT Certification, SAP, CAD-CAM etc. or any such program.</li>
                    <li>To develop tie-up/MOU with any such organization as per plan and need analysis.</li>
                    <li>To monitor and control effective conduct of such program ensuring regular attendance, active participation and involvement of students.
                        To carry out feedback analysis after conclusion of the program.</li>
                    <li>To create awareness among students about growing importance for foreign language study.</li>
                    <li>Encourage students to learn foreign language and acquire required proficiency through certification exams.</li>
                </ul>
           
           
            </p>
          </div>
		  
          <div class="col-lg-3 col-md-6 align-item-center justify-content-center d-flex">
            <div class="card" style="width: 100%;">
              <img src="hsc_images/Vrushali Bhalerao.jpg" class="card-img" alt="Image of faculty advisor">
              <div class="card-body">
                <p class="card-text text-center "><span class="fw-bold">Mrs. V. Y. Bhalerao</span><br/>
                  <span class="text-secondary fw-light">Faculty Coordinator</span></p>
              </div>
            </div>
			</div>
          </div>
      
     
    </section>

    
        
    <section class="mt-4">
      <div class="container-lg ">
        <div class="bg-light shadow rounded p-3">
          <div class="border-bottom border-1 border-primary mb-3">
            <p class="fs-3 text-primary">Events under the cell</p>
          </div>
		  
          <div class="row my-3">
          <div class="col-lg-12 col-md-12">
            <p class="my-4 text-dark">
                <div class="d-flex justify-content-center p-4">
                  <button type="button" class="btn btn-primary btn-lg">
                    Academic Year 2021-22
                  </button>
                </div>
                <br>
                <h4>Technical Add On Courses:</h4>
                <br>
                <p>In 2021-22 Sem I as taking the technical add on courses 
                  was challenging due to Covid 19 pandemic, online teaching 
                  learning, the students have done certification courses online. 
                  Various platforms available are: NPTEL Coursera Udemy, Edx, 
                  IIT Spoken Tutorial.
                </p>
        
          </div> 
      </div>

      <div>
        <p class="fw-bold">The list of activities are as follows:</p>
        <div class="table-responsive-lg">
          <table class="table table-hover  table-bordered">
            <thead class="table-primary">
              <tr>
                <th scope="col" class="text-center align-middle">Sr no.</th>
                <th scope="col" class="text-center align-middle">Academic year / Semester</th>
                <th scope="col" class="text-center align-middle">Add-on course</th>
                <th scope="col" class="text-center align-middle">Objective of Add on Course</th>
                <th scope="col" class="text-center align-middle">Conduction agency</th>
                <th scope="col" class="text-center align-middle">Duration (hrs)</th>
                <th scope="col" class="text-center align-middle">No. of student’s participant</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>2021-22 Sem I</td>
                <td>
                  <ol>
                    <li>MOOC certification course Related to BE theory subjects HAP Fundamentals of Fluid Power</li>
                    <li>Coursera</li>
                    <li>Mechanics of materials 2</li>
                    <li>Thin walled pressure vessels and torsion</li>
                    <li>Courses on platform like Coursera, NPTEL etc.</li>
                  </ol>
                </td>
                <td>To get details about concepts related to various theory subjects.</td>
                <td>MOOC-Coursera, NPTEL, EdX</td>
                <td>4 weeks, 6 weeks, 8 weeks</td>
                <td><b>BE - 38</b></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>2021-22 Sem I</td>
                <td>
                  <ol>
                    <li>MOOC certification course Related to TE theory subjects</li>
                    <li>Numerical and Statistical methods (NSM) related Python 
                      Programming on platform like Analytics Vidya , NPTEL ,IIT etc.</li>
                  </ol>
                </td>
                <td>
                  To get details about hands on training on Python programming.
                </td>
                <td>MOOC-Coursera, NPTEL, EdX</td>
                <td>4 weeks, 6 weeks, 8 weeks</td>
                <td>
                    <ul>
                      <li>TE A-65</li>
                      <li>TE B-32</li>
                      <li>TE C-68</li>
                    </ul>
                    <b>TOTAL TE-165</b>
                </td>
              </tr>
      
              <tr>
                <th scope="row">3</th>
                <td>2021-22 Sem I</td>
                <td>
                  <ol>
                    <li>MOOC certification course Related to SY BTech theory subjects</li>
                    <li>Numerical methods Statistical Data Visualization with Seaborn Form UST</li>
                    <li>Use Canva to Design Digital Course Collateral on platform on platform like Coursera , NPTEL etc.</li>
                  </ol>
                </td>
                <td>
                <ol>
                  <li>To get details about concepts related to various theory subjects.</li>
                </ol>
                </td>
                <td>MOOC-Coursera, NPTEL, EdX</td>
                <td>4 weeks, 6 weeks, 8 weeks</td>
                <td><b>SY B.Tech - Total 23</b></td>
              </tr> 
      
              <tr>
                <th scope="row">4</th>
                <td>2021-22 Sem I</td>
                <td>FOSS- Python Programming
                </td>
                <td>
                  To make the students aware about latest technology
                </td>
                <td>IIT Spoken Tutorials</td>
                <td>3 months, exam taken on-08 Dec 2021.</td>
                <td><b>BE - appeared 11, exam cleared - 10</b></td>
              </tr> 
      
              <tr>
                <th scope="row">5</th>
                <td>2021-22 Sem I</td>
                <td>FOSS- Python Programming</td>
                <td>To make the students aware about latest technology</td>
                <td>IIT Spoken Tutorials</td>
                <td>3 months ,exam taken on - 09 Dec 2021</td>
                <td><b>TE - appeared 75, exam cleared - 65</b></td>
              </tr> 
      
              <tr>
                <th scope="row">6</th>
                <td>2021-22 Sem I</td>
                <td>FOSS- C programming</td>
                <td>To make the students aware about latest technology</td>
                <td>IIT Spoken Tutorials</td>
                <td>3 months ,exam taken on - 28 Dec 2021</td>
                <td><b>SY BTech - appeared 13, exam cleared - 11</b></td>
              </tr>  
            </tbody>
          </table>
          Total almost 320 students have done the online certification from various platforms in 2021-22 Sem I.
        </div>
      </div>

		  <div class="row my-3">
          <div class="col-lg-12 col-md-12">
            <p class="my-4 text-dark">
                <div class="d-flex justify-content-center p-4">
                  <button type="button" class="btn btn-primary btn-lg">
                    Academic Year 2020-21
                  </button>
                </div>
                <br>
                <h4>Technical Add On Courses:</h4>
                <br>
                <p>About the technical add-on courses, due to COVID-19 
                  Pandemic situation, the hands on sessions organization 
                  was not possible . The option to this is thought of as 
                  various MOOC (Massive Open Online Courses), webinar, 
                  workshop related to recent technologies. Due to COVID-19 
                  Coursera has given almost 4000 logins to PCCOE students 
                  and faculty, free from April- September2020.Various students 
                  have taken advantage of this free logins for course completion 
                  and certification as well. The activities carried out in 2020-21 
                  Sem I and Sem II has been given with relevant details.
                </p>
          </div> 
      </div>
			 
			
      <div>
      <p class="fw-bold">The list of activities are as follows:</p>
			<div class="table-responsive-lg">
            <table class="table table-hover  table-bordered">
              <thead class="table-primary">
                <tr>
                <th scope="col" class="text-center align-middle">Sr no.</th>
                <th scope="col" class="text-center align-middle">Academic year / Semester</th>
                <th scope="col" class="text-center align-middle">Add-on course</th>
                <th scope="col" class="text-center align-middle">Objective of the Add on Course</th>
                <th scope="col" class="text-center align-middle">Conduction agency</th>
                <th scope="col" class="text-center align-middle">Duration (hrs)</th>
                <th scope="col" class="text-center align-middle">No. of student’s participant</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>2020-21 Sem I</td>
                  <td>MOOC certification course Related to TE theory subjects like 
                  <ol>
                    <li>Machine Design Part 1</li>
                    <li>Introduction to thermodynamics: Transferring energy from here to there</li>
                    <li>Fundamentals of Fluid Power</li>
                  </ol>
                  </td>
                  <td>To get details about concepts related to various theory subjects.</td>
                  <td>MOOC-Coursera, NPTEL, EdX</td>
                  <td>4 weeks, 6 weeks, 8 weeks</td>
                  <td><b>121 - TE</b></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>2020-21 Sem I</td>
                  <td>MOOC certification course for TE students like personality development and technical ability enhancement as 
                    <ol>
                      <li>Resume Writing</li>
                      <li>Career planning</li>
                      <li>Resume/CV, cover letter, interview Etc</li>
                    </ol>
                  </td>
                  <td>
                    <ol>
                      <li>To improve students communication and leadership skills.</li>
                      <li>To improve the ability and knowledge needed to perform specific tasks.</li>
                    </ol>
                  </td>
                  <td>MOOC-Coursera, NPTEL, EdX</td>
                  <td>4 weeks, 6 weeks, 8 weeks</td>
                  <td><b>121 - TE</b></td>
                </tr>
				
                <tr>
                  <th scope="row">3</th>
                  <td>2020-21 Sem I</td>
                  <td>MOOC certification course for BE students related to projects like 
                    <ol>
                      <li>Project Management: The Basics for Success</li>
                      <li>Design Thinking for Innovation etc.<li>
                    </ol>
                  </td>
                  <td>
                  <ol>
                    <li>To make them understand the concepts of Project Management for planning to execution of projects.</li>
                    <li>To design innovative and desirable products, services or experiences.</li>
                  </ol>
                  </td>
                  <td>MOOC-Coursera, NPTEL, EdX</td>
                  <td>4 weeks, 6 weeks, 8 weeks</td>
                  <td><b>23 - BE</b></td>
                </tr> 
				
                <tr>
                  <th scope="row">4</th>
                  <td>2020-21 Sem II</td>
                  <td>MOOC certification course.
                  </td>
                  <td>
                    <ol>
                      <li>Theory related courses will enhance specific knowledge.</li>
                      <li>Curricular based courses will help in overall development.</li>
                    </ol>
                  </td>
                  <td>MOOC-Coursera, NPTEL, EdX</td>
                  <td>4 weeks, 6 weeks, 8 weeks</td>
                  <td><b>TE - 76</b></td>
                </tr> 
				
				        <tr>
				          <th scope="row">5</th>
                  <td>2020-21 Sem II</td>
                  <td>FOSS- C programming</td>
				          <td>To make the students aware about latest technology</td>
                  <td>IIT Spoken Tutorials</td>
                  <td>3 months, exam taken on 5 July 2021</td>
                  <td>SE - appeared 56, exam cleared - 48</td>
                </tr> 
				
                <tr>
                  <th scope="row">6</th>
                  <td>2020-21 Sem II</td>
                  <td>FOSS- Synfig </td>
                  <td>To make the students aware about latest technology</td>
                  <td>IIT Spoken Tutorials</td>
                  <td>3 months, exam taken on 6 July 2021</td>
                  <td>TE-appeared 36 , exam cleared - 30</td>
                </tr> 
                
                
                <tr>
                  <th scope="row">7</th>
                  <td>2020-21 Sem II</td>
                  <td>FOSS- Arduino</td>
                  <td>To make the students aware about latest technology</td>
                  <td>IIT Spoken Tutorials</td>
                  <td>3 months, exam taken on 5 July 2021</td>
                  <td>SE - appeared 55, exam cleared - 53</td>
                </tr> 
				
                <tr>
                  <th scope="row">8</th>
                  <td>2020-21 Sem II</td>
                  <td>FOSS- Scilab</td>
                  <td>To make the students aware about latest technology</td>
                  <td>IIT Spoken Tutorials</td>
                  <td>3 months, exam taken on 6 July 2021</td>
                  <td>TE - appeared 36 , exam cleared - 30</td>
                </tr> 
				
                <tr>
                  <th scope="row">9</th>
                  <td>2020-21 Sem II</td>
                  <td>Steam Engineering & Energy Conservation</td>
                  <td>
                  <ol>
                    <li>To acquaint and make students to understand the fundamentals of steam system in process heating with special emphasis on the steam and condensate loop and its design.</li>
                    <li>To develop an ability amongst the students to design a steam system , assess it's performance and improve its contribution to energy conservation.</li>
                  </ol>
                  </td>
                  <td>Forbes Marshall Pvt. Ltd. Pimpri, Pune</td>
                  <td>2020-21 Sem II</td>
                  <td><b>19</b></td>
                </tr> 
              </tbody>
            </table>
            <div>
              <div>
                About the Foreign Language certification received by our students:
              </div>
              <div class="my-5 fw-bold">
                List of students appeared for the examination of German A1 & A2 
                of Goethe-Institute, Pune in the months of November and December 2021.
              </div>
              <table class="table table-hover  table-bordered">
                <thead>
                  <tr>
                    <th scope="col" class="text-center align-middle">Sr no.</th>
                    <th scope="col" class="text-center align-middle">Name of the Student</th>
                    <th scope="col" class="text-center align-middle">Score</th>
                    <th scope="col" class="text-center align-middle">Roll no.</th>
                    <th scope="col" class="text-center align-middle">Exam Date</th>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="5"><b class="ms-5"s>German A2 level</b><span class="ms-5"> At Max Muller Bhavan, Pune</span></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Animesh Wani</td>
                    <td>72%</td>
                    <td>BEMEB252</td>
                    <td>29.11.2021</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Malhar Rahul Khole</td>
                    <td>65%</td>
                    <td>BEMEA149</td>
                    <td>29.11.2021</td>
                  </tr>
                  <tr>
                    <td colspan="5"><b class="ms-5"s>German A1 level</b></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Saurabh Sambhaji Nachan</td>
                    <td>85%</td>
                    <td>BEMEC329</td>
                    <td>03.12.2021</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Devashish Shivajirao Shinde</td>
                    <td>83%</td>
                    <td>SYMEC347</td>
                    <td>04.12.2021</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Aditi Milind Adkar</td>
                    <td>76%</td>
                    <td>SYMEA102</td>
                    <td>11.12.2021</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Atharva Anurag Abhyankar</td>
                    <td>68%</td>
                    <td>SYMEA101</td>
                    <td>03.12.2021</td>
                  </tr>
                  <tr>
                    <td colspan="5"><b class="ms-5"s>Japanese N4 level</b><span class="ms-5">At JALTAP, Pune.</span></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Tejas Vibhandik</td>
                    <td>114/180</td>
                    <td>SYME</td>
                    <td>05/12/2021</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Viren Chiplunkar</td>
                    <td>124/180</td>
                    <td>BEMEA</td>
                    <td>05/12/2021</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
      </div>
        </p> 
		
		
            
             <div class="row my-3">
             <div class="col-lg-12 col-md-12">
              
            <p class="my-4 text-dark">
            <div class="d-flex justify-content-center p-4">
                  <button type="button" class="btn btn-primary btn-lg">
                    Academic Year 2019-20
                  </button>
            </div>
            <br>
			        <h4>Technical Add On Courses:</h4><br>
              <div class="my-4">
                <h5>1) GD & T (5 Days' STTP):</h5><br>
                <dl class="row">
                  <dt class="col-sm-3">Objective</dt>
                  <dd class="col-sm-9">Acquaintance with ASME Y 14.5 Series & associated laid down aspects.</dd>
                  <dt class="col-sm-3">Conduction agency</dt>
                  <dd class="col-sm-9">MechaTol Solutions, Pune</dd>
                </dl>
                <div>Event was conducted on Sept 7 to 11, 2019 and 23 Students participated in course.</div>
              </div>
            
               
              <div class="my-4">
                <h5>2) Catia V5 Certification:</h5><br>
                <dl class="row">
                  <dt class="col-sm-3">Objective</dt>
                  <dd class="col-sm-9">To train and assess the students in CATIA Part Modelling, Assembly, Simulation.</dd>
                  <dt class="col-sm-3">Conduction agency</dt>
                  <dd class="col-sm-9">Dassault Systems</dd>
                </dl>
                <div>Event was conducted on October / November, 2019 and 190 Students participated in course.</div>
              </div>
             </div> 
             </div>
                
              <div class="row my-3">
              <div class="col-lg-6 col-md-6 d-flex justify-content-center">
              <div class="card text-center" style="width: 350px; height: 350px;">
            <img src="hsc_images/pdc1 (1).jpg" class="img-thumbnail mb-3">
            <p><span>Mr. Sheetalaprasad along with appearing & Qualified candidates</span></p>
          </div>
          </div>   
                <div class="col-lg-6 col-md-6 d-flex justify-content-center">
              <div class="card text-center" style="width: 350px; height: 350px;">
            <img src="hsc_images/pdc1 (2).jpg" class="img-thumbnail mb-3">
            <p><span>Qualified candidates accompany Mr. Ishan Sathone Sir</span></p>
      </div>
      </div>  
      </div>
            
             <div class="row my-3">
          <div class="col-lg-12 col-md-12">
              
            <p class="my-4 text-dark">
            <div class="d-flex justify-content-center p-4">
                  <button type="button" class="btn btn-primary btn-lg">
                    Academic Year 2018-19
                  </button>
            </div><!-- comment -->
            <h4>Technical Add On Courses:</h4><br>
            <div class="my-4">
                <h5>1) Hands on training on Part Modelling using 3D Experience</h5><br>
                <dl class="row">
                  <dt class="col-sm-3">Objective</dt>
                  <dd class="col-sm-9">
                    <ol>
                      <li>To Train the students on 3D Experience platform of Dassault Systems</li>
                      <li>To get certified by appearing for online examination from Dassault Systems.</li>
                    </ol>  
                  </dd>
                  <dt class="col-sm-3">Conduction agency</dt>
                  <dd class="col-sm-9">Mr. I. R. Sathone (PCCoE Mechanical faculty) coordinated event 
                    and he was faculty instructor of the course as well. Started from 15th October,160 Hrs. 
                    22 Students from UG and PG participated in course and completed.</dd>
                </dl>
            </div>

            <div class="my-4">
                <h5>2) Hand on Training on Hypermesh</h5><br>
                <dl class="row">
                  <dt class="col-sm-3">Objective</dt>
                  <dd class="col-sm-9">
                    <ol>
                      <li>To train the students to create finite element models for analysis</li>
                      <li>To prepare high-quality meshes in an efficient manner.</li>
                    </ol>  
                  </dd>
                  <dt class="col-sm-3">Conduction agency</dt>
                  <dd class="col-sm-9">Designtech Systems Pvt. Ltd.</dd>
                </dl>
                <div>Course conducted on 3rd & 4th July 2018, 30 Hrs. 20 PG Design students, 5 Faculty participated and completed the course.</div>
            </div>

            <div class="my-4">
                <h5>3) VLCI training program on Observation skills</h5><br>
                <dl class="row">
                  <dt class="col-sm-3">Objective</dt>
                  <dd class="col-sm-9">
                    <ol>
                      <li>Create a virtuous cycle of the industry, academia and engineering students.</li>
                      <li>Create a WIN-WIN relationship amongst 3 elements.</li>
                      <li>Build talents of next generation.</li>
                    </ol>  
                  </dd>
                  <dt class="col-sm-3">Conduction agency</dt>
                  <dd class="col-sm-9">Anand Group</dd>
                </dl>
                <div>Event was conducted on 8th September 2018, 13 Hrs.48 Students of TE participated in event.</div>
            </div>

            <div class="my-4">
                <h5>4) Steam engineering and energy conservation</h5><br>
                It is a 40 hrs course.<br><br>
                <dl class="row">
                  <dt class="col-sm-3">Objective</dt>
                  <dd class="col-sm-9">
                    <ol>
                      <li>To make students industry ready in related area</li>
                    </ol>  
                  </dd>
                  <dt class="col-sm-3">Conduction agency</dt>
                  <dd class="col-sm-9">Forbes Marshall</dd>
                </dl>
                <div>Course was started from 1/7/2019 and 25 students of final year UG participated.</div>
                <div class="row">
                  <div class="col-6 p-5">
                  <b>Placement due to steam engineering course 2018-19 :</b><br><br>
                    <b>Shubham Mallikarjun Nesaragi</b> (Forbes Marshall, Graduate Trainee Engg., Energy Services)<br>
                    <b>Vishal Vijay Chausalkar</b> (Forbes Marshall, Graduate)<br><br>
                  </div>
                  <div class="col-6 d-flex justify-content-center p-3">
                    <img src="hsc_images/pdc_img.jpg" class="card-img shadow-sm" alt="" style="height: auto; width: 350px;">
                  </div>
                </div>
            </div>

            <div class="my-4">
                <h5>5) VLCI training program</h5><br>
                <dl class="row">
                  <dt class="col-sm-3">Objective</dt>
                  <dd class="col-sm-9">Evolution of Modern Manufacturing</dd>
                  <dt class="col-sm-3">Conduction agency</dt>
                  <dd class="col-sm-9">VLCI (Anand group)</dd>
                </dl>
                <div>Course was conducted on 23rd February 2019 and 32 Students from SE and TE participated.</div>
            </div>

            <div class="my-4">
                <h5>3) VLCI training program on Observation skills</h5><br>
                <dl class="row">
                  <dt class="col-sm-3">Objective</dt>
                  <dd class="col-sm-9"></dd>
                  <dt class="col-sm-3">Conduction agency</dt>
                  <dd class="col-sm-9">EDS Technologies Pvt. Lrd.</dd>
                </dl>
                <div>Event was conducted on 26th March 2019 and 25 Students from ME (Design and Heat Power) participated in course.</div>
            </div>
                
                
            
                
                
            
               
             </div> 
             </div>
      </div> 
      </div>
    <section>
 
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
            <a targrt="_blank"  href="mailto:admin@pccoepune.org" class="text-decoration-none text-white">
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
            <a targrt="_blank"  href="index.php" class="text-decoration-none text-white">
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
</footer><?php include("pccoe-footer.php"); ?>

<script src="js/bootstrap.bundle.js"></script>
	  
    </body>
</html>
