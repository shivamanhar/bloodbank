<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
		<meta name="resource-type" content="document" />
		<meta name="robots" content="all, index, follow"/>
		<meta name="googlebot" content="all, index, follow" />
	<?php
	/** -- Copy from here -- */
	if(!empty($meta))
	foreach($meta as $name=>$content){
		echo "\n\t\t";
		?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
			 }
	echo "\n";

	if(!empty($canonical))
	{
		echo "\n\t\t";
		?><link rel="canonical" href="<?php echo $canonical?>" /><?php

	}
	echo "\n\t";

	foreach($css as $file){
	 	echo "\n\t\t";
		?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
	} echo "\n\t";

	foreach($js as $file){
			echo "\n\t\t";
			?><script src="<?php echo $file; ?>"></script><?php
	} echo "\n\t";

	/** -- to here -- */
?>

    <!-- Le styles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <link rel="shortcut icon" href="<?php echo base_url();?>img/icon.jpg" type="image/x-icon">
        <!-- jQuery library -->
        <script src="<?php echo base_url();?>js/jquery.min.js"></script>        
        <!-- Latest compiled JavaScript -->
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.js"></script>
        <script src="<?php echo base_url();?>js/plugins.js"></script>
        <script src="<?php echo base_url();?>js/main.js"></script>
        <script src="<?php echo base_url();?>js/scrolling-nav.js"></script>
        <script src="<?php echo base_url();?>js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url();?>js/jquery.js"></script>
        <script src="<?php echo base_url();?>js/jquery.min.js"></script>
        <!-- google lato font -->
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        
        <script src="<?php echo base_url();?>js/vendor/modernizr-2.8.3.min.js"></script>
        
        <link rel="stylesheet" href="<?php echo base_url();?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/main.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/mystyle.css">
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}

	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	.mred
	{
		background-color:#8c0000;
		
	}
	
	</style>

</head>

  <body>

   <!-- Fixed navbar -->
    <header class="header">
            
            <nav class="navbar navbar-inverse navbar-fixed-top mred" role"="navigation">
            <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <i class="fa fa-bars"></i>
                            
                          </button>
                          <a class="navbar-brand" href="#">CGBloodBank</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav navbar-right ">
				<li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
				<li><a href="<?php echo site_url('welcome/search'); ?>">Search</a></li>
				<li><a href="<?php echo site_url('welcome/who_can'); ?>">Who can?</a></li>
				<li><a href="<?php echo site_url('welcome/blood_bank'); ?>">Blood bank</a></li>
			      <li><a href="<?php echo site_url('welcome/contact'); ?>">Contact</a></li>
			      <?php
			      if($this->session->userdata('is_logged_in'))
				{
					?>
			      <li><a href="<?php echo site_url('welcome/logout'); ?>">Signout</a></li>
                           <?php
				}?>
                          </ul>
                          
                        </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            </nav>
            
        </header>

    <div class="container">
    <?php if($this->load->get_section('text_header') != '') { ?>
    	<h1><?php echo $this->load->get_section('text_header');?></h1>
    <?php }?>
    
    <div class="row">
	    <?php echo $output;?>
		<?php echo $this->load->get_section('sidebar'); ?>
    </div>
      <hr/>

      <footer>
      	<div class="row">
	        <div class="span6 b10">
				Copyright &copy; <a target="_blank" href="#">ankita dewangan</a> | <a target="_blank" href="#">www.leenades.org</a>
	        </div>
        </div>
      </footer>

    </div> <!-- /container -->
</body></html>
