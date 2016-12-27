<?php
// resource Url;http://www.findsourcecode.com/php/how-to-create-comment-box-in-php-all-language-support/) 
//starts login check session, if not logged in will redirect you to login page
session_start();
if (!isset( $_SESSION['myusername'] ) ){
header("location:login.php");
}
?>

<?php include('Topheader.henryjones'); ?>
<title>DWD277HenryJones | Password</title>

<?php include('Middleheader.henryjones'); ?>
<!-- created navigation header for website -->

	<ul id="menu">
      <li><a href="index.php">Library</a></li>
      <li><a href="userarea.php">User area</a></li>
    </ul>
<?php include('Bottomheader.henryjones'); ?>
    <h2>Password Reset</h2>
<?php include('Contentstart.henryjones'); ?> 	
	<!--creates password reset and directs to the load data page on submit-->
<form name="Comment" action="passwordresetload.php" method="POST">
		<p>Password</p>
		<p>
          <input type="password" name="password" />
        </p>
		<p>
          <input type="submit" value="Submit" name="submitButton" class="button" />
        </p>		
        </form>
		
		<?php include('Footer.henryjones');