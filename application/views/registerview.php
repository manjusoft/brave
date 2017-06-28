<html>
<head>
  
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  
  <link href="runnable.css" rel="stylesheet" />
  <!-- Load jQuery and the validate plugin -->
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  <style>
label.error {
  color: #a94442;
  
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}








  </style>
  <!-- jQuery Form Validation code -->
  <script>
  
  // When the browser is ready...
  $(function() {

    $(".text").hide();
    $("#yes").click(function () {
        $(".text").show();
    });
    $("#no").click(function () {
        $(".text").hide();
    });
  
    // Setup form validation on the #register-form element
    $("#register-form").validate({
    
        // Specify the validation rules
        rules: {
            firstname: "required",
            lastname: "required",
            gender:"required",
            voterid:"required",
            text:"required",
             //  department:{ valueNotEquals:"-1" },
            adharid:"required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },

department: {  // <-- this is the name attribute
        required: true
    },

            agree: "required"
        
        
       
        },
        
        // Specify the validation error messages
        messages: {
            text:"please enter your choice",
            firstname: "Please enter your first name",
            lastname: "Please enter your last name",
            gender:"you must select one of the radio",
             voterid:"you must tel that wether you possess voterid",
              adharid:"you must tel that wether you possess adharid",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address",
             //department: {valueNotEquals: "Please select the department"},
department:"please select the department",
            agree: "Please accept our policy"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
</head>
<body>
  <h1>Register here</h1>

  <!--  The form that will be parsed by jQuery before submit  -->
  <form action="" method="post" id="register-form" novalidate="novalidate">
  
    <div class="label">First Name</div><input type="text" id="firstname" name="firstname" /><br />
    <div class="label">Last Name</div><input type="text" id="lastname" name="lastname" /><br />
    <div class="label">Email</div><input type="text" id="email" name="email" /><br />
    <div class="label">gender</div>
    <input type="radio" name="gender" value="male" id="yes">yes<br/>
     <div class="label"><input type="radio" name="gender" value="female" id="no">no</div><br/>
 <div class="label">do you have voterid</div><input type="checkbox" id="voterid" name="voterid" value="voterid" /><br />
 <div class="label">do you have adharcard</div><input type="checkbox" id="adharcard" name="adharid" value="adharcard"/><br />
    <div class="label">Password</div><input type="password" id="password" name="password" /><br />
    <div class="label">choose department</div><select name="department">
    <option value="">select</option>
    <option value="ece">electronics and communication engineering</option>
    <option value="mech">mechanical engineering</option>
    <option value="cs">computer science</option>
    </select>
    <br />
<div class="text">
    <p>age
        <input type="text" name="text" id="text1" maxlength="30">
    </p>
</div>



    <div style="margin-left:140px;"><input type="submit" name="submit" value="Submit" /></div>
    
  </form>
  
</body>
</html>