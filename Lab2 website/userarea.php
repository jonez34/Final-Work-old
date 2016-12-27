<?php 
session_start();
if (!isset( $_SESSION['myusername'] ) ){
header("location:login.php");
}
?>


<?php include('Topheader.henryjones'); ?>
<title>DWD277HenryJones | Home</title>
<?php include('Middleheader.henryjones'); ?>
      
	  
	<ul id="menu">
      <li><a href="index.php">Library</a></li>
      <li class="active"><a href="userarea.php">User area</a></li>
    </ul>
    
<?php include('Bottomheader.henryjones'); ?>
  
    <h2>Welcome to the user area</h2>
        
<?php include('Contentstart.henryjones'); ?> 
<p>Logout</p>
<form action="logout.php" method="post">
<input type='submit' name='submit' value='Logout'  />
</form>
<br />
<p>Reset Password</p>
<form action="passwordreset.php" method="post">
<input type='submit' name='submit' value='Reset'  />
</form>
<br />
<p>Load Data into Library</P>
<form action="libraryload.php" method="post">
<input type='submit' name='submit' value='Load'  />
</form><br />

<?php include('Footer.henryjones'); ?>