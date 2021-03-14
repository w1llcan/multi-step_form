<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inventory</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">

<script src="assets/jquery-1.11.3-jquery.min.js"></script>
<script src="bootstrap/js/main.js"></script>

</head>
<?php
include_once 'config/dbconfig.php';

if($_GET['edit_id']) {
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM wpbestp_home_purchase2 WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<body>
<style type="text/css">
#dis {
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='inv-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
        <tr>
            <td>Sales Price</td>
            <td><input type='text' name='salesprice' class='form-control' value='<?php echo $row['salesprice']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Loan Amount</td>
            <td><input type='text' name='loan_amount' class='form-control' value='<?php echo $row['loan_amount']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Income</td>
            <td><input type='text' name='income' class='form-control' value='<?php echo $row['income']; ?>' required></td>
        </tr>

        <tr>
            <td>First Name</td>
            <td><input type='text' name='fName' class='form-control' value='<?php echo $row['fName']; ?>' required></td>
        </tr>

        <tr>
            <td>Last Name</td>
            <td><input type='text' name='lName' class='form-control' value='<?php echo $row['lName']; ?>' required></td>
        </tr>

        <tr>
            <td>Address</td>
            <td><input type='text' name='property_street' class='form-control' value='<?php echo $row['property_street']; ?>' required></td>
        </tr>

        <tr>
            <td>City</td>
            <td><input type='text' name='property_city' class='form-control' value='<?php echo $row['property_city']; ?>' required></td>
        </tr>

        <tr>
            <td>State</td>
            <td><input type='text' name='property_state' class='form-control' value='<?php echo $row['property_state']; ?>' required></td>
        </tr>

        <tr>
            <td>Zip Code</td>
            <td><input type='text' name='property_zipcode' class='form-control' value='<?php echo $row['property_zipcode']; ?>' required></td>
        </tr>

        <tr>
            <td>Phone</td>
            <td><input type='text' name='primary_phone' class='form-control' value='<?php echo $row['primary_phone']; ?>' required></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type='text' name='email' class='form-control' value='<?php echo $row['email']; ?>' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Update
			</button>
            </td>
        </tr>
 
    </table>
</form>
</body>
</html>
