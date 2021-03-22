<?php
require_once("./../../config/config.php");

class QuotationModel{
	function getAllQuotationDB(){
		global $conn;
		$query = "select * from quotation";
		$result = mysqli_query($conn,$query);

		return $result;
	}
	function addQuotationDB($item_no,$name,$description,$budget,$quantity,$discount,$con_id){
		global $conn;
		$sql = "insert into quotation VALUES ('','$item_no','$name','$description','$budget','$quantity','$discount','$con_id')";
        if (mysqli_query($conn, $sql)) {
            echo "Quotation created successfully !";
            return 1;
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
            return 0;
        }
        mysqli_close($conn);
	}
	function getAllQuotationContractDB($con_id){
		global $conn;
		$query = "select * from quotation where q_con_id = '$con_id'";
		$result = mysqli_query($conn,$query);

		return $result;
	}
	function getSingleQuotationDB($q_id){
		global $conn;
		$query = "select * from quotation where q_id = '$q_id'";
		$result = mysqli_query($conn,$query);

		return $result;

	}
	function updateQuotationDB($quo_id,$q_item,$q_name,$q_desc,$q_budget,$q_discount){
		global $conn;
		$sql = "update quotation SET q_item='$q_item',q_name='$q_name',q_desc='$q_desc', q_budget='$q_budget', q_discount='$q_discount'
		WHERE q_id = '$quo_id'";
        if (mysqli_query($conn, $sql)) {
            // echo "Item created successfully !";
            return 1;
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
            return 0;
        }
        mysqli_close($conn);
	}
	function deleteQuotationDB($quo_id){
		global $conn;
		$sql = "delete from quotation where q_id = '$quo_id'";
        if (mysqli_query($conn, $sql)) {
            echo "Quotation deleted successfully !";
			//$sql_quo = "delete from activity where q_id = '$quo_id'";

            return 1;
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
            return 0;
        }
        mysqli_close($conn);
	}
}
?>