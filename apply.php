<?php include ('formValidate.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Apply Now</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui-1.8.11.custom.css" rel="stylesheet" type="text/css">
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js'></script>
<script type="text/javascript" src="http://s1.conveythis.com/e2/_v_3/javascript/e3.js"></script>
<script type='text/javascript' src="js/custom.js"></script>
<script type='text/javascript' src="js/jquery.validate.js"></script>
<script type='text/javascript' src="/js/jquery-ui-1.8.11.custom.min.js"></script>
      
	<script>
	$(function() {
		$( "#birthday" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
		$( "#birthday" ).datepicker({ yearRange: '1930:2021' });
		
		//getter
var yearRange = $( "#birthday" ).datepicker( "option", "yearRange" );
//setter
$( "#birthday" ).datepicker( "option", "yearRange", '1930:2021' );
	});
	</script>


<link rel="shortcut icon" href="favicon.png">
</head>
<body>
    <!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
.twoColFixRtHdr #sidebar1 { width: 220px; }
</style>
<![endif]--><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColFixRtHdr #sidebar1 { padding-top: 30px; }
.twoColFixRtHdr #mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->

<div id="container">
<!-- Begin ConveyThis Button -->
<script type="text/javascript">
	var conveythis_src = 'en';
</script>
<div class="conveythis">
	<a class="conveythis_drop" title="Translate" href="http://www.translation-services-usa.com/"><span class="conveythis_left_image">translation</span></a> 
	<a class="conveythis_drop" title="Translate" href="http://www.conveythis.com/">Translate</a>
	<span class="conveythis_seperator"> | </span>
	<a class="conveythis_no_drop" title="Spanish" href="http://www.translation-services-usa.com/spanish.php" rel="es"><span class="conveythis_image_spanish">Spanish</span></a> 
	<a class="conveythis_no_drop" title="German" href="http://www.translation-services-usa.com/german.php" rel="de"><span class="conveythis_image_german">German</span></a> 
	<a class="conveythis_no_drop" title="Chinese" href="http://www.translation-services-usa.com/chinese.php" rel="zh-CN"><span class="conveythis_image_chinese">Chinese</span></a> 
	<a class="conveythis_no_drop" title="Japanese" href="http://www.translation-services-usa.com/japanese.php" rel="ja"><span class="conveythis_image_japanese">Japanese</span></a>
</div>

<!-- End ConveyThis Button -->

<div id="header">
<h1>ARC Rentals</h1>
<div id="headertext">
<p>ARC Rentals has 5 communities in the Lexington-West Columbia area. They have great Lexington One Schools, are close to shopping and interstates, and have county recreational facilities nearby. Rental rates are affordable with water and sewer included. Senior citizen discounts available upon request.</p>
<p>Office: 4220 Augusta Road Lexington, South Carolina 29073<span class="textalignright">Phone: 803.730.7155</span></p>
</div>
<!-- end header text -->
<div class="mainlogo"><a href="index.html"><img src="images/ARCLogo(small).png" alt="logo"></a></div>
<!-- end #header --></div>
<!-- main navigation -->
<div id="navigation">
<ul id="primaryNav">
<li><a href="index.html">home</a></li>
<li><a href="communities.html">our communities</a></li>
</ul>
<ul id="secondaryNav">
<li><a href="apply.php">apply now</a></li>
</ul>
</div>
<!--end main navigation -->
<div id="mainContentWrapper">
<div id="sidebar">
<h3>quick links<img class="ribbon" src="images/quicklinksribbon.png" alt="ribbon"></h3>
<ul id="sidebarnav">
<li><a href="hiddenvalley.html">hidden valley</a></li>
<li><a href="davis.html">davis estates</a></li>
<li><a href="hermitage.html">hermitage pond</a></li>
<li><a href="hyler.html">hyler acres</a></li>
<li><a href="paradise.html">paradise gardens</a></li>
</ul>
<!-- end #sidebar1 --></div>
<div id="mainContent">
<h1>Pre-Qualification Application</h1>
<p>This form is for pre-qualification only. This does not constitute an approval.</p>
<form id="form" lang="en" name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<?php if ($_POST && isset($missing) && !empty($missing)) {
            ?>
<p class="warning">Please complete the missing item(s) indicated.</p>
<?php
            } elseif ($_POST && $mailSent) {
            ?>
<p class="thankyou">Thank You. Your application has been sent.</p>
<?php } ?>
<fieldset><legend>Personal Information</legend>
<p><label for="firstname">First Name:</label><input class="required" type="text" name="firstname" id="firstname" tabindex="1" title="please enter your first name"><span class="required">(required)</span></p>
<p><label for="middlename">Middle Name:</label><input class="required" type="text" name="middlename" id="middlename" tabindex="2" title="please enter your middle name"><span class="required">(required)</span></p>
<p><label for="lastname">Last Name:</label><input class="required" type="text" name="lastname" id="lastname" tabindex="3" title="please enter your last name"><span class="required">(required)</span></p>
<p><label for="birthday">Date of Birth:</label><input class="required" type="text" name="birthday" id="birthday" tabindex="4" title="please enter your date of birth"><span class="required">(required)</span></p>
<p><label for="address">Street Address:</label><input class="required" type="text" name="address" id="address" tabindex="5" title="please enter your address"><span class="required">(required)</span></p>
<p><label for="county">County:</label><input class="required" type="text" name="county" id="county" tabindex="6" title="please enter your county"><span class="required">(required)</span></p>
<p><label for="state">State:</label><input class="required" type="text" name="state" id="state" tabindex="7" title="please enter your state name"><span class="required">(required)</span></p>
<p><label for="phone">Phone (with area code):</label><input class="required" type="text" name="phone" id="phone" tabindex="8" title="please enter your 10 digit telelphone number (##########)"><span class="required">(required)</span></p>
<p><label for="email">Email Address:</label><input class="required" type="text" name="email" id="email" tabindex="9" title="please enter your email address"><span class="required">(required)</span></p>
<p><label for="time">What is the best time of day to contact you?</label><input type="text" name="time" id="time" tabindex="10"></p>
</fieldset>
<fieldset><legend>Employment and Income</legend>
<p><label for="employment" id="employment">Are you currently employed full time?</label> <label><input type="radio" name="employment" value="yes" id="employment_0"> yes</label> <label><input type="radio" name="employment" value="no" id="employment_1"> no</label></p>
<p><label for="employlength">How long have you been on the job?</label><input type="text" name="employlength" id="employlength" tabindex="11"></p>
<p><label for="netincome">What is your monthly net income?</label><input type="text" name="netincome" id="netincome" tabindex="12"></p>
</fieldset>
<fieldset><legend>Specific Rental Needs</legend>
<p><label for="bedrooms">How many bedrooms do you need? <?php if (isset($missing) && in_array('bedrooms', $missing))  ?></label> <select id="bedrooms" name="bedrooms">
<option value="0">please choose</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="Any">Any</option>
</select></p>
<p><label for="homesize">What is the size of the home you need? <?php if (isset($missing) && in_array('homesize', $missing))  ?></label> <select id="homesize" name="homesize">
<option value="0">please choose</option>
<option value="16x80">16x80</option>
<option value="14x70">14x70</option>
<option value="12x60">12x60</option>
<option value="Other">Other</option>
</select></p>
<p><label for="website">How did you find our website? <?php if (isset($missing) && in_array('website', $missing))  ?></label> <select id="website" name="website">
<option value="0">please choose</option>
<option value="BusinessCard">Business Card</option>
<option value="Friend / Relative">Friend / Relative</option>
<option value="Newspaper">Newspaper</option>
<option value="Phonebook">Phonebook</option>
<option value="Radio">Radio</option>
<option value="Search Engine">Search Engine</option>
<option value="Drove By">Drove By</option>
<option value="Other">Other</option>
</select></p>
<p><label for="movein">When would you like to move in?:</label><input type="text" name="movein" id="movein" tabindex="13"></p>
<p><label for="pets" id="pets">Do you have pets?</label> <label><input type="radio" name="pets" value="yes" id="pets_0"> yes</label> <label><input type="radio" name="pets" value="no" id="pets_1"> no</label></p>
</fieldset>
<fieldset><legend>Additional Comments</legend> 
<textarea name="comments" id="comments" rows="11" cols="30" tabindex="14">
</textarea></fieldset>
<fieldset><legend>Security Code</legend>
<p><label for="accesscode">Access code:</label><input class="required" type="text" name="code" tabindex="15" title="please enter the access code" /><span class="required">(required)</span></p>
<p><label for="codehint">Please enter <b>ARC01</b> in the field above.</label></p>
</fieldset>
<input name="submit" type="submit" class="submitbtn" value="Submit Application">
</form>
</div>
<!-- end #mainContent --></div>
<!-- end mainContentWrapper -->
<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat">
<div id="footer">
<p>website design by <a href="http://www.unstuffeddesign.com">unstuffed design</a><span class="textalignright">copyright © <?php ini_set('date.timezone', 'America/New_York');
  echo date('Y');
  ?> . all rights reserved.</span></p>
<!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>