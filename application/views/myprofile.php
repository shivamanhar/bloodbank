<link href="<?php echo base_url();?>style/mystyle.css" type="text/css" rel="stylesheet">
<script src="<?php echo base_url();?>js/my_script.js"></script>
<div class="container">
    <br/>
    <h1>My Profile </h1>
    <?php echo validation_errors();?>
<p> <b> To complete your registration we need more information about you. </b></p>
<form action="<?php echo base_url();?>welcome/update_profile" method="post">
Name<br/>
<input type="text" name="name" size="51"> <br/>
Blood Group 
<select name="blood_group">
            <option value=""  > Select </option>
            <option value="A+"> A+ </option>
            <option value="B+"> B+ </option>
            <option value="AB+"> AB+ </option>
            <option value="O+"> O+ </option>
            <option value="A-"> A- </option>
            <option value="B-"> B- </option>
            <option value="AB-"> AB- </option>
            <option value="O-"> O- </option>
         </select>

Date of birth*

<input type="date" name="dob" style="height:25px"><br/>
<hr/>

<table>
    <tr> <td class="col-md-4">Gender </td> <td> <input type="radio" name="gender" value="male">
    
Male
    
<input type="radio" name="gender" value="female">
Female </td></tr>
    <tr> <td class="col-md-4">Status: </td> <td> <input type="radio" name="marriage" value="marriage"> Marriage <input type="radio" name="marriage" value="unmarriage"> Unmarriage </td></tr>
    <tr> <td class="col-md-4">Contact No. </td> <td> <input type="text" name="contact_no" maxlength="10"></td></tr>
    
    <tr> <td class="col-md-4">Address :</td> <td> <textarea name="address" cols="32"> </textarea></td></tr>
    <tr>
            <td class="col-md-4">State :</td>
            <td>
            <select id="state" name="state">
             <?php
             echo "<option value=''>Select </option>";
                        if($state)
                        {
                            foreach($state as $row)
                            {
                            echo "<option value='".$row->city_state."'>".$row->city_state."</option>";
                            }
                        }
                        ?>
                        
            </select>
            </td>
    </tr>
    <tr> <td class="col-md-4">District :</td> <td>
    <select name="district" id="district">
    <option value=""> Select </option>
    
</select>
    </td></tr>
</table>
<hr/>
<input type="hidden" name="url" id='url' value="<?php echo base_url();?>">
    <input type="submit" value="Submit" class="btn btn-danger">
</form>
</div>