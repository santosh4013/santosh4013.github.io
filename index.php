<?php

session_start();
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $subject = $_POST['subject'];

  if(!empty($firstname) && !empty($lastname) && !empty($subject)){

    $query = "insert into message (firstname,lastname,subject) values ('$firstname','$lastname','$subject')";
    mysqli_query($con,$query);

    header("Location: G_santosh_profile.php");
    die;

  } else{
    echo "Please enter valid information!";
  }

}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>MyProfile</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="http://localhost/Santosh_profile/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://localhost/Santosh_profile/swiper-bundle.min.css">
  <link rel="stylesheet" href="http://localhost/Santosh_profile/insert.php">
  
  <style>
      
        body{

           background-color: white;
        }
        html {
 scroll-behavior: smooth;
}
        
        .column {
  float: left;
  width: 20%;
  padding-left: 200px;
  padding-top: 30px;
  height: 250px; 
}
.column2 {
  float: left;
  width: 10%;
  
  padding-top: 30px;
  height: 300px; 
}
.column3 {
  float: left;
  width: 30%;
  
  padding-top: 30px;
  height: 300px; 
}
.column4 {
  float: left;
  width: 50%;
  
  padding-top: 500px;
  height: 700px; 
}
.column5 {
  float: left;
  width: 30%;
  
  padding-top: 30px;
  height: 150px; 
}
.column6 {
  float: left;
  width: 50%;
  height: 320px;
  padding-top: 20px;
  
}
.column66 {
  float: left;
  width: 50%;
  height: 400px;
  padding-top: 20px;
  
}
.column7 {
  float: left;
  width: 25%;
  height: 500px;
  padding-top: 20px;
  
}
.column8 {
  float: left;
  width: 50%;
  
  padding-top: 20px;
  
}
.column9{
  float: left;
  width: 40%;
  height: 400px;
  padding-top: 20px;
}
.column10 {
  float: left;
  width: 60%;
  
  padding-top: 20px;
  
}

.column1 a:hover{
    color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
.column1 a{
    left: 200px;       
        font-size: 15px;
        color: black;
        text-align: center;
        padding: 14px 16px ;
        text-decoration: none;
        
}
.middle{
  position: absolute;
  top: 85%;
  left: 10%;
  transform: translate(-50%,-50%);
  
}
.mouse:hover{
    color: rgb(44, 148, 247);
    transition: transform 1s;
    transform: translateX(0px) translateY(40px);

}

.mouse{
  width: 30px;
  height: 48px;
  border: 2px solid rgb(44, 148, 247);
  border-radius: 60px;
  
}
.mouse::before{
  content: "";
  width: 7px;
  height: 7px;
  position: absolute;
  top: 30px;
  background: #333;
  left: 50%;
  transform: translateX(-50%);
  border-radius: 50%;
  opacity: 1;
  
}


.timeline ul li {
  list-style-type: none;
  position: relative;
  width: 3px;
  margin: 0 auto;
  padding-bottom: 50px;
  background: rgb(44, 148, 247);
}
 
.timeline ul li::after {
  content: '';
  position: absolute;
  left: 50%;
  top: 0;
  transform: translateX(-50%);
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: inherit;
  z-index: 1;
}
.timeline ul li div {
  
  top: 0;
  position: relative;
  width: 300px;
  height: 130px;
  padding: 15px;
  
  background: white;
}
 
.timeline ul li div::before {
  content: '';
  
  position: absolute;
  top: 7px;
  width: 0;
  height: 0;
  border-style: solid;
}
.timeline ul li:nth-child(odd) div {
  left: 45px;
  
}
 
.timeline ul li:nth-child(odd) div::before {
  left: -15px;
  border-width: 8px 16px 8px 0;
  border-color: transparent rgb(44, 148, 247) transparent transparent;
}
.timeline ul li:nth-child(even) div {
  left: -339px;
}
 
.timeline ul li:nth-child(even) div::before {
  right: -15px;
  border-width: 8px 0 8px 16px;
  border-color: transparent transparent transparent rgb(44, 148, 247);
}

.skills_container{
  row-gap: 0;
}
.skills_header{
  display: flex;
  align-items: center;
  margin-bottom: 30px;
  cursor: pointer;
}

.skills_icon,
.skills_arrow{
  font-size: 2rem;
  color: rgb(44, 148, 247);
}
.skills_icon{
  margin-right: 15px;
}
.skills_arrow{
  margin-left: 25px;
}
.skills_list{
  row-gap: 1.5rem;
  padding-left: 2.7rem;
}
.skills_title{
  font-size: 20px;
  
}
.skills_titles{
  display: flex;
  justify-content: space-between;
  margin-top: 25px;
}
.skills_name{
  font-size: initial;
}
.skills_bar,
.skills_percentage{
  height: 5px;
  border-radius: 0.25rem;
}
.skills_bar{
  background-color: rgb(199, 215, 236);
}
.skills_percentage{
  display: block;
  background-color: rgb(44, 148, 247);
}
.skills_html{
  width: 90%;
}
.skills_css{
  width: 80%;
}
.skills_js{
  width: 50%;
}
.skills_php{
  width: 60%;
}
.skills_c{
  width: 90%;
}
.skills_cpp{
  width: 80%;
}
.skills_java{
  width: 60%;
}
.skills_python{
  width: 90%;
}
.skills_nlp{
  width: 60%;
}
.skills_cv{
  width: 60%;
}
.skills_dp{
  width: 50%;
}
.skills_as{
  width: 90%;
}
.skills_jav{
  width: 60%;
}
.skills_fb{
  width: 70%;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  height: 300px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.cardbut{
  cursor: pointer;
}

.cardbut:hover{
  background-color: transparent;
  color: none;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  border-radius: 10px;
  width: 50%;
}
.close,.close1,.close2,.close3{
  color: rgb(44, 148, 247);
  float: left;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus,.close1:hover,
.close1:focus {
  color: rgb(252, 4, 4);
  text-decoration: none;
  cursor: pointer;
}
.close2:hover,
.close2:focus,.close3:hover,
.close3:focus{
  color: rgb(252, 4, 4);
  text-decoration: none;
  cursor: pointer;
}
.certificate_container{
  overflow: initial;
  z-index: 1;
}
.certificate_content{
  padding: 0 1.5rem;
}
.certificate_img{
  
  border-radius: 0.5rem;
  justify-self: center;
}
.certificate_title{
  margin-top: 25px;
  margin-bottom: 25px;
}
.certificate_description{
  margin-bottom: 25px;
}

.certificate_button:hover .button_icon{
  transform: translateX(0.25rem);
}

.swiper-pagination-bullets{
  top: 250px;
}
.swiper-button-prev,
.swiper-button-next,
.swiper-pagination-bullet{
  outline: none;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background-color: rgb(44, 148, 247);
  z-index: 1;
  font-size: 20px;
  
}
.fa-instagram {
  background: rgb(44, 148, 247);
  color: white;
  font-size: 25px;
}
.fa-facebook {
  background: rgb(44, 148, 247);
  color: white;
  font-size: 25px;
}
.fa-linkedin {
  background: none;
  color: white;
  font-size: 25px;
}

#TopBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 16px;
  border: none;
  outline: none;
  background-color: rgb(44, 148, 247);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#TopBtn:hover{
  background-color: rgb(145, 143, 141);
}
      
  </style>
    </head>
    <body >
      <button onclick="topFunction()" id="TopBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
        <div class="root sticky" >
        <div class="column" >
            <h2 style="padding-right: 100px;">Santosh</h2>
        </div>
        <div class="column1" style="padding-left: 700px; padding-top: 30px; height: 100px;">
            
            <a href="#home" >HOME</a>
            <a href="#about" >ABOUT</a>
            <a href="#skill" >SKILLS</a>
            <a href="#project" >PROJECTS</a>
            <a href="#certi" >CERTIFICATIONS</a>
            <a href="#contact" >CONTACT ME</a>
        </div>
        </div>
        
        <div class="root" id="home">
            <div class="column2" style="padding-top: 210px;">
                <a href="https://www.linkedin.com/in/santosh-reddy-9a45aa205/" target="_blank"><i class="fa fa-linkedin" style="font-size:20px;color:rgb(44, 148, 247)"></i></a><br><br><br>
                <a href="#" target="_blank"><i class="fa fa-google" style="font-size:20px;color:rgb(44, 148, 247)"></i></a><br><br><br>
                <a href="https://github.com/santosh4013" target="_blank"><i class="fa fa-github" style="font-size:20px;color:rgb(44, 148, 247)"></i></a><br>
                
            </div>
            <div class="column3" style="padding-top: 135px; ">
                <h1 style="font-size: 50px;">Hi, I'm Santosh</h1>
                <h1>Software Engineer</h1><br>
                <h2 style="color: rgb(165, 162, 162);">I'm Fresh Engineer graduate with high level of experience in programming and Machine Learning, Producing quality work.</h2><br>
                <button style="border-radius: 6px;background-color: rgb(44, 148, 247);color: white; height: 55px;border-color: white;" onclick=""><a href="#contact" style="text-decoration: none; color: white;"><h2>Contact Me  <i class="fa fa-arrow-right"></i> </h2></a></button>
            </div>
            <div class="column2" style="padding-top: 135px;" >
                <img src="http://localhost/Santosh_profile/tuxpi.com.1639548107.jpg"  width="300" height="310"> 
            </div>
            </div>
            
            <div class="middle">
                
                <div class="mouse" >
                    <a href="#about" style="text-decoration: none;"><h2 style="padding-left: 50px;padding-top: 10px;color: black;">Scrolldown!</h2></a>
                   
                </div>
                
              </div>
              
              
            <div style="padding-top: 650px;" >
              <p id="about"></p>
              <br><br><br><br><br><br>
              <center><h1 style="font-size: 40px;">About Me</h1>
                <h3 style="color: rgb(165, 162, 162);">My introduction</h3></center></div>
            
            <div class="root" >
              <div class="column4" style="padding-top: 70px;padding-left: 240px; padding-right: 20px;">
                <h2 style="color: rgb(165, 162, 162);">A Fresh engineering graduate, seeking an opportunity as an entry-level position, in order to collect relevant 
                  knowledge in the field of Machine Learning, Software Development with special interests in areas like Computer 
                  Vision, Web and App Development and related fields, and provide outcomes that would enable both
                  organization & professional growth</h2><br><br>
                  <div class="root">
                    <div class="column5">
                      <h1 style="font-size: 40px;">5+</h1>
                        <h2 style="color: rgb(165, 162, 162);">Completed<br> Projects</h2>
                    </div>
                    <div class="column5">
                      <h1 style="font-size: 40px;">3+</h1>
                        <h2 style="color: rgb(165, 162, 162);">Cirtifications</h2>
                    </div>
                    <div class="column5">
                      <h1 style="font-size: 40px;">10+</h1>
                        <h2 style="color: rgb(165, 162, 162);">Skills</h2>
                    </div>
                  </div>
                  <div class="root">
                <div class="column5">
                  <button style="border-radius: 10px;background-color: rgb(44, 148, 247);color: white; height: 60px;border-color: white;"><a href="https://drive.google.com/file/d/1DZjDO1TzcBWxPyE_6il5EXBEvmB7gt7x/view?usp=sharing" style="text-decoration: none; color: white;" target="_blank" download><h2>Download CV <i class="fa fa-download"></i></h2></a></button>
                  

              </div></div></div>
              
          
              <div class="column4" style="padding-top: 70px; padding-left: 120px;">
                <img src="https://media.istockphoto.com/vectors/big-man-presenting-vector-id1284173490?k=20&m=1284173490&s=612x612&w=0&h=otfLDfr4DYbi_FeKPvbNph9tASdt6i7nI7b_u2Md83E="  width="370" height="320"> 
                
            </div>
</div>

<div style="padding-top: 650px;">
  <p id="quali"></p><br><br><br><br><br><br>
  <div >
    <center><h1 style="font-size: 40px;">Qualification</h1>
      <h3 style="color: rgb(165, 162, 162);">My Personal journey</h3></center><br></div>
    <center><div><h2 style="color: rgb(44, 148, 247);"><i class="fa fa-graduation-cap" style="color: rgb(44, 148, 247);"></i> Education</h2></div></center>  
  <section class="timeline" style="padding-top: 50px;">
    <ul>
      <li>
        <div>
          <h2>Degree</h2>
          
          
<h4 style="color: rgb(139, 137, 137);">Course - Computer Science Engineering<br>
University - Amrita Vishwa Vidyapeetham, Coimbatore
<br>
CGPA - 7.9/10 (up to 4th semester)<br><br><i class="fa fa-calendar"></i>
2019 - 2023 </h4>
        </div>
      </li>
      <li>
        <div>
          <h2>Higher Secondary Education</h2>
          
<h4 style="color: rgb(139, 137, 137);">Subjects - M.P.C, English and Sanskrit<br>
Institution - Tirumala Junior College, Rajahmundry
<br>Grade - 9.94/10<br><br><i class="fa fa-calendar"></i> 2017-1019 </h4>

        </div>
      </li>
      <li>
        <div>
          <h2>Secondary Education</h2>
          
<h4 style="color: rgb(139, 137, 137);">Institution - Tirumala Proactive School, Rajahmundry<br>
Board - Board of Secondary Education of Andhra Pradesh<br>
Grade - 9.7/10<br><br><i class="fa fa-calendar"></i> 2016-2017 </h4>
        </div>
      </li>
      <!-- more list items here -->
    </ul>
  </section>
</div>
<div>
  <p id="skill"></p><br><br><br><br><br><br>
<div style="padding-top: 100px;">
  <center><h1 style="font-size: 40px;">Skills</h1>
    <h3 style="color: rgb(165, 162, 162);">My technical level</h3></center><br><br><br><br></div>

<div class="root">
  <div class="column6" style="padding-left: 220px; padding-right: 100px;">
<div class="skills_container">
  <div>
    <div class="skills_content">
       <div class="skills_header"><h4 style="color: rgb(139, 137, 137);"><i class="skills_icon">{ }</i></h4>
      <div>
        <h1 class="skills_title">Web development</h1>
        <span class="skills_subtitle"><h4 style="color: rgb(139, 137, 137);">More than 1 year</h4></span>
      </div>
      <i class="fa fa-angle-down skills_arrow"></i>
      </div>
      <div class="skills_list">
        <div class="skills_data">
          
          <div class="skills_titles">
            <h3 class="skills_name">HTML</h3>
            <span class="skills_number">
              <h4 style="color: rgb(139, 137, 137);">90%</h4></span>
          </div>
          <div class="skills_bar">
            <span class="skills_percentage skills_html"></span>
          </div>
        </div>

        <div class="skills_data">
          <div class="skills_titles">
            <h3 class="skills_name">CSS</h3>
            <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">80%</h4></span>
          </div>
          <div class="skills_bar">
            <span class="skills_percentage skills_css"></span>
          </div>
      </div>

      <div class="skills_data">
        <div class="skills_titles">
          <h3 class="skills_name">JavaScript</h3>
          <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">50%</h4></span>
        </div>
        <div class="skills_bar">
          <span class="skills_percentage skills_js"></span>
        </div>
    </div>
    <div class="skills_data">
      <div class="skills_titles">
        <h3 class="skills_name">PHP/SQL</h3>
        <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">60%</h4></span>
      </div>
      <div class="skills_bar">
        <span class="skills_percentage skills_php"></span>
      </div>
  </div>
  
</div>
</div></div></div></div></div>
<div class="column6" style="padding-left: 100px; padding-right: 220px;">
  <div class="skills_container">
    <div>
      <div class="skills_content">
         <div class="skills_header"><h4 style="color: rgb(139, 137, 137);"><i class="fa fa-desktop skills_icon"></i></h4>
        <div>
          <h1 class="skills_title">Programming</h1>
          <span class="skills_subtitle"><h4 style="color: rgb(139, 137, 137);">More than 2 year</h4></span>
        </div>
        <i class="fa fa-angle-down skills_arrow"></i>
        </div>
        <div class="skills_list">
          <div class="skills_data">
            <div class="skills_titles">
              <h3 class="skills_name">C</h3>
              <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">90%</h4></span>
            </div>
            <div class="skills_bar">
              <span class="skills_percentage skills_c"></span>
            </div>
          </div>
  
          <div class="skills_data">
            <div class="skills_titles">
              <h3 class="skilla_name">C++</h3>
              <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">80%</h4></span>
            </div>
            <div class="skills_bar">
              <span class="skills_percentage skills_cpp"></span>
            </div>
        </div>
  
        <div class="skills_data">
          <div class="skills_titles">
            <h3 class="skills_name">Java</h3>
            <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">60%</h4></span>
          </div>
          <div class="skills_bar">
            <span class="skills_percentage skills_java"></span>
          </div>
      </div>
      <div class="skills_data">
        <div class="skills_titles">
          <h3 class="skills_name">Python</h3>
          <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">90%</h4></span>
        </div>
        <div class="skills_bar">
          <span class="skills_percentage skills_python"></span>
        </div>
    </div>
    
  </div>
  </div></div></div></div>
  
</div>
<div class="root">
  <div class="column66" style="padding-left: 220px; padding-right: 100px;">
    <div class="skills_container">
      <div>
        <div class="skills_content">
           <div class="skills_header"><h4 style="color: rgb(139, 137, 137);"><i class="fa fa-database skills_icon"></i></h4>
          <div>
            <h1 class="skills_title">Machine Learning</h1>
            <span class="skills_subtitle"><h4 style="color: rgb(139, 137, 137);">More than 1 year</h4></span>
          </div>
          <i class="fa fa-angle-down skills_arrow"></i>
          </div>
          <div class="skills_list">
            
    
            <div class="skills_data">
              <div class="skills_titles">
                <h3 class="skills_name">NLP</h3>
                <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">60%</h4></span>
              </div>
              <div class="skills_bar">
                <span class="skills_percentage skills_nlp"></span>
              </div>
          </div>
    
        <div class="skills_data">
          <div class="skills_titles">
            <h3 class="skills_name">OpenCV</h3>
            <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">60%</h4></span>
          </div>
          <div class="skills_bar">
            <span class="skills_percentage skills_cv"></span>
          </div>
      </div>
      <div class="skills_data">
        <div class="skills_titles">
          <h3 class="skills_name">DeepLearning</h3>
          <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">50%</h4></span>
        </div>
        <div class="skills_bar">
          <span class="skills_percentage skills_dp"></span>
        </div>
    </div>
    </div>
    </div></div></div></div>

    <div class="column66" style="padding-left: 100px; padding-right: 220px;">
      <div class="skills_container">
        <div>
          <div class="skills_content">
             <div class="skills_header"><h4 style="color: rgb(139, 137, 137);"><i class="fa fa-android skills_icon"></i></h4>
            <div>
              <h1 class="skills_title">Android App Development</h1>
              <span class="skills_subtitle"><h4 style="color: rgb(139, 137, 137);">More than 1 year</h4></span>
            </div>
            <i class="fa fa-angle-down skills_arrow"></i>
            </div>
            <div class="skills_list">
              
      
              <div class="skills_data">
                <div class="skills_titles">
                  <h3 class="skills_name">Android Studio</h3>
                  <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">90%</h4></span>
                </div>
                <div class="skills_bar">
                  <span class="skills_percentage skills_as"></span>
                </div>
            </div>
      
          <div class="skills_data">
            <div class="skills_titles">
              <h3 class="skills_name">Java</h3>
              <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">60%</h4></span>
            </div>
            <div class="skills_bar">
              <span class="skills_percentage skills_jav"></span>
            </div>
        </div>
        <div class="skills_data">
          <div class="skills_titles">
            <h3 class="skills_name">FireBase DB</h3>
            <span class="skills_number"><h4 style="color: rgb(139, 137, 137);">70%</h4></span>
          </div>
          <div class="skills_bar">
            <span class="skills_percentage skills_fb"></span>
          </div>
      </div>
      </div>
      </div></div></div></div>


</div>


<div style="padding-top: 100px; " >

  <center><h1 style="font-size: 40px;" >Projects</h1>
    
    <h3 style="color: rgb(165, 162, 162);" id="project">My works</h3></center><br><br><br><br></div>
    
<div class="root">
  <div class="column7" style="padding-left: 160px;">
    <div class="card">
      <div class="container" style="padding-top: 80px;">
        <i class="fa fa-gear" style="padding-top: 10px;padding-left: 10px;font-size: 40px;color: rgb(44, 148, 247);"></i>
        <h3 style="padding-top: 30px;"><b>Restaurant Recommendation System</b></h3><br><br> 
        <button id="myBtn" class="cardbut" style="padding: 0; background-color: transparent; color: rgb(44, 148, 247);border: none;"><p>View More <i class="fa fa-arrow-right"></i></p></button> 
        
        <div id="myModal" class="modal">

          <div class="modal-content">
            <span class="close">&times;</span>
            <h4 style="color: black;"><br><br><i class="fa fa-check"></i> Topic - Review Based Restaurant Recommendation system
              <br><br><i class="fa fa-check"></i> Duration/Period - 08/2021 - 11/2021(3 months)
              <br><br><i class="fa fa-check"></i> Objective - Is to Recommend Restaurants for the users based on his/her reviews or ratings.
              <br><br><i class="fa fa-check"></i> Tools or techniques used - Machine Learning, Natural language processing, scikit learn.
              <br><br><i class="fa fa-check"></i> Outcome - A Recommendation model used to recommend restaurants to the users based on their previous 
              reviews on restaurants and other similar ratings.</h4>
          </div>
        
        </div>
        
      </div>
      
    </div>
  </div>
  <div class="column7" style="padding-left: 100px; padding-right: 60px;">
    <div class="card">
      <div class="container" style="padding-top: 80px;">
        <i class="fa fa-hand-stop-o" style="padding-top: 10px;padding-left: 10px;font-size: 40px;color: rgb(44, 148, 247);"></i>
        <h3 style="padding-top: 30px;"><b>Hand Gesture Finger Counting and Face Detection</b></h3><br><br> 
        <button id="myBtn1" class="cardbut" style="padding: 0; background-color: transparent; color: rgb(44, 148, 247);border: none;"><p>View More <i class="fa fa-arrow-right"></i></p></button> 
        <div id="myModal1" class="modal">

          <div class="modal-content">
            <span class="close1">&times;</span>
            <h4 style="color: black;"><br><br><i class="fa fa-check"></i> Topic - Hand Gesture Finger Counting and Face Detection
              <br><br><i class="fa fa-check"></i> Duration/Period - 5/2021 (1 month)
              <br><br><i class="fa fa-check"></i> Objective - Is to recognize human hand.
              <br><br><i class="fa fa-check"></i> Tools or techniques used - Machine Learning, Open CV, Tensor flow
              <br><br><i class="fa fa-check"></i> Outcome - Model recognize hand and face through webcam and finds count of fingers using points of gesture</h4>
          </div>
        
        </div>
      </div>
    </div>
  </div>
  <div class="column7" style="padding-left: 100px; padding-right: 60px;">
    <div class="card">
      <div class="container" style="padding-top: 80px;">
        <i class="fa fa-android" style="padding-top: 10px;padding-left: 10px;font-size: 40px;color: rgb(44, 148, 247);"></i>
        <h3 style="padding-top: 50px;"><b>Car Rental Application</b></h3><br><br> 
        <button id="myBtn2" class="cardbut" style="padding: 0; background-color: transparent; color: rgb(44, 148, 247);border: none;"><p style="padding-top: 20px;">View More <i class="fa fa-arrow-right"></i></p></button> 
        <div id="myModal2" class="modal">

          <div class="modal-content">
            <span class="close2">&times;</span>
            <h4 style="color: black;"><br><br><i class="fa fa-check"></i> Topic - Car Rental Application
              <br><br><i class="fa fa-check"></i> Duration/Period: 8/2020 - 11/2020 (3 months)
              <br><br><i class="fa fa-check"></i> Objective - Is to provide car rental system through online for the users greater than 18 years of age and should 
              have a proof of identity.
              <br><br><i class="fa fa-check"></i> Tools or techniques used - HTML, CSS, PHP, DBMS, SQL, Android Studio, Java, Firebase DB
              <br><br><i class="fa fa-check"></i> Outcome - A Car Rental website and mobile app for user who is eligible can successfully book or rent car in 
              the available list according to his/her location.</h4>
          </div>
        
        </div>
      </div>
    </div>
  </div>
  
  <div class="column7" style=" padding-right: 160px;">
    <div class="card">
      <div class="container" style="padding-top: 80px;">
        <i class="fa fa-users" style="padding-top: 10px;padding-left: 10px;font-size: 40px;color: rgb(44, 148, 247);"></i>
        <h3 style="padding-top: 40px;"><b>Social Distancing Detection</b></h3><br><br> 
        <button id="myBtn3" class="cardbut" style="padding: 0; background-color: transparent; color: rgb(44, 148, 247);border: none;"><p style="padding-top: 10px;">View More <i class="fa fa-arrow-right"></i></p></button> 
        <div id="myModal3" class="modal">

          <div class="modal-content">
            <span class="close3">&times;</span>
            <h4 style="color: black;"><br><br><i class="fa fa-check"></i> Topic - Social Distancing Detection
              <br><br><i class="fa fa-check"></i> Duration/Period - 12/2021 - ongoing
              <br><br><i class="fa fa-check"></i> Objective - Is to detect weather group of people are following the social distancing or not
              <br><br><i class="fa fa-check"></i> Tools or techniques used - Machine Learning, Open CV, Tensor flow
              <br><br><i class="fa fa-check"></i> Outcome - The model to detect the social distancing between people in a video or through real time cameras.</h4>
          </div>
          
        </div>
      </div>
      <p id="certi"></p>
    </div>
    
  </div>
  
</div>

<div style="padding-top: 200px;">
  <center><h1 style="font-size: 40px;">Certifications</h1>
    <h3 style="color: rgb(165, 162, 162);">My Achievments</h3></center><br><br><br><br></div>

    <div class="certificate_container container swiper mySwiper root">
      <div class="swiper-wrapper" >
        <div class="certificate_content grid swiper-slide column8" style="padding-left: 200px;">
          <img src="https://1.bp.blogspot.com/-Rakb-kbPxg0/XkUH07odptI/AAAAAAAAc3s/cJIQ8NWUfhM91LeINc0Jif6LzK6-St4AgCLcBGAsYHQ/w1200-h630-p-k-no-nu/Programming%2Bfor%2BEverybody%2B%2528Getting%2BStarted%2Bwith%2BPython%2529%2BCoursera%2BBest%2Bcourse.png" alt="" class="certificate_img" width="320px" height="200px">
          <div class="certificate_data column8">
            <h3 class="certificate_title">Python for Everybody</h3>
            <h4 style="color: rgb(165, 162, 162);" class="certificate_description">All the topics of python including SQL database handling from basics to higher level with 5 projects included.</h4>
            <button style="border-radius: 6px; background-color: rgb(44, 148, 247); height: 45px; border-color: white; width: 80px;"><a style="text-decoration: none;" href="#" class="button-flex button-small certificate_button">
              <h3 style="color: white;">View  <i class="fa fa-arrow-right button_icon"></i></h3>
              
            </a></button>
          </div>
        </div>
        <div class="certificate_content grid swiper-slide column8" style="padding-left: 200px;">
          <img src="https://miro.medium.com/max/1400/1*c_fiB-YgbnMl6nntYGBMHQ.jpeg" alt="" class="certificate_img" width="320px" height="200px">
          <div class="certificate_data column8">
            <h3 class="certificate_title">Machine Learning with python</h3>
            <h4 style="color: rgb(165, 162, 162);" class="certificate_description">All the topics of machine Learning including from basics to higher level with 5 industry level projects included.</h4>
            <button style="border-radius: 6px; background-color: rgb(44, 148, 247); height: 45px; border-color: white; width: 80px;"><a style="text-decoration: none;" href="#" class="button-flex button-small certificate_button">
              <h3 style="color: white;">View  <i class="fa fa-arrow-right button_icon"></i></h3>
              
            </a></button>
          </div>
        </div>
        <div class="certificate_content grid swiper-slide column8" style="padding-left: 200px;">
          <img src="https://miro.medium.com/max/1400/1*sMryEXZVPKFjGNcfSzE8Mw.jpeg" alt="" class="certificate_img" width="320px" height="200px">
          <div class="certificate_data column8">
            <h3 class="certificate_title">Data Structures and Algorithms</h3>
            <h4 style="color: rgb(165, 162, 162);" class="certificate_description">Learned all the topics in Data Structures usong python  and applications like dynamic programming also included.</h4>
            <button style="border-radius: 6px; background-color: rgb(44, 148, 247); height: 45px; border-color: white; width: 80px;"><a style="text-decoration: none;" href="#" class="button-flex button-small certificate_button">
              <h3 style="color: white;">View  <i class="fa fa-arrow-right button_icon"></i></h3>
              
            </a></button>
          </div>
        </div>
        
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
      
    </div><br><br><br>
    <div style="padding-top: 200px;" id="contact">
      <center><h1 style="font-size: 40px;">Contact Me</h1>
        <h3 style="color: rgb(165, 162, 162);">Get in touch</h3></center><br><br><br><br></div>
      
    <div class="root">
      <div class="column9" style="padding-left: 250px;">
        <h3><i class="fa fa-phone" style="padding-left: 10px;font-size: 40px;color: rgb(44, 148, 247);"></i>  Call Me</h3>
        <h4 style="color: rgb(165, 162, 162); padding-left: 40px;"> +91 9652419077</h4><br><br>
        <h3><i class="fa fa-envelope" style="padding-left: 10px;font-size: 35px;color: rgb(44, 148, 247);"></i>  Email</h3>
        <h4 style="color: rgb(165, 162, 162); padding-left: 50px;"> santoshreddy4013@gmail.com</h4><br><br>
        <h3><i class="fa fa-map-marker" style="padding-left: 10px;font-size: 40px;color: rgb(44, 148, 247);"></i>  Location</h3>
        <h4 style="color: rgb(165, 162, 162); padding-left: 40px;"> komaripalem - ITI, A.P</h4>

      </div>
      <div class="column10" style="padding-right: 300px;">
        <form method="post">
          <label for="fname"><h4>First Name</h4></label>
          <input type="text" id="fname" name="firstname" placeholder="Your name.." style="border-radius: 10px; font-size: 15px; background-color: rgb(199, 215, 236);" required>
          <label for="lname"><h4>Last Name</h4></label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name.." style="border-radius: 10px;font-size: 15px; background-color: rgb(199, 215, 236);" required>
          
          <label for="subject"><h4>Message</h4></label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px;border-radius: 10px;font-size: 15px; background-color: rgb(199, 215, 236);"></textarea><br>
          <button style="border-radius: 10px; background-color: rgb(44, 148, 247); color: white; height: 45px; border-color: white; width: 150px;" type="submit" value="submit"><h4>Send Message <i class="fa fa-arrow-right"></i></h4></button><br><br><br>
        </form><br><br><br>

      </div>

    </div><br><br><br>

    
    <div class="root" style="padding-top: 300px;">
      <div class="column9" style="padding-left: 250px; height: 250px; background-color: rgb(44, 148, 247); color: white;">
        <h1>Santosh</h1><br>
        <h4>Software Engieneer</h4>
      </div>
      <div class="column10" style="padding-right: 220px; height: 250px; background-color: rgb(44, 148, 247); color: white; margin:0px;
      display: inline;">
      <a href="#home" style="text-decoration: none; font-size: 20px; color: white; ">Project</a>
      <a href="#about" style="text-decoration: none; font-size: 20px; color: white; padding-left: 40px;">Profolio</a>
      <a href="#skill" style="text-decoration: none; font-size: 20px; color: white; padding-left: 40px;">ContactMe</a>
      <a href="https://www.facebook.com/profile.php?id=100016020309295" class="fa fa-facebook" style="text-decoration: none;padding-left: 200px;" target="_blank"></a>
      <a href="https://www.linkedin.com/in/santosh-reddy-9a45aa205/" class="fa fa-linkedin" style="text-decoration: none;padding-left: 50px;" target="_blank"></a>
      <a href="https://www.instagram.com/g_santosh26/" class="fa fa-instagram" style="text-decoration: none;padding-left: 50px;" target="_blank"></a>
<br><br><br><br><br><br><br><br><br>
      <h3 style="color: white; ">@SantoshReddy, All rights reserved</h3>

      </div>

      

    </div>



<script type = "text/JavaScript">
  // Get the modal
  var modal = document.getElementById("myModal");
  var modal1 = document.getElementById("myModal1");
  var modal2 = document.getElementById("myModal2");
  var modal3 = document.getElementById("myModal3");
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");
  var btn1 = document.getElementById("myBtn1");
  var btn2 = document.getElementById("myBtn2");
  var btn3 = document.getElementById("myBtn3");
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  var span1 = document.getElementsByClassName("close1")[0];
  var span2 = document.getElementsByClassName("close2")[0];
  var span3 = document.getElementsByClassName("close3")[0];
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }
  btn1.onclick = function() {
    modal1.style.display = "block";
  }
  btn2.onclick = function() {
    modal2.style.display = "block";
  }
  btn3.onclick = function() {
    modal3.style.display = "block";
  }
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  span1.onclick = function() {
    modal1.style.display = "none";
  }
  span2.onclick = function() {
    modal2.style.display = "none";
  }
  span3.onclick = function() {
    modal3.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
    if (event.target == modal1) {
      modal1.style.display = "none";
    }
    if (event.target == modal2) {
      modal2.style.display = "none";
    }
    if (event.target == modal3) {
      modal3.style.display = "none";
    }

  }

  let swiper = new Swiper(".certificate_container", {
        cssMode: true,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        
      });

      var mybutton = document.getElementById("TopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

  </script>
    </body>
</html>