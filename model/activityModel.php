<?php
require_once("./../../config/config.php");

class activityModel{
    function addActivityDB($act_name,$act_desc,$act_weight,$act_date,$con_id){
        global $conn;
        $sql = "insert into activity values ('','$act_name','$act_desc','$act_weight',FALSE,'$con_id')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            //echo "activity retrived successfully !";
            return 1;
        
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
            return 0;
        }
        mysqli_close($conn);
    }
    function addActivityforQuotationDB($name,$con_id){
        global $conn;
        
        $sql1 = "insert into activity VALUES ('','primary wood provision','$name','1',FALSE,'$con_id')";
        $sql2 = "insert into activity VALUES ('','item strcture','$name','1',FALSE,'$con_id')";
        $sql3 = "insert into activity VALUES ('','wood paint + lacker','$name','1',FALSE,'$con_id')";
        $sql4 = "insert into activity VALUES ('','wood polish','$name','1',FALSE,'$con_id')";
        
        mysqli_query($conn, $sql1);
        mysqli_query($conn, $sql2);
        mysqli_query($conn, $sql3);
        mysqli_query($conn, $sql4);
        
        mysqli_close($conn);
    }
    function getAllActivityContractDB($con_id){
        global $conn;
        $sql = "select * from activity WHERE con_id = '$con_id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            //echo "activity retrived successfully !";
            return $result;
        
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    function setMarkActivityDB($act_id){
        global $conn;
        $sql = "update activity SET act_complete = TRUE WHERE act_id = '$act_id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            //echo "activity retrived successfully !";
            return 1;
        
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    function getProgressContractDB($con_id){
        global $conn;
        $sql = "SELECT COUNT(act_id) FROM activity WHERE con_id='$con_id' AND act_complete = 1";
        $result = mysqli_query($conn, $sql);

        return $result;
    }
    function getTotalActivityContractDB($con_id){
        global $conn;
        $sql = "SELECT COUNT(act_id) FROM activity WHERE con_id='$con_id'";
        $result = mysqli_query($conn, $sql);

        return $result;
    }
}


?>