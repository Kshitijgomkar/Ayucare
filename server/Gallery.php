<?php
    include 'config.php';
    class Gallery extends Connection{
        function deleteSession($id){
            $sql = "delete from section where id = $id";
            $conn = Connection::connect();
            if($conn->query($sql)) echo "true";
        }
        function deleteGallery($id){
            $sql = "delete from gallery where id = $id";
            $conn = Connection::connect();
            if($conn->query($sql)) echo "true";
        }
        function noOfSections(){
            $conn = Connection::connect();
            $sql = "select * from section";
            $res = $conn->query($sql);
            return $count = mysqli_num_rows($res);
        }
        function nameOfSections(){
            $conn = Connection::connect();
            $sql = "select * from section";
            $res = $conn->query($sql);
            $section = array();
            while($row = $res->fetch_array()){
                array_push($section,$row['name']);
            }
            return $section;
        }
        function fetchGallery($attr){
            $gallery = array();
            $conn = Connection::connect();
            $sql_section = "select path from section where name = '$attr'";
            $sql_images = "select path from gallery where section = '$attr'";
            $res_section = $conn->query($sql_section);
            $res_images = $conn->query($sql_images);
            $section_path = $res_section->fetch_array();
            array_push($gallery,$section_path['path']);
            while($row = $res_images->fetch_array()){
                array_push($gallery,$row['path']);
            }
            return $gallery;
        }
    }
    $obj = new Gallery;
    if(isset($_GET['id_del_ses'])){
        $id = $_GET['id_del_ses'];
        $obj->deleteSession($id);
    }
    if(isset($_GET['id_del_gal'])){
        $id = $_GET['id_del_gal'];
        $obj->deleteGallery($id);
    }
?>