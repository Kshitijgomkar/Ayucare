<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    
    
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
        <a class="nav-link active" href="#"><h3>Gallery</h3></a>
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
      <li class="nav-item">
        <a class="nav-link" href="#"><h3>Students</h3></a>
      </li>
    </ul>
</nav>
    <table cellpadding="50px">
        <tr>
            <td>
                <table>
                    <tr><td>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                          <h2>Insert Section</h2>
                          <input type="file" class="form-control-file" name="Filename1" id="exampleInputFile" aria-describedby="fileHelp">
                          <small id="fileHelp" class="form-text text-muted">Please insert small size image</small>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputDefault">Section Name</label>
                      <input type="text" class="form-control" name="Name" id="inputDefault">
                    </div>
                    <button type="submit" class="btn btn-success" name="addSection">Add</button>
                    <?php
                    include '../config.php';
                    $obj = new Connection;
                    $conn = $obj->connect();
                        if(isset($_FILES["Filename1"])){
                            $file_name = $_FILES['Filename1']['name'];
                            $file_size =$_FILES['Filename1']['size'];
                            $file_tmp =$_FILES['Filename1']['tmp_name'];
                            $file_type=$_FILES['Filename1']['type'];
                            $target = "server/images/gallery/";
                            $target = $target . basename( $_FILES['Filename1']['name']);
                            move_uploaded_file($_FILES['Filename1']['tmp_name'],$target);
                            $name = $_POST['Name'];
                            $sql = "insert into section (name,path) values ('$name','$target')";
                            $conn->query($sql);
                        }
                    ?>
                    </form>
                    </td></tr>
                    
                    <tr><td>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                          <h2>Insert Image</h2>
                          <input type="file" class="form-control-file" name="Filename" id="exampleInputFile" aria-describedby="fileHelp">
                          <small id="fileHelp" class="form-text text-muted">Please insert small size image</small>
                    </div>
                    <div class="form-group">
                    <label for="exampleSelect1">Select Section</label>
                    <select class="form-control" id="exampleSelect1" name="section">
                     <?php
                        
                        $sql = "select * from section";
                        $res = $conn->query($sql);
                        while($row = $res->fetch_array()){
                            echo "<option value = '".$row['name']."'>".$row['name']."</option>";
                        }
                     ?>
                    </select>
                  </div>
                    <button type="submit" class="btn btn-success" name="addImage">Add</button>
                    <?php
                        if(isset($_FILES['Filename'])){
                            $file_name = $_FILES['Filename']['name'];
                            $file_size =$_FILES['Filename']['size'];
                            $file_tmp =$_FILES['Filename']['tmp_name'];
                            $file_type=$_FILES['Filename']['type'];
                            $target = "server/images/gallery/";
                            $target = $target . basename( $_FILES['Filename']['name']);
                            move_uploaded_file($_FILES['Filename']['tmp_name'],$target);
                            $name = $_POST['section'];
                            $sql = "insert into gallery (section,path) values ('$name','$target')";
                            $conn->query($sql);
                        }
                    ?>
                    </form>
                    </td></tr>
                </table>
            </td>
        </tr>
    </table>
    <hr>
    <h1>Sections</h1>
    <table>
        <tr>
            <?php
                $sql = "select * from section";
                $res = $conn->query($sql);
                while($row = $res->fetch_array()){
            ?>
                <td>
                <div class="card border-primary mb-3" style="max-width: 20rem;">
  <div class="card-header"><?php echo $row['name'];?></div>
  <div class="card-body">
    <img src="<?php echo $row['path'];?>" width="75%">
    <button type="button" class="btn btn-outline-danger" onclick="deleteSection(<?php echo $row['id'];?>)">Delete</button>
  </div>
</div>
                </td>
                <?php } ?>
        </tr>
    </table>
    <hr>
    <h1>Images</h1>
    <table>
        <tr>
            <?php
                $sql = "select * from gallery";
                $res = $conn->query($sql);
                $i = 0;
                while($row = $res->fetch_array()){
                    if($i == 6){
                        echo "</td></tr><br><tr></td>";
                    }else{
            ?>
                <td>
                <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header"><?php echo $row['section'];?></div>
                <div class="card-body">
                    <img src="<?php echo $row['path'];?>" width="75%">
                <button type="button" class="btn btn-outline-danger" onclick="deleteGallery(<?php echo $row['id'];?>)">Delete</button>
                </div>
                </div>
                </td>
                <?php 
                    }
            } ?>
        </tr>
    </table>
</body>
<script>
function deleteSection(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == "true"){
               location.reload();
            }
        }
    }
    xhttp.open("get" , "../Gallery.php?id_del_ses="+id ,true);
    xhttp.send();
}
function deleteGallery(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == "true"){
               location.reload();
            }
        }
    }
    xhttp.open("get" , "../Gallery.php?id_del_gal="+id ,true);
    xhttp.send();
}

    </script>
</html>