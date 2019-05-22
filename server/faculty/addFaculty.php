<?php
    include '../config.php';
    if(isset($_FILES["Filename"])){
        $file_name = $_FILES['Filename']['name'];
        $file_size =$_FILES['Filename']['size'];
        $file_tmp =$_FILES['Filename']['tmp_name'];
        $file_type=$_FILES['Filename']['type'];
        $target = "server/images/";
        $target = $target . basename( $_FILES['Filename']['name']);
        move_uploaded_file($_FILES['Filename']['tmp_name'],$target);
        $name = $_POST['Name'];
        $post = $_POST['Post'];
        $qualification = $_POST['Qualification'];
        $sql = "insert into faculty (name,post,qualification,imagePath) values ('$name','$post','$qualification','$target')";
        $obj = new Connection;
        $conn = $obj->connect();
        if($conn->query($sql)) header("Location:index.php");
    }
?>