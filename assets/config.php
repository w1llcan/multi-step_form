<?php

$connect = new PDO("mysql:host=localhost;dbname=master_form2", "", "");
$message = '';
if(isset($_POST["email"]))
{
 $query = "
 INSERT INTO bestp_home_purchase
 (salesprice, loan_amount, income, fName, lName, property_street, property_city, property_state, property_zipcode, primary_phone, email, txt_message) VALUES 
 (:salesprice, :loan_amount, :income, :fName, :lName, :property_street, :property_city, :property_state, :property_zipcode, :primary_phone, :email, :txt_message)";

 $refi_data = array(
  ':salesprice' => $_POST["salesprice"],
  ':loan_amount' => $_POST["loan_amount"],
  ':income' => $_POST["income"],
  ':fName'  => $_POST["fName"],
  ':lName'  => $_POST["lName"],
  ':property_street'   => $_POST["property_street"],
  ':property_city' => $_POST["property_city"],
  ':property_state' => $_POST["property_state"],
  ':property_zipcode' => $_POST["property_zipcode"],
  ':primary_phone'  => $_POST["primary_phone"],
  ':email'   => $_POST["email"],
  ':txt_message' => $_POST["txt_message"]
 );
 $statement = $connect->prepare($query);
 if($statement->execute($refi_data))
 {
  $message = '
  <div class="alert alert-success">
  Thank you for getting in touch with us! We will try our best to respond back to you within 24 hours.
  </div>
  ';
 }
 else
 {
  $message = '
  <div class="alert alert-error">
  There is an error adding the new record.
  </div>
  ';
 }
}
?>