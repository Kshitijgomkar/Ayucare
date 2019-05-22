<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Faculty</title>
    
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
      <li class="nav-item active">
        <a class="nav-link" href="#"><h3>Faculties</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../notification"><h3>Notificaitons</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../student"><h3>Students</h3></a>
      </li>
    </ul>
</nav>
<h1>Insert Faculty Information.. </h1>
<table cellpadding="50px">
<tr>
<td style="width:60%;">
<form action="addFaculty.php" method="post" enctype="multipart/form-data">
<div class="form-group">
      <h2>Insert Image</h2>
      <input type="file" class="form-control-file" name="Filename" id="exampleInputFile" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Please insert small size image</small>
</div>
<div class="form-group">
  <label class="col-form-label" for="inputDefault">Name</label>
  <input type="text" class="form-control" name="Name" id="inputDefault">
</div>
<div class="form-group">
  <label class="col-form-label" for="inputDefault">Post</label>
  <input type="text" class="form-control" name="Post" id="inputDefault">
</div>
<div class="form-group">
  <label class="col-form-label" for="inputDefault">Qulification</label>
  <input type="text" class="form-control" name="Qualification" id="inputDefault">
</div>
<button type="submit" class="btn btn-success">Add</button>
</form>
</td>
<td>
<table>
<?php
    include '../Faculty.php';
    $obj = new Faculty;
    $faculties = $obj->fetchinfo();
    $i = 0;
    foreach($faculties as $faculty){
?>
<tr><td>
<div class="card mb-3" style="width:60%;">
  <h3 class="card-header"><?php echo $faculty[1];?></h3>
  <img style="height: 400px; width: 100%; display: block;" src="<?php echo $faculty[4]?>" alt="Card image">
  <div class="card-body">
    <p class="card-text">The card is as it is displayed on the main site anychanges can change it.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $faculty[2];?></li>
    <li class="list-group-item"><?php echo $faculty[3];?></li>
  </ul>
  <div class="card-body">
    <p style="color:green;">LIVE</p>
    <button type="button" class="btn btn-outline-danger" onclick="deleteFaculty(<?php echo $faculty[0];?>)">Delete</button>
  </div>
</div>
</td></tr>
    <?php $i++; } ?>
    </table>
</td>
</tr>
</table>
</body>
<script>
    function deleteFaculty(id){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                if(this.response == "true") location.reload();
            }
        }
        xhttp.open('get','../Faculty.php?id='+id,true);
        xhttp.send();
    }
</script>
</html>