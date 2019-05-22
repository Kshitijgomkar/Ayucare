<!DOCTYPE html>
<html lang="en">
<head>
    <?php     include 'server/config.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<header role="banner">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="img/ayucare-5.png" alt="" height="4%" width="4%" style="margin:1%;float:left">
          <a class="navbar-brand" href="index.html">Ayucare<span>+</span></a>
          
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#section1">Courses</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#section2">Faculty</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section3">Enquiry</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="server/gallery1/">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section5">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        include 'server/Courses.php';
        $obj = new Courses;
        $details = $obj->getCourseDetails($id);
    }
?>
<h1><?php echo $details[1];?></h1><center>
<h4><b>Duration: </b><?php echo $details[4];?></h4>
<h4><b>Requirements: </b><?php echo $details[2];?></h4>
</center>
<h4><b>Sylabus</b></h4>
<h6>
<?php echo $details[6];?>
</h6>
<?php

    $obj = new Connection;
    $conn = $obj->connect();
    if(isset($_POST['submit'])){
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $DOB = $_POST['DOB'];
        $Email = $_POST['Email'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $address = $_POST['Address'];
        $course = $_POST['course'];
        $sql = "insert into student (name,email,phone,gender,DOB, state, country,address,course) values ('$FirstName $LastName','$Email','$phone','$gender','$DOB','$state','$country','$address','$course')";
        if($conn->query($sql) === TRUE){
        }else{
            echo "Error : ".$sql ."<br>".$conn->error;
        }
    }
  ?>
      <a href="#" class="cta-link element-animate" style="background:#12e86b;" data-animate-effect="fadeIn" data-toggle="modal" data-target="#modalReg">
   <span class="sub-heading">click here for</span>
   <span class="heading">Student Registrations</span>
    </a>
    <div class="modal fade" id="modalReg" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalAppointmentLabel" >Register Here</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST">
              <div class="form-group">
                <label for="appointment_name" class="text-black">First Name</label>
                <input type="text" class="form-control" id="FisrtName" name="FirstName" required>
              </div>
              <div class="form-group">
                <label for="appointment_name" class="text-black">Last Name</label>
                <input type="text" class="form-control" id="LastName" name="LastName" required>
              </div>
              <div class="form-group">
                    <label for="appointment_phone" class="text-black">Date Of Birth</label>
                    <input type="date" class="form-control" id="DOB" name="DOB" required>
                  </div>    
                  <div class="form-group">
                    <label for="appointment_phone" class="text-black">Email ID</label>
                    <input type="text" class="form-control" id="Email" name="Email" required>
                  </div>  <br />
                  <div class="form-group">
                    <label for="appointment_name" class="text-black">Gender</label>
                    <input type="radio" name="gender" value="male" name="gender"> Male
                    <input type="radio" name="gender" value="female" name="gender"> Female <br><br>
                  </div>
                  <div class="form-group">
                        <label for="appointment_phone" class="text-black">Phone No</label>
                        <input type="text" class="form-control" id="Phone" name="phone" required>
                      </div> 
                      <div class="form-group">
                    <label for="appointment_message" class="text-black">Address</label>
                    <input type="textarea" id="Address" class="form-control" cols="20" rows="5" name="Address"/>
                  </div>
                  <div class="form-group">
                      <div class="form-group">
                            <label for="appointment_phone" class="text-black">state</label>
                              <input type="text" class="form-control" id="state" name="state">
                       </div>                    
                      <div class="form-group">
                            <label for="appointment_phone" class="text-black">Country</label>
                            <input type="text" class="form-control" id="country" name="country">
                          </div> 
                          <?php 
                             $course_obj = new Courses;
                             $courses = $course_obj->fetchCourses();
                           ?>                                               
                      <div class="form-group">
                      <label for="appointment_phone" class="text-black">Select Course</label>
                           <select name="course" class="form-control">
                            <?php
                                foreach($courses as $course){
                                  if($course[5] == 1){
                             ?>
                            <option name=" <?php echo $course[1]; ?>">
                                    <?php echo $course[1]; ?>
                            </option>
                                <?php 
                                  }
                              } 
                              
                            ?>
                           </select> 
                           
                          </div> 
                    <input type="submit" value="submit" class="btn btn-primary" name="submit" onclick="update()">
                  </div>
                 
</form>
          </div>
</div>
<footer class="site-footer" role="contentinfo">
   <div class="container" id="section5">
     <div class="row mb-5 element-animate">
       <div class="col-md-3 mb-5">
         <h3>Address</h3>
         <a> Plot No-19,Vidya Vihar, Wathoda Layout, Pandan Road, Nagpur. </a>
       </div>
       <div class="col-md-3 mb-5">
         <h3>City</h3>
           <a>Nagpur , Maharashtra</a>
       </div>
       <div class="col-md-3 mb-5">
         <h3>Contact Us on-</h3>
           <a> 8999425673 , 832930725 , 8983695209.</a>
       </div>
       <div class="col-md-3 mb-5">
           <h3>Email Us on -</h3>
             <a> xyz.abc@gmail.com</a>
         </div>

     
     <div class="row pt-md-3 element-animate">
       <div class="col-md-12">
         <hr class="border-t">
       </div>
       <div class="col-md-6 col-sm-12 copyright">
         <p>&copy; 2019 Generated. <strong>Designed  by -</strong> Whisky Software Solutions </a></p>
       </div>
       <div class="col-md-6 col-sm-12 text-md-right text-sm-left">
         <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
         <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
         <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
       </div>
     </div>
   </div>
 </footer>
 <!-- END footer -->


 <!-- Modal -->
 
</body>
</html>