<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRM | HomePromise</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"> 
<link rel="stylesheet" href="assets/datatables.min.css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	
	$("#btn-view").hide();
	
	$("#btn-add").click(function() {
		$(".content-loader").fadeOut('slow', function() {
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('add_form.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function() {
		
		$("body").fadeOut('slow', function() {
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="index.php";
		});
	});
	
});
</script>

</head>

<body>
    


	<div class="container">
      
        <h2 class="form-signin-heading">CRM | HomePromise</h2><hr />
        <a class="true_home" href="../index.php">Home</a>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>Sales Price</th>
        <th>Loan Amount</th>
        <th>Income</th>
        <th>First Name</th>
		<th>Last Name</th>
		<th>Address</th>
		<th>City</th>
		<th>State</th>
		<th>Zip Code</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Message</th>
        <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'config/dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM wpbestp_home_purchase2 ORDER BY id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
			?>
			<tr>
			<td><?php echo $row['salesprice']; ?></td>
			<td><?php echo $row['loan_amount']; ?></td>
			<td><?php echo $row['income']; ?></td>
			<td><?php echo $row['fName']; ?></td>
			<td><?php echo $row['lName']; ?></td>
			<td><?php echo $row['property_street']; ?></td>
			<td><?php echo $row['property_city']; ?></td>
			<td><?php echo $row['property_state']; ?></td>
			<td><?php echo $row['property_zipcode']; ?></td>
			<td><?php echo $row['primary_phone']; ?></td>
			<td><?php echo '<a href="mailto:' . $row['email'] . '">' . $row['email'] . '</a>'; ?></td>
			<td><?php echo $row['txt_message']; ?></td>
			<td align="center">
			<a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Edit">
			<img src="edit.png" width="20px" />
            </a></td>
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
    
    <div class="container">
      
        
    </div>
    

    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
</body>
</html>