
<!DOCTYPE html>
<html>
<head>
      <title>Student Registrations</title>
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
       <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
    include 'server/config.php';
    $obj = new Connection;
    $conn = $obj->connect();
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
<a href="#" class="cta-link1 element-animate" data-animate-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">
      <span class="sub-heading">click here for</span>
      <span class="heading">Student Registrations</span>
    </a>
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
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
</body>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/main.js"></script>
