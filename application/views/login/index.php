<!--?php
	echo Form::open('/', 'POST');

	echo Form::label('s', 'Username');
	echo Form::text('s','');

	echo Form::hidden('ajax','1');

	echo Form::submit('Login');

	echo Form::close();
-->


<!doctype html>
<html lang="en">
<head>
	<meta chrset="utf-8">
	<title>Identity Crisis</title>

	<link rel="Shortcut Icon" href=<?php echo "\"".URL::base()."/img/favicon.ico\""; ?> >
	<link rel="stylesheet" type="text/css" href=<?php echo "\"".URL::base()."/css/login.css\""; ?> />
	<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/jquery-1.7.2.js\""; ?>> </script>
</head>

<body>
	

	<div id="la_verycenter"><div id="la_loadbar"></div><div id="la_status"></div>
	<div id="la_inner"><div id="la_loading_text">Loading Resources</div></div></div>


<div id="la_background_text"> 	
	<center>
		<img id="img_login" src=<?php echo "\"".URL::base()."/img/theDeparted_login_2.svg\""; ?> />
	</center>
</div>


<div class="userinput_desc">
	<center>
	<!-- convert this bit to php, for a random function generating a new string everytime -->
	<!-- <p class="userinput_caption">Your Name, Sapian!</p>-->
	<p id="feedback_title">Identify Yourself</p>
	<!-- <img class="spin" height="30" src= <?php echo "\"".URL::base()."/img/spinner.png\""; ?>  /> -->

	<input id="main_input_box" class="userinput_text input_box" type="text"> </input>

	<!-- 	 -->
	<!-- <p id="Spinner" style="-webkit-mask-image: url(<?php echo URL::base()."/img/spinner.png"; ?>);">Loading</p> -->


<div id="list_center_maker">
	<!-- <p class="List_Loading" >Fetching Names</p> -->
	
	<!-- <img class="spin" src= <?php echo "\"".URL::base()."/img/spinner.png\""; ?>  /> -->
	<p class="list_load_text">Loading..</p>
<ul id="list_of_names">
</ul>
</div>


<br/>
<div class="userinput_desc">
	<input id="password_input_box" class="userinput_text input_box" type="password" value="password" style="text-align:center;"> </input>
	<br><br>
	<p class="small_font"> <a id="change_user" class="links_below">change user name</a> | <a id="forgot_password" class="links_below">forgot password!</a> </p> </div>
	<br><br>
	<div id="msg_new_user" class="msg_below">
		<p>Your password has been sent to your official IISER email account.</p>
		<p>If you're unable to login, contact <a href="mailto:toatularora@gmail.com">theDeparted</a>.</p>
	</div>
	<div id="msg_no_guests" class="msg_below">
		<p>Guest Login is currently unavailable. You will be redirected shortly.</p>
		<p>Not a guest? Contact <a href="mailto:toatularora@gmail.com">theDeparted</a>.</p>
	</div>
	<div id="msg_forgot_password" class="msg_below">
		<p>We've sent your password to your official IISER email account.</p>
		<p>Did not receive an email? Contact <a href="mailto:toatularora@gmail.com">theDeparted</a>.</p>		
	</div>
	<div id="msg_error" class="msg_below">		
	</div>
</div>
</center>
</div>
<textarea rows="10" cols="100" id="DEBUG"><?php echo URL::base(); ?></textarea>
<input style="display:none" type="text" id="lara_path" value=<?php echo "\"".URL::base()."\"" ?> > </input>
<input style="display:none" type="text" id="loadtype" value=<?php echo "\"".$loadtype."\"" ?> > </input>
<input style="display:none" type="text" id="address" value=<?php echo "\"".$address."\"" ?> > </input>

<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/login.js\""; ?>>	</script>
</body>

</html>