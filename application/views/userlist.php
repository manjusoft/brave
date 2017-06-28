<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Display Records From Database Using Codeigniter</title>
 
 </head>
 <body>
  <div class="row">
   <div style="width:500px;margin:50px;">
    <h4>userlist</h4>
    <table class="table table-striped table-bordered">
     <tr><td><strong>User Id</strong></td><td><strong>First Name</strong></td><td><strong>Last Name</strong></td><td><strong>Email</strong></td><td>edit</td><td>delete</td></tr> 
     <?php foreach($EMPLOYEES as $employee){?>
     <tr><td><?php echo $employee->userid;?></td><td><?php echo $employee->name;?></td><td><?php echo $employee->lastname;?></td><td><?php echo $employee->email;?></td><td><a href='<?php echo base_url();?>index.php/login/edit/<?php echo $employee->userid;?>'>edit</a></td>
     <td><a href='<?php echo base_url();?>index.php/login/delete/<?php echo $employee->userid;?>'>delete</a></td>
     
     </tr>     
        <?php }?>  
    </table>
   </div> 
  </div> 
 </body>
</html>