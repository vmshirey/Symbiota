<?php
//error_reporting(E_ALL);
include_once('../../config/symbini.php');
header("Content-Type: text/html; charset=".$charset);
 
?>
<html>
	<head>
		<title>Page</title>
		<link rel="stylesheet" href="../../css/main.css" type="text/css" />
	</head>
	<body>
		<?php
		$displayLeftMenu = true;
		include($serverRoot.'/header.php');
		?>
		<!-- This is inner text! -->
		<div id="innertext">
			<h1>Forbidden</h1>
			<div style="font-weight:bold;">
				You don't have permission to access /seinet/checklists/rpc/ on this server.
			</div>
			<div style="font-weight:bold;margin:10px;">
				<a href="../../index.php">Return to index page</a>
			</div>
		</div>
		<?php
			include($serverRoot.'/config/footer.php');
		?>
	</body>
</html>
