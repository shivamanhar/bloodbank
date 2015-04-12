<link href="<?php echo base_url();?>cs/mystyle.css" type="text/css" rel="stylesheet">
<div class="container">
    <br/>
    <div class="row">
    <h1> <span style=color:#910000;><b>Sign in or Register</b></span> </h1>
    <ul>
    <li>    Find a convenient donation session in local area and book an appointment.</li>
<li> View, Change or cancel appointments </li>
<li> Update your personal details </li>
    </ul>
<p><b> If you want to register as a new blood donor then you must be aged between 18+ . </b></p><br/><br/>
    </div>
    <div class="col-xs-8 col-md-6" id='sign'>
        
        <h3> <a><b>Sign In</b></a></h3><br/>
        <form action="<?php echo base_url();?>welcome/login" method="post">
        <table>
        <tr><td><span style=color:>Email Address</span> </td></tr>        
        <tr><td><input type="email" name="userid" size="30"></td></tr>
        <tr><td><?php echo form_error('userid','<p style=color:red;font-size:14;>','</p>'); ?></td></tr>
            <tr><td><span style=color:>Password</span> </td></tr>
           <tr><td> <input type="password" name="pass" size="30"></td></tr>
           <tr><td><?php echo form_error('pass','<p style=color:red;font-size:14;>','</p>'); ?></td></tr>
              <tr><td>  <input type="submit" value="Sign In" class="btn btn-danger"></td></tr>
        </table>
        </form>
    </div>
    <div class="col-xs-8 col-md-6">
        <h3><a><b>New Blood-Donor Register</b></a></h3>
        <br/>
       
        <table>
              <form action="<?php echo base_url();?>welcome/registration" method="post">
            <tr> <td colspan="2"><span style=color:>  Email Address</span> </td></tr>      
            <tr> <td> <input type="email" name="email" size="30"></td> <td> <?php echo form_error('email','<p style=color:red;font-size:14;>','</p>');?></td></tr>
           
            <tr> <td><span style=color:> Password </span></td></tr>
            <tr> <td><input type="password" name="password" size="30"></td> <td> <?php echo form_error('password','<p style=color:red;font-size:14;>','</p>');?></td></tr>
          
            <tr> <td><span style=color:> Conform Password</span> </td></tr>
            <tr><td> <input type="password" name="re_password" size="30"></td> <td> <?php echo form_error('re_password','<p style=color:red;font-size:14;>','</p>');?> </td></tr>
           
            <tr><td><input type="submit" value="Sign Up" class="btn btn-danger"></td></tr>
                </form>
        </table>
    </div>
    
    
</div>