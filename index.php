<!doctype html>
<?php
  include_once 'server/Notification.php';
  include_once 'server/Courses.php';
?>
<html lang="en">
  <head>
    <title>Ayucare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
 <style>

      .scroll-bar-wrap {
        width: 600px;
        position: relative;
        margin: 2em auto;
      }
      .scroll-box {
        width: 100%;
        height: 295px;
        overflow-y: scroll;
      }
      .scroll-box::-webkit-scrollbar {
        width: .4em; 
      }
      .scroll-box::-webkit-scrollbar,
      .scroll-box::-webkit-scrollbar-thumb {
        overflow:visible;
        border-radius: 4px;
      }
      .scroll-box::-webkit-scrollbar-thumb {
        background: rgba(0,0,0,.2); 
      }
      .cover-bar {
        position: absolute;
        background: #fff;;
        height: 100%;  
        top: 0;
        right: 0;
        width: .4em;
        -webkit-transition: all .5s;
        opacity: 1;
      }
      /* MAGIC HAPPENS HERE */
      .scroll-bar-wrap:hover .cover-bar {
         opacity: 0;
        -webkit-transition: all .5s;
      }
</style>
</head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    
    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
              <ul class="social list-unstyled">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-7 text-right">
              <p class="mb-0">
                <a href="#" class="cta-btn" data-toggle="modal" data-target="#modalAppointment">Make an Appointment</a></p>
            </div>
          </div>
        </div>
      </div>
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
                <a class="nav-link active" href="#">Home</a>
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
    </header>
    <!-- END header -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-1.jpg');height:80;">
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
            <h1 style="color:black;font-size:88px;">AYUCARE</h1>
              </div>
          </div>
        </div>
        
      </div>
      <div class="slider-item" style="background-image: url('img/slider-2.jpg');height:80%;">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
             </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->
    <section class="section stretch-section">
    <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Why Choose Us</h2>
            <p class="mb-0 lead">
                Specialized training in all type of
                product making<br>
                Complete training in various cosmetic
                
                beauty procedures.
                specialized training in Trichology
                procedures like PRP, Mesotherapy,
                Hair analysis, stem cells etc.
            </p>
          </div>
        </div>

      <div class="container">
      <table cellpadding="50px">
        <tr>
          <td>
          <h2 class="text-uppercase heading border-bottom mb-4">Notices</h2>
          <div class="scroll-bar-wrap">
          <div class="scroll-box" style="width:100%;">
          <p class="mb-0 lead">
                <?php
                    $notification_obj = new Notification;
                    $notifications = $notification_obj->fetchNotification();
                    foreach ($notifications as $notification){
                      echo "<b><a style='color:red;' href='book.php'>".$notification. "</a></b><br>";
                    }
                ?>
            </p>

          </div>
          </div>
          </td>
          <td style="width:60%;">
          <h2 class="text-uppercase heading border-bottom mb-4">Introduction</h2>
          <div class="scroll-bar-wrap">
  <div class="scroll-box" style="width:100%;">
    <p>Cosmetology procedures and
Ayurvedic cosmetic products are making
high impact for doctors in modern day
practice Ayurveda is an ancient science
of medicine serving in cosmetic product
making and procedures since decades
Ayurvedic cosmetic products and procedures

are very famous f exported Worldwide.
ATCTs private unaided stand alone
institute registered under GOI, offering
skill enhancement training to qualified
and registered medical practitioner. We
Hake the opportunity to offer a comprehensive and detailed training in cosmetology,
trichology and ayurvedic product making
to produce brillant
career beads clinical cosmetologists who
have complete knowledge of the subject of
command all the skills techniques
procedures this

ATCT preudes ayurveda product naklag
training cosmetology training to dedors
with full dedication. Based on product</p>
    <p>baking experience and large amount of
    patients through the att attached oPp
    We provide you proper hands-on training
    and as you throughout outcome
    ensures that you lean and complete
    each session with perfection and
    day of this unique cosmetology
    build your confidence with energy
    course</p>
  </div>
  <div class="cover-bar"></div>
</div>
          </td>
        </tr>
      </table>
    <section class="section bg-light">
      <div class="container" id="section1">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
          <h2 class="text-uppercase heading border-bottom mb-4">Our Courses</h2>
                      </div>
        </div>
        
        <div class="row element-animate">
        
          <div class="major-caousel js-carousel-2 owl-carousel">
            <?php
              $course_obj = new Courses;
              $courses = $course_obj->fetchCourses();
              $i = 0;
              foreach($courses as $course) {
                if($course[5] == 1){
            ?>
          <div>
          <div class="media d-block media-custom text-left">
            <div class="media-body">
              
              <h3 class="mt-0 text-black"><a href="#" class="text-black"><?php echo $courses[$i][1]?></a></h3>
              <p><?php echo $courses[$i][2]?></p>
              <span class="meta-post"><?php echo $courses[$i][4]?></span>
              <p class="clearfix">
                
              <a onclick="getCourse(<?php echo $courses[$i][0]; ?>)" class="float-left">Read more</a>
                
                <!--number of student enrolled
                  <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 14</a>-->
              </p>
              
            </div>
          </div>
        </div>
              <?php 
                }
              $i++; 
            } ?>        
          </div>
          <!-- END slider -->
        </div>
      </div>
      <?php
    $conn = new mysqli("localhost","root","","ayucare");
    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }
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
        
        $sql = "insert into student (name,email,phone,gender,DOB, state, country,address) values ('$FirstName $LastName','$Email','$phone','$gender','$DOB','$state','$country','$address')";
        if($conn->query($sql) === TRUE){
        }else{
            echo "Error : ".$sql ."<br>".$conn->error;
        }
    }
    $conn->close();
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
                    <input type="submit" value="submit" class="btn btn-primary" name="submit" onclick="update()">
                  </div>
</form>
          </div>
</div>
    </section>
    </section>
    <!-- END section -->
    <section class="section bg-light">
      <div class="container" id="section2">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Our Faculty
            </h2>
          </div>
        </div>
        <div class="row element-animate">
          <div class="major-caousel js-carousel-1 owl-carousel">
              <?php 

                $obj = new Connection;
                $conn = $obj->connect();
                $sql = "select * from faculty";
                $res = $conn->query($sql);
                while($row = $res->fetch_array()){
              ?>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="<?php echo $row['imagePath'];?>" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black"><?php echo $row['name']; ?></h3>
                  <p><?php echo $row['post'];?></p>
                  <p><?php echo $row['qualification'];?></p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
                <?php } ?>
          </div>
          <!-- END slider -->
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="cover_1" style="background-image: url(img/bg_1.jpg);">
      <div class="container" id="section3">
        <div class="row text-center justify-content-center">
          <div class="col-md-10">
            <h2 class="heading element-animate">Experience Our Advance Facilities</h2>
            <p class="sub-heading element-animate mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            <p class="element-animate"><a href="#" class="btn btn-primary btn-lg">Get In Touch</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
   <!-- END section -->
    
   <a href="#" class="cta-link element-animate" data-animate-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">
   <span class="sub-heading">click here to</span>
   <span class="heading">Make an Enquiry</span>
 </a>
 <!-- END cta-link -->

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
 <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="modalAppointmentLabel">Enquire</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <!--form -->
         
           <div class="form-group">
             <label for="appointment_name" class="text-black">Full Name</label>
             <input type="text" class="form-control" id="appointment_name">
           </div>
           <div class="form-group">
             <label for="appointment_email" class="text-black">Email</label>
             <input type="text" class="form-control" id="appointment_email">
           </div>
           <div class="row">
             <div class="col-md-6">
               <div class="form-group">
                 <label for="appointment_phone" class="text-black">Phone No</label>
                 <input type="text" class="form-control" id="appointment_phone">
               </div>    
             </div>
            
           </div>
           

           <div class="form-group">
             <label for="appointment_message" class="text-black">Message</label>
             <textarea name="" id="appointment_message" class="form-control" cols="20" rows="5"></textarea>
           </div>
           <div class="form-group">
             <input type="submit" value="submit" class="btn btn-primary" onclick="update()">
           </div>
         
       </div>
       
     </div>
   </div>
 </div>

 <script >
 function update(){
   var name = document.getElementById('appointment_name').value;
   var email = document.getElementById('appointment_email').value;
   var phone = document.getElementById('appointment_phone').value;
   var message = document.getElementById('appointment_message').value;
   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
         
       } 
   };
 xhttp.open("GET", "query.php?id="+name+"^"+email+"^"+phone+"^"+message, true);
 xhttp.send();
 }
 function getCourse(id){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
          window.location.assign("course.html");
        } 
        xhttp.open("GET", "server/course_ses.php?id="+id, true);
        xhttp.send();
      }
 }
 </script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>