<link href="<?php echo base_url();?>style/mystyle.css" type="text/css" rel="stylesheet">
<script src="<?php echo base_url();?>js/my_script.js"></script>

<div class="container">
    <br/>
    <div class="row">
    <h3><a><b >Find Donor</b></a></h3>    
        <br/>
    <table>
        <tr>
            <td> <span style=color:black> Blood Group &nbsp;&nbsp;&nbsp;</span>
         <select id='blood_group'>
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
        <span style=color:black>&nbsp;&nbsp;&nbsp; State &nbsp;&nbsp;&nbsp;</span>
       
            <select id='state'>
                <?php
                if($state)
                {
                    foreach($state as $row)
                    {
                    echo "<option value='".$row->city_state."'>".$row->city_state."</option>";
                    }
                }
                ?>
                
            </select>
        
       <span style=color:black>&nbsp;&nbsp;&nbsp;District&nbsp;&nbsp;&nbsp;</span>
       <select id="district"> <option value""> Select </option></select> </td></tr>
    </table>
    </div>
   
    
    <div class="row">
       <div id="d_name">change</div>
        <h3><a><b>Find Donor Result </b></a></h3>
    <br/>
        <table>
            <form action="<?php echo base_url();?>welcome/search" method="post">
            <tr><td><span style=color:black>Donor Name</span></td></tr> 
            <tr><td><input type="text" name="d_name" ></td></tr>
            <tr><td><?php echo form_error('d_name','<p style=color:red;font-size:14;>','</p>');?></td></tr>
            <tr><td><span style=color:black>Blood Group</span> </td></tr>
            <tr><td><input type="text" name="Blood_group"></td></tr>
            <tr><td><?php echo form_error('Blood_group','<p style=color:red;font-size:14;>','</p>');?></td></tr>
            <tr><td> <span style=color:black>Contact No.</span></td></tr>
            <tr><td><input type="text" name="Contact No."></td></tr>
            <tr><td><?php echo form_error('Contact No.','<p style=color:red;font-size:14;>','</p>');?></td></tr>
            <tr><td><span style=color:black>Address</span></td></tr>
            <tr><td><input type="text" name="Address"></td></tr>
            <tr><td><?php echo form_error('Address','<p style=color:red;font-size:14;>','</p>');?></td></tr>
            <tr><td><span style=color:black>Eligible</span> </td></tr>
            <tr><td><input type="text" name="Eligible"></td></tr>
            <tr><td><?php echo form_error('Eligible','<p style=color:red;font-size:14;>','</p>');?></td></tr>
        </table>
    </div>
    
</div>
    <select id="test">
        <option value="a"> A </option>
        <option value="b"> B </option>
        
        <option value="c"> C </option>
    </select>
    <input type="hidden" name="url" id='url' value="<?php echo base_url();?>">