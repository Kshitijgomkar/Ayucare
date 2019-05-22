<!DOCTYPE html>
<?php include '../Courses.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Courses</title>
</head>
<body> 
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><h3>Ayucare Admin</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="../gallery"><h3>Gallery</h3></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../courses"><h3>Courses</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../faculty"><h3>Faculties</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Notification"><h3>Notificaitons</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h3>Students</h3></a>
      </li>
    </ul>
</nav>
<div class="jumbotron" style="padding:20%;padding-top:5%;padding-bottom:3%;">
<center>
  <h3>Enter Course Details Here..</h3>
</center>
<form action="addData.php" method="post">
<div class="form-group">
  <label class="col-form-label" for="inputDefault">Enter Course Name</label>
  <input type="text" class="form-control" name="courseName" id="courseName">
</div>
<div class="form-group">
  <label class="col-form-label" for="inputDefault">Enter Course Duration</label>
  <input type="text" class="form-control" name="courseDuration" id="courseDuration">
</div>
<div class="form-group">
  <label class="col-form-label" for="inputDefault">Eligbility of Course</label>
  <input type="text" class="form-control" name="eligiblity" id="eligiblity">
</div>
    <div class="form-group">
      <label for="exampleTextarea">Enter Description</label>
      <textarea class="form-control" id="courseDescription" name="courseDescription" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Enter Sylabus</label>
      <textarea class="form-control" id="courseSylabus" name="courseSylabus" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-success" onclick="addCourse()" name="courseAdd">Add Course</button>
</div>
</form>
<hr>
</div>
<center>
<table>
  <tr>
  <?php
    $obj = new Courses;
    $Courses = $obj->fetchCourses();
    $i = 0;
    foreach($Courses as $courses){
      $i++;
      if($i == 4){
        echo "</tr><tr>";
      }else{
        if($courses[5] == 1){
?>
  <td>
          <div class="card border-success bg-success mb-3" style="max-width: 20rem;">
  <div class="card-header"><?php echo $courses[1];?></div>
    <div class="card-body">
      <h4 class="card-title"><?php echo $courses[2]."<br><br>".$courses[4];?></h4>
      <p class="card-text"><?php echo $courses[6]?></p>
    </div>

    <button type="button" class="btn btn-warning" onclick="endCourse(<?php echo $courses[0]; ?>)">END</button>
    </td>
<?php
        }else{
  ?>
  <td>
  <div class="card border-danger bg-danger mb-3" style="max-width: 20rem;">
  <div class="card-header"><?php echo $courses[1];?></div>
    <div class="card-body">
      <h4 class="card-title"><?php echo $courses[2]."<br><br>".$courses[4];?></h4>
      <p class="card-text"><?php echo $courses[6];?></p>
    </div>
    <button type="button" class="btn btn-success" onclick="liveCourse(<?php echo $courses[0]; ?>)">LIVE</button>
    <button type="button" class="btn btn-warning" onclick="deleteCourse(<?php echo $courses[0]; ?>)">DELETE</button>
  </div>  
  </td>
    <?php 
        }
      }
    }
    ?>
  </tr>
</table>
</center>
</body>
<script>
  function endCourse(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        if(this.responseText == "true"){
            location.reload();
        }
    }
    }
    xhttp.open("get" , "../Courses.php?end_id="+id,true);
    xhttp.send();
  }
  function liveCourse(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        if(this.responseText == "true"){
            location.reload();
        }
    }
    }
    xhttp.open("get" , "../Courses.php?live_id="+id,true);
    xhttp.send();
  }
  function deleteCourse(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        if(this.responseText == "true"){
            location.reload();
        }
    }
    }
    xhttp.open("get" , "../Courses.php?delete_id="+id,true);
    xhttp.send();
  }
</script>
</html>