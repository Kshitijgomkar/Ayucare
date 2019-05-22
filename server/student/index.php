<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
      <li class="nav-item">
        <a class="nav-link" href="../courses"><h3>Courses</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../faculty"><h3>Faculties</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../notification"><h3>Notificaitons</h3></a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href="#"><h3>Students</h3></a>
      </li>
    </ul>
</nav>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">sr no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">DOB</th>
      <th scope="col">Address</th>
      <th scope="col">State</th>
      <th scope="col">Country</th>
      <th scope="col">Course Offered</th>

    </tr>
  </thead>
  <tbody>
    <?php
        include_once '../Student.php';
        $obj = new Student;
        $students = $obj->fetchStudentData();
        $i = 0;
        foreach($students as $student){
    ?>
    <tr class="table-active">
      <th scope="row"><?php echo $i;?></th>
      <?php 
        for($i=0;$i<sizeof($student);$i++){ 
      ?>
      <td><?php echo $student[$i]; ?></td>
        <?php } ?>
    </tr>
        <?php 
        $i++;
    }     
?>
</body>
</html>