<?php include('Topheader.henryjones'); ?>
<title>DWD277HenryJones | Register</title>
<?php include('Middleheader.henryjones'); ?>
<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
?>
    <ul id="menu">
      <li><a href="index.php">Library</a></li>
      <li><a href="userarea.php">User area</a></li>
    </ul>
<?php include('Bottomheader.henryjones'); ?>
		<h2>Register</h2>
<?php include('Contentstart.henryjones'); ?>		
     <p>All fields are required.</p>
      <form name="Register" action="registerload.php" method="post">
        <p>Name</p>
        <p>
          <input type="text" name="name" />
        </p>
        <p>Email</p>
        <p>
          <input type="text" name="emailaddress" />
        </p>
		<p>Username</p>
		<p>
          <input type="text" name="username" />
        </p>
		<!--<p>Password</p>
		<p>
          <input type="password" name="password" />
        </p>-->		
        <p>
          <input type="submit" value="Submit" name="submitButton" class="button" />
        </p>
      </form>
<?php include('Footer.henryjones'); ?>