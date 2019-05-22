<?php
    include 'config.php';
    class Faculty extends Connection{
        function fetchinfo(){
            $facultys = array();
            $conn = Connection::connect();
            $sql = "select * from faculty";
            $res = $conn->query($sql);
            while($row = $res->fetch_array()){
                $faculty = array();
                array_push($faculty,$row['id'],$row['name'],$row['post'],$row['qualification'],$row['imagePath']);
                array_push($facultys,$faculty);
            }
            return $facultys;
        }
        function deleteFaculty($id){
            $conn = Connection::connect();
            $sql = "delete from faculty where id = $id";
            if($conn->query($sql)){
                echo "true";
            }
        }
    }
    $obj = new Faculty;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $obj->deleteFaculty($id);
    }
?>