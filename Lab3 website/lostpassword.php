<?php include('Topheader.henryjones'); ?>
<title>DWD277HenryJones | Lost Password</title>

<?php include('Middleheader.henryjones'); ?>
<!-- created navigation header for website -->

	<ul id="menu">
      <li><a href="index.php">Library</a></li>
      <li><a href="userarea.php">User area</a></li>
    </ul>
<?php include('Bottomheader.henryjones'); ?>
    <h2>Lost Password</h2>
<?php include('Contentstart.henryjones'); ?> 	
	<!--creates password reset and directs to the load data page on submit-->
<form name="Comment" action="lostpasswordload.php" method="POST">
		<p>Username</p>
		<p>
          <input type="text" name="username" />
        </p>
		<p>
          <input type="submit" value="Submit" name="submitButton"  />
        </p>		
        </form>
		
		<?php include('Footer.henryjones');