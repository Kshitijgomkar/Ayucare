<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Notification</title>
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
      <li class="nav-item active">
        <a class="nav-link" href="#"><h3>Notificaitons</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h3>Students</h3></a>
      </li>
    </ul>
</nav>
<table cellpadding="50px">
    <tr>
        <td style="width:60%;">
        <div class="jumbotron" >
            <form method="post">
                <div class="form-group">
                    <input class="form-control form-control-lg" id="notification" type="text" placeholder="Notification Text goes here ....." id="inputLarge">
                </div>
                <button type="button" class="btn btn-outline-success" onclick="insertNotification();">Insert</button>
                </div>
            </form>
        </td>
        <td style="width:60%;">
            
    <div >
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Sr no</th>
      <th scope="col">Notification</th>
      <th scope="col">Active</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include '../Notification.php';
        $notification_obj = new Notification();
        $notification = $notification_obj->fetchFullNotification();
        $i = 0;
        foreach($notification as $not){
            $i++;
            if($not[3] == 1){
    ?>
      <tr class="table-light">
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $not[1]?></td>
      <td><b style="color:green;">LIVE</b></td>
      <td><button type="button" class="btn btn-outline-danger" onclick="endNotification(<?php echo $not[0];?>);">END</button></td>
    </tr>
    <?php }else{ ?>
    <tr class="table-secondary">
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $not[1]?></td>
      <td><b style="color:red;">ENDED</b></td>
      <td>
        <button type="button" class="btn btn-outline-danger" onclick="deleteNotification(<?php echo $not[0];?>);">DELETE</button>
        <button type="button" class="btn btn-outline-success" onclick="liveNotification(<?php echo $not[0];?>);">LIVE</button>
      </td>
    </tr>
    <?php 
    }
} ?>
  </tbody>
</table> 
    </div>
        </td>
    </tr>
</table>
<script>
function endNotification(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == "true"){
                alert("Notification Ended");
                location.reload();
            }
        }
    }
    xhttp.open("get" , "../Notification.php?id_end="+id ,true);
    xhttp.send();
}
function liveNotification(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == "true"){
                alert("Notification is live");
                location.reload();
            }
        }
    }
    xhttp.open("get" , "../Notification.php?id_live="+id ,true);
    xhttp.send();
}
function deleteNotification(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == "true"){
                alert("Notification Deleted");
                location.reload();
            }
        }
    }
    xhttp.open("get" , "../Notification.php?id_delete="+id ,true);
    xhttp.send();
}
function insertNotification(){
    var text = document.getElementById('notification').value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == "true"){
                alert("Notification Added");
                location.reload();
            }
        }
    }
    xhttp.open("get" , "../Notification.php?id_add="+text ,true);
    xhttp.send();
}
</script>
</body>
</html>