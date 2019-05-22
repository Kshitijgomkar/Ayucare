<?php
    include 'config.php';
    class Student extends Connection{
        function fetchStudentData(){
            $conn = Connection::connect();
            $sql = "select * from student";
            $res = $conn->query($sql);
            $students = array();
            while($row = $res->fetch_array()){
                $student = array();
                array_push($student,$row['name'],$row['email'],$row['phone'],$row['gender'],$row['DOB'],$row['state'],$row['country'],$row['address'],$row['course']);
                array_push($students,$student);
            }
            return $students;
        }
    }
?>