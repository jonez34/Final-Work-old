<?php
// resource Url;http://www.findsourcecode.com/php/how-to-create-comment-box-in-php-all-language-support/) 
//starts login check session, if not logged in will redirect you to login page
session_start();
if (!isset( $_SESSION['myusername'] ) ){
header("location:login.php");
}

?>

<?php include('Topheader.henryjones'); ?>
<title>DWD277HenryJones | Library Load</title>

<?php include('Middleheader.henryjones'); ?>
<!-- created navigation header for website -->

    <ul id="menu">
      <li><a href="index.php">Library</a></li>
      <li><a href="userarea.php">User area</a></li>
    </ul>
<?php include('Bottomheader.henryjones'); ?>
    <h2>Library Load</h2>
	<?php include('Contentstart.henryjones'); ?> 
	<!-- creates comment section and directs to the load data page on submit -->
<form name="Comment" action="libraryloaddata.php" method="POST">
	<table>
	<tr><td>Title <br><input type="text" name="title"/></td></tr>
	<tr><td>Author <br><input type="text" name="author"/></td></tr>
	<tr><td>Year <br><input type="year" name="year"/></td></tr>
	<tr><td>Type <br><input type="text" name="type"/></td></tr>
	<tr><td colspan="2"><input type="submit" name="submit" value="Load"></td></tr>
	</table>
	</form>
	
	<?php include('Footer.henryjones'); ?>