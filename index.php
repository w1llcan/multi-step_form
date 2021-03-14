<?php
require_once 'assets/config.php';
?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Refinance Form | (Your Site)</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
 </head>
 <body>
 <br />
  <div class="container box">
   <br />
   <h2 class="page-title" align="center">Home Refinance</h2><br />
   <?php echo $message; ?>
   <form method="post" id="refi_form">
    <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="fins_details">
      <div class="panel panel-default">
       <div class="panel-body">
       <div class="form-group">
            <label>What is the sales price of your home?</label>
            <select name="salesprice" id="salesprice" class="form-control">
                <option value="">Select One</option>
                <option value="50,000 - 99,999">50,000 - 99,999</option>
                <option value="100,000 - 199,999">100,000 - 199,999</option>
                <option value="200,000 - 299,999">200,000 - 299,999</option>
                <option value="300,000 - 399,999">300,000 - 399,999</option>
                <option value="400,000 - 499,999">400,000 - 499,999</option>
                <option value="500,000 - 599,999">500,000 - 599,999</option>
                <option value="600,000 - 699,999">600,000 - 699,999</option>
                <option value="Over 700,000">Over 700,000</option>
            <span id="error_salesprice" class="text-danger"></span>
            </select>
        </div>
        <div class="form-group">
            <label>What loan amount do you want?</label>
            <select name="loan_amount" id="loan_amount" class="form-control">
                <option value="">Select One</option>
                <option value="50,000 - 99,999">50,000 - 99,999</option>
                <option value="100,000 - 199,999">100,000 - 199,999</option>
                <option value="200,000 - 299,999">200,000 - 299,999</option>
                <option value="300,000 - 399,999">300,000 - 399,999</option>
                <option value="400,000 - 499,999">400,000 - 499,999</option>
                <option value="500,000 - 599,999">500,000 - 599,999</option>
                <option value="600,000 - 699,999">600,000 - 699,999</option>
                <option value="Over 700,000">Over 700,000</option>
            <span id="error_loan_amount" class="text-danger"></span>
            </select>
        </div>
        <div class="form-group">
            <label>What is your yearly income?</label>
            <select name="income" id="income" class="form-control">
                <option value="">Select One</option>
                <option value="Under 25k">Under 25k</option>
                <option value="25k - 49k">25k - 49k</option>
                <option value="50k - 74k">50k - 74k</option>
                <option value="75k - 99k">75k - 99k</option>
                <option value="100k - 149k">100k - 149k</option>
                <option value="150k - 200k">150k - 200k</option>
                <option value="Over 200k">Over 200k</option>
            <span id="error_income" class="text-danger"></span>
            </select>
        </div>
        <br />
        <div align="right">
         <button type="button" name="btn_fins_details" id="btn_fins_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
        <a class="crm" href="crm/index.php">CRM</a>
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-body">
       <table class="center">
               <tr>
                   <td class="left">
                    <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fName" id="fName" class="form-control" />
                    <span id="error_fName" class="text-danger"></span>
                    </div>
                   </td>
                  <td class="right">
                    <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lName" id="lName" class="form-control" />
                    <span id="error_lName" class="text-danger"></span>
                    </div>
                  </td>
                </tr>
                <tr>
                <td class="left">
                    <div class="form-group">
                    <label>Street</label>
                    <input type="text" name="property_street" id="property_street" class="form-control" />
                    <span id="error_property_street" class="text-danger"></span>
                    </div>
                </td>
                <td class="right">
                    <div class="form-group">
                    <label>City</label>
                    <input type="text" name="property_city" id="property_city" class="form-control" />
                    <span id="error_property_city" class="text-danger"></span>
                    </div>
                </td>
                </tr>
                <tr>
                <td class="left">
                    <div class="form-group">
                        <label>State</label>
                        <select name="property_state" id="property_state" class="form-control">
                            <option value="">Select One</option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Missippi">Missippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                        </select>
                        <span id="error_property_state" class="text-danger"></span>
                    </div>
                </td>
                <td class="right">
                    <div class="form-group">
                    <label>Zip Code</label>
                    <input type="text" name="property_zipcode" id="property_zipcode" class="form-control" />
                    <span id="error_property_zipcode" class="text-danger"></span>
                    </div>
                </td>
                </tr>
                <tr>
                <td class="left">
                    <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="primary_phone" id="primary_phone" class="form-control" />
                    <span id="error_primary_phone" class="text-danger"></span>
                    </div>
                </td>
                <td class="right">
                    <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="email" id="email" class="form-control" />
                    <span id="error_email" class="text-danger"></span>
                    </div>
                </td>
                </tr>
        </table>
        <table class="center">
        <tr>
                <td>
                <div class="form-group">
                <label> Your Message</label>
                <textarea name="txt_message" id="txt_message" class="form-control" rows="6" cols="10"></textarea>
                <span id="error_message" class="text-danger"></span>
                </div>
                </td>
                </tr>
        </table>
        <br />
        <div class="text-message" style="display: block;">
        <p>By clicking submit above, I/we acknowledge that we have read and agree to the <a href="https://homepromise.com/user/">User Agreement</a> and acknowledge that we have read the <a href="https://homepromise.com/privacy/">Privacy</a> Statement, and <a href="https://homepromise.com/disclosures/">Disclosures</a>.</p>
        <br />
        </div>
        <div align="right">
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn has-error btn-lg">Submit</button>
        </div>
        <br />
       </div>
      </div>
     </div>
    </div>
   </form>
  </div>
 </body>
 <script src="assets/js/script.js"></script>
</html>



