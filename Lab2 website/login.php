<?php include('Topheader.henryjones'); ?>
<title>DWD277HenryJones | login</title>
<?php include('Middleheader.henryjones'); ?>
   <ul id="menu">
      <li><a href="index.php">Library</a></li>
      <li><a href="userarea.php">User area</a></li>
    </ul>
<?php include('Bottomheader.henryjones'); ?>
<h2>Member Login </h2>
<?php include('Contentstart.henryjones'); ?>
<!-- resource from url:(http://www.phpeasystep.com/phptu/6.html)
 form used to gather login info and call checklogin.php -->
<form name="login" method="post" action="checklogin.php">
<p>Username</p>
<p><input name="myusername" type="text" id="myusername"></p>
<br />
<p>Password</p>
<p><input name="mypassword" type="password" id="mypassword"></p>
<br />
<p><input type="submit" name="Submit" value="Login"></p>
</form>
<br />
<form name="register" method="post" action="register.php">
<p>If you like access please Register</p>
<p><input type="submit" name="Submit" value="Register"></p>
</form>
<br />

<!--<p>Logout</p>
<form action="logout.php" method="post">
<input type='submit' name='submit' value='Logout'  />
</form>
<br />
<p>Reset Password</p>
<form action="passwordreset.php" method="post">
<input type='submit' name='submit' value='Reset'  />
</form>-->
<?php include('Footer.henryjones'); ?>