<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 

  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>    
    <title>Jotorres Login Screen | Welcome </title>
</head>
<body>
    <div id='login_form'>
    <?php foreach ($users as $row): ?>


        <form action='<?php echo base_url();?>index.php/login/updatedata/<?php echo  $row->userid;?>' method='post' name='process'>
           
            
            <h2>User Login</h2>
            <br />            
            <label for='username'>name</label>
            <input type='text' name='name' id='name' size='25' value="<?php echo  $row->name;?>"/><br />
			
			<label for='lastname'>lastname</label>
            <input type='text' name='lastname' id='lastname' size='25'  value="<?php echo  $row->lastname;?>" /><br />
        
            <label for='email'>email</label>
            <input type='email' name='email' id='email' size='25'  value="<?php echo  $row->email;?>" /><br />    

         
        
            <label for='password'>password</label>
            <input type='password' name='password' id='password' size='25'  value="<?php echo  $row->password;?>"/><br /> 
			
          <?php endforeach; ?>
            <input type='Submit' value='update' />            
        </form>
        
    </div>
</body>
</html>