<!DOCTYPE html>
<html>
<head>
    <title>Send an Email</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

  <div class="container-contact100">


    <div class="wrap-contact100">
      <form  id="myForm" class="contact100-form validate-form">
        <h4 class="sent-notification"></h4>
        <span class="contact100-form-title">
          Contact Us
        </span>
         
      <div class="wrap-input100 validate-input" data-validate="Please enter your name">
      <input id="name" class="input100" type="text" name="name" placeholder="Enter Name">
      <span class="focus-input100"></span>
        </div>

      <div class="wrap-input100 validate-input" data-validate = "Please enter email: e@a.x">
          <input id="email" class="input100" type="text" name="email" placeholder="Enter Email">
          <span class="focus-input100"></span>
        </div>

       
       
    
  

     <div class="wrap-input100 validate-input" data-validate = "Please enter your message">
          <textarea id="body" class="input100" name="message" placeholder="Type Message"></textarea>
          <span class="focus-input100"></span>
        </div>

    
       <div class="container-contact100-form-btn">
      <button  class="contact100-form-btn"  type="reset" onclick="sendEmail()" value="Send An Email">Submit</button> 
      </div>
    </form>
  
  <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12" style="text-align: center;">
           
         <a href="" target="_blank"><img style="padding-left: 10px; width: 40px; height: 40px;" src="https://www.flaticon.com/svg/vstatic/svg/145/145802.svg?token=exp=1612811840~hmac=caa5aad9868e9bbda2c5fe61bc951161"></a>
         <a href="" target="_blank"><img style="padding-left: 10px; width: 40px; height: 40px;" src="https://www.flaticon.com/svg/vstatic/svg/733/733579.svg?token=exp=1612811610~hmac=26a111830f2341087e48c3aebea87219"></a>
         <a target="_blank" href=""><img style="padding-left: 10px; width:40px; height: 40px;" src="https://www.flaticon.com/svg/vstatic/svg/2111/2111646.svg?token=exp=1612811651~hmac=faa5d985ae6b3129ccb74cdf59587c50"></a>
       <a href="https://www.google.com/" target="_blank"> <img style="padding-left: 10px; width: 40px; height: 40px;" src="https://www.flaticon.com/svg/vstatic/svg/733/733585.svg?token=exp=1612811693~hmac=708c06f9ecb8e44b476729b0b4d20a02"></a>
            </p>
            

         
        </div>
      </div>
    </div>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email)  && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>