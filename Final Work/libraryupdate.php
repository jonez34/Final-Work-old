<?php

session_start();
if (!isset( $_SESSION['myusername'] ) ){
header("location:login.php");
}

//Database initialization
//database info
$host='spartandevelomentcom.ipagemysql.com';
$usrname= 'spartandb';
$pwrd= 'shadow34';
$database= 'spartandb';

//database connection string
$con = mysql_connect($host, $usrname, $pwrd, $database);

$sql = "SELECT * FROM library ORDER BY itemid";
$query = mysql_query($con, $sql);

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
    <h2>Library Update</h2>
<?php include('Contentstart.henryjones'); ?> 
<?php
if(isset($_POST["loadbtn"]))
{
    $itemid = $_POST["itemid"];

    $sql2 = "SELECT title, author, year, type FROM library WHERE itemid = '$itemid' ";
    $query2 = mysql_query($con, $sql2);
    $row = mysql_fetch_array($query2);

    $savedtitle = $row['title'];
    $savedauthor = $row['author'];
    $savedyear = $row['year'];
	$savedtype = $row['type'];
	
	
}
?>
<?php
        $dropdown = "<select name='itemid'>";
        while($row = mysql_fetch_assoc($query)) 
        {
            $dropdown .= "\r\n<option value='{$row['itemid']}'>{$row['title']}</option>";
        }
        $dropdown .= "\r\n</select>";
		?>
<div id="upserv">
<b id="caption2">Update Library</b>
<br/><br/>
    <form name="upServForm" action="libraryupdate.php" method="post" >
        
     Service ID  <?php echo $dropdown; ?> <input type="submit" value="Load" name="loadbtn">
        <table width="300" border="0">		          
          <tr>
            <td>Title</td>
            <td><input type="text" name="upTitle" style="text-align:right" disabled="disabled" value="<? echo $savedtitle; ?>" /></td>
			 </tr>
          <tr>
            <td>Author</td>
            <td><input type="text" name="upAuthor" style="text-align:right" disabled="disabled" value="<? echo $savedauthor; ?>" /></td>
          </tr>
          <tr>
            <td>Year</td>
            <td><input type="text" name="upYear" style="text-align:right" disabled="disabled" value="<? echo $savedyear; ?>" /></td>
          </tr>
		  <tr>
            <td>Type</td>
            <td><input type="text" name="upType" style="text-align:right" disabled="disabled" value="<? echo $savedtype; ?>" /></td>
          </tr>
        </table>
	</form>
</div>
<br />
<p>Please change the data below and hit update.</p>
<br />
<div>
	<!-- creates comment section and directs to the load data page on submit -->
<form name="Comment" action="libraryupdatedata.php" method="POST">
	<table>
	<tr><td>Title <br><input type="text" name="title"/></td></tr>
	<tr><td>Author <br><input type="text" name="author"/></td></tr>
	<tr><td>Year <br><input type="year" name="year"/></td></tr>
	<tr><td>Type <br><input type="text" name="type"/></td></tr>
	<tr><td colspan="2"><input type="submit" name="submit" value="Update"></td></tr>
	</table>
	<input type="hidden" name="itemid" value="<?php echo $itemid; ?>">
	</form>
</div>
	<?php include('Footer.henryjones'); ?>