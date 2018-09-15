<!DOCTYPE html>
<html>
<head>
	<title>MediCare</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<div class="nav">
			<table class="table" width="100%">
				<tr>
					<td colspan="2" valign="middle" height="70">
						<a href="index.php" target="iFrame">
						<img height="48" src="image/2.jpg">
						</a>
					</td> 
					
					
					<td align="right">
                        Logged in as <a href="dprofile.php" target="iFrame"><?php  session_start(); echo $_SESSION['name']?></a>&nbsp;|
                        <a href="php/logout.php">Logout</a>
                    </td>

				</tr>
			</table>
			
		</div>

		<div id="main">
			<table>
				<tr>
					<td>