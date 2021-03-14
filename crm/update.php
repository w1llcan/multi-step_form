<?php
require_once 'config/dbconfig.php';

	
	if($_POST) {
		$id = $_POST['id'];
		$salesprice = $_POST['salesprice'];
		$loan_amount = $_POST['loan_amount'];
		$income = $_POST['income'];
		$fName = $_POST['fName'];
		$lName = $_POST['lName'];
		$property_street = $_POST['property_street'];
		$property_city = $_POST['property_city'];
		$property_state = $_POST['property_state'];
		$property_zipcode = $_POST['property_zipcode'];
		$primary_phone = $_POST['primary_phone'];
		$email = $_POST['email'];
		
		$stmt = $db_con->prepare("UPDATE wpbestp_home_purchase2 SET salesprice=:salesprice, loan_amount=:loan_amount, income=:income, fName=:fName, lName=:lName, property_street=:property_street, property_city=:property_city, property_state=:property_state, property_zipcode=:property_zipcode, primary_phone=:primary_phone, email=:email WHERE id=:id");
		$stmt->bindParam(":salesprice", $salesprice);
		$stmt->bindParam(":loan_amount", $loan_amount);
		$stmt->bindParam(":income", $income);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":fName", $fName);
		$stmt->bindParam(":lName", $lName);
		$stmt->bindParam(":property_street", $property_street);
		$stmt->bindParam(":property_city", $property_city);
		$stmt->bindParam(":property_state", $property_state);
		$stmt->bindParam(":property_zipcode", $property_zipcode);
		$stmt->bindParam(":primary_phone", $primary_phone);
		$stmt->bindParam(":email", $email);
		
		if($stmt->execute()) {
			echo "Successfully updated";
		} else {
			echo "Query Problem";
		}
	}

?>