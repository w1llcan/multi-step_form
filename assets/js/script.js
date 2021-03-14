$(document).ready(function(){
 
    $('#btn_fins_details').click(function(){
     
        var error_salesprice = '';
        var error_loan_amount = '';
        var error_income = '';
        
        if($.trim($('#salesprice').val()).length == 0)
        {
            error_salesprice = 'Select a value for your home from the list';
            $('#error_salesprice').text(error_salesprice);
            $('#salesprice').addClass('has-error');
        }
        else
        {
           error_salesprice = '';
           $('#error_salesprice').text(error_salesprice);
           $('#salesprice').removeClass('has-error');  
        }
   
        if($.trim($('#loan_amount').val()).length == 0)
        {
            error_loan_amount = 'Select a loan amount from the list';
            $('#error_loan_amount').text(error_loan_amount);
            $('#loan_amount').addClass('has-error');
        }
        else
        {
           error_loan_amount = '';
           $('#error_loan_amount').text(error_loan_amount);
           $('#loan_amount').removeClass('has-error');  
        }
   
        if($.trim($('#income').val()).length == 0)
        {
            error_income = 'Select your yearly income from the list';
            $('#error_income').text(error_income);
            $('#income').addClass('has-error');
        }
        else
        {
           error_income = '';
           $('#error_income').text(error_income);
           $('#income').removeClass('has-error');  
        }
        
        if(error_salesprice != '' || error_loan_amount != '' || error_income != '')
        {
         return false;
     }
     else
     {
      $('#list_fins_details').removeClass('active active_tab1');
      $('#list_fins_details').removeAttr('href data-toggle');
      $('#fins_details').removeClass('active');
      $('#list_fins_details').addClass('inactive_tab1');
      $('#list_personal_details').removeClass('inactive_tab1');
      $('#list_personal_details').addClass('active_tab1 active');
      $('#list_personal_details').attr('href', '#personal_details');
      $('#list_personal_details').attr('data-toggle', 'tab');
      $('#personal_details').addClass('active in');
     }
    });
    
    $('#btn_personal_details').click(function(){
     var error_fName = '';
     var error_lName = '';
     var error_property_street = '';
     var error_property_city = '';
     var error_property_state = '';
     var error_property_zipcode = '';
     var error_primary_phone = '';
     var mobile_validation = /^\d{10}$/;
     var error_email = '';
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     var error_txt_message = '';
     
     if($.trim($('#fName').val()).length == 0)
     {
      error_fName = 'First Name is required';
      $('#error_fName').text(error_fName);
      $('#fName').addClass('has-error');
     }
     else
     {
      error_fName = '';
      $('#error_fName').text(error_fName);
      $('#fName').removeClass('has-error');
     }
     
     if($.trim($('#lName').val()).length == 0)
     {
      error_lName = 'Last Name is required';
      $('#error_lName').text(error_lName);
      $('#lName').addClass('has-error');
     }
     else
     {
      error_lName = '';
      $('#error_lName').text(error_lName);
      $('#lName').removeClass('has-error');
     }

     if($.trim($('#property_street').val()).length == 0)
     {
      error_property_street = 'Address is required';
      $('#error_property_street').text(error_property_street);
      $('#property_street').addClass('has-error');
     }
     else
     {
      error_property_street = '';
      $('#error_property_street').text(error_property_street);
      $('#property_street').removeClass('has-error');
     }

     if($.trim($('#property_city').val()).length == 0)
     {
      error_property_city = 'City is required';
      $('#error_property_city').text(error_property_city);
      $('#property_city').addClass('has-error');
     }
     else
     {
      error_property_city = '';
      $('#error_property_city').text(error_property_city);
      $('#property_city').removeClass('has-error');
     }

     if($.trim($('#property_state').val()).length == 0)
     {
      error_property_state = 'State is required';
      $('#error_property_state').text(error_property_state);
      $('#property_state').addClass('has-error');
     }
     else
     {
      error_property_state = '';
      $('#error_property_state').text(error_property_state);
      $('#property_state').removeClass('has-error');
     }

     if($.trim($('#property_zipcode').val()).length == 0)
     {
      error_property_zipcode = 'Zip Code is required';
      $('#error_property_zipcode').text(error_property_zipcode);
      $('#property_zipcode').addClass('has-error');
     }
     else
     {
      error_property_zipcode = '';
      $('#error_property_zipcode').text(error_property_zipcode);
      $('#property_zipcode').removeClass('has-error');
     }

     if($.trim($('#primary_phone').val()).length == 0)
     {
      error_primary_phone = 'Primary Phone number is required';
      $('#error_primary_phone').text(error_primary_phone);
      $('#primary_phone').addClass('has-error');
     }
     else
     {
      if (!mobile_validation.test($('#primary_phone').val()))
      {
       error_primary_phone = 'Invalid Mobile Number';
       $('#error_primary_phone').text(error_primary_phone);
       $('#primary_phone').addClass('has-error');
      }
      else
      {
       error_primary_phone = '';
       $('#error_primary_phone').text(error_primary_phone);
       $('#primary_phone').removeClass('has-error');
      }
     }

     if($.trim($('#email').val()).length == 0)
     {
      error_email = 'Email is required';
      $('#error_email').text(error_email);
      $('#email').addClass('has-error');
     }
     else
     {
      if (!filter.test($('#email').val()))
      {
       error_email = 'Invalid Email';
       $('#error_email').text(error_email);
       $('#email').addClass('has-error');
      }
      else
      {
       error_email = '';
       $('#error_email').text(error_email);
       $('#email').removeClass('has-error');
      }
     }

     if($.trim($('#txt_message').val()).length == 0)
     {
      error_txt_message = 'Message is required';
      $('#error_txt_message').text(error_txt_message);
      $('#txt_message').addClass('has-error');
     }
     else
     {
      error_txt_message = '';
      $('#error_txt_message').text(error_txt_message);
      $('#txt_message').removeClass('has-error');
     }
   
     if(error_fName != '' || error_lName != ''|| error_property_street != '' || error_property_city != '' || error_property_state != '' || error_property_zipcode != '' || error_primary_phone != '' || error_email != '' || error_txt_message != '')
     {
      return false;
     }
     else
     {
        $('#btn_personal_details').attr("disabled", "disabled");
        $(document).css('cursor', 'prgress');
        $("#refi_form").submit();
       }
    });    
   });