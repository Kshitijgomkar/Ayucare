<?php
    include '../config.php';
    if(isset($_POST['courseAdd'])){
        $name = $_POST['courseName'];
        $duration = $_POST['courseDuration'];
        $eligiblity = $_POST['eligiblity'];
        $description = $_POST['courseDescription'];
        $sylabus = $_POST['courseSylabus'];
        $sql = "insert into course (name,eligiblity,description,sylabus,duration,active) values ('$name','$eligiblity','$description','$sylabus','$duration',1)";
        $obj = new Connection;
        $conn = $obj->connect();
        if($conn->query($sql)){
            header("Location:index.php");
        }else{
            header("Location:index.php");
        }
    }
?>