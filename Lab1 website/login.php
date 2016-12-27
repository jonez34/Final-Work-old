<?php include('Topheader.henryjones'); ?>
<title>DWD277HenryJones | login</title>
<?php include('Middleheader.henryjones'); ?>
    <ul id="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Me</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li><a href="comments.php">Comments</a></li>
      <li><a href="register.php">Register</a></li>
	  
    </ul>
<?php include('Bottomheader.henryjones'); ?>
<h2>Member Login </h2>
<?php include('Contentstart.henryjones'); ?>
<!-- resource from url:(http://www.phpeasystep.com/phptu/6.html)
 form used to gather login info and call checklogin.php -->
<form name="form1" method="post" action="checklogin.php">
<p>Username</p>
<p><input name="myusername" type="text" id="myusername"></p>
<p>Password</p>
<p><input name="mypassword" type="password" id="mypassword"></p>
<p><input type="submit" name="Submit" value="Login"></p>
</form>
<br />
<p>Logout</p>
<form action="logout.php" method="post">
<input type='submit' name='submit' value='Logout'  />
</form>
<br />
<p>Reset Password</p>
<form action="passwordreset.php" method="post">
<input type='submit' name='submit' value='Reset'  />
</form>
<?php include('Footer.henryjones'); ?>