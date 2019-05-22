<?php 
    
    include_once 'config.php';

    class Courses extends Connection{   
        function fetchCourses(){
            $courses = array();
            $conn = Connection::connect();
            $sql = "select * from course";
            $res = $conn->query($sql);
            while($row = $res->fetch_array()){
                $course = array();
                array_push($course,$row['id'],$row['name'],$row['eligiblity'],$row['description'],$row['duration'],$row['active'],$row['sylabus']);                
                array_push($courses,$course);
            }
            return $courses;
        }
        function endCourse($id){
            $conn = Connection::connect();
            $sql = "update course set active = 0 where id = $id";
            if($conn->query($sql)){
                echo "true";
            }else{
                echo "false";
            }
        }
        function liveCourse($id){
            $conn = Connection::connect();
            $sql = "update course set active = 1 where id = $id";
            if($conn->query($sql)){
                echo "true";
            }else{
                echo "false";
            }
        }
        function deleteCourse($id){
            $conn = Connection::connect();
            $sql = "delete from course where id = $id";
            if($conn->query($sql)){
                echo "true";
            }else{
                echo "false";
            }
        }
    }
    $obj = new Courses;
    if(isset($_GET['end_id'])){
        $id = $_GET['end_id'];
        $obj->endCourse($id);
    }
    else if(isset($_GET['live_id'])){
        $id = $_GET['live_id'];
        $obj->liveCourse($id);
    }
    else if(isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];
        $obj->deleteCourse($id);
    }
?>