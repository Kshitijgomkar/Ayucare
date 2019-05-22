<?php
    include_once 'config.php';
    session_start();
    class Notification extends Connection{
        function fetchNotification(){
            $sql = "select * from notification";
            $notifications = array();
            $conn = Connection::connect();
            $res = $conn->query($sql);
            while($row = $res->fetch_array()){
                if($row['active'] == 1){
                    array_push($notifications,$row['text']);
                }
            }
            return $notifications;
        }
        function fetchFullNotification(){
            $sql = "select * from notification";
            $notifications = array();
            $conn = Connection::connect();
            $res = $conn->query($sql);
            while($row = $res->fetch_array()){
                $notification = array();
                array_push($notification,$row['id'],$row['text'],$row['link'],$row['active']);
                array_push($notifications,$notification);
            }
            return $notifications;
        }
        function endNotification($id){
            $sql = "update notification set active = 0 where id = $id";
            $conn = Connection::connect();
            if($conn->query($sql)){
                echo "true";
            }else{
                echo "false";
            }
        }
        function liveNotification($id){
            $sql = "update notification set active = 1 where id = $id";
            $conn = Connection::connect();
            if($conn->query($sql)){
                echo "true";
            }else{
                echo "false";
            }
        }
        function deleteNotification($id){
            $sql = "delete from notification where id = $id";
            $conn = Connection::connect();
            if($conn->query($sql)){
                echo "true";
            }else{
                echo "false";
            }
        }
        function addNotification($text){
            $sql = "insert into notification (text,active) values ('$text',1)";
            $conn = Connection::connect();
            if($conn->query($sql)){
                echo "true";
            }else{
                echo "false";
            }
        }
    }
    $obj = new Notification();
    if(isset($_GET['id_end'])){
        $id = $_GET['id_end'];
        $obj->endNotification($id);      
    }
    else if(isset($_GET['id_live'])){
        $id = $_GET['id_live'];
        $obj->liveNotification($id);
    }
    else if(isset($_GET['id_delete'])){
        $id = $_GET['id_delete'];
        $obj->deletenotification($id);
    }
    else if(isset($_GET['id_add'])){
        $text = $_GET['id_add'];
        $obj->addNotification($text);
    }
?>