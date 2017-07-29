<?php
	require("/var/www/html/include.php");
	$GLOBALS["dlc_pagename"] = "终端";	
	checkIfLogin();
	set_time_limit(300);
	if (isset($_POST["dlc_exec"]))
	{
		if ($_POST["dlc_exec"] == "exit")
		{
			header("location: index.php");
		}
	}
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php print($GLOBALS["dlc_pagename"]." - ".$GLOBALS["dlc_localname"]); ?></title>
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<?php require("banner.php"); ?>
		<div class="container-fluid"> <!--container-fluid-->
			<div class="row">
				<p class="bg-danger"><small><strong><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>警告</strong> 您正在使用本地用户的身份在<?php print($GLOBALS["dlc_sitename"]); ?>上执行指令，这可能会带来严重危害，除非您知道您想做什么.</small></p>
			</div><!--row-->
			<div class="row">
				<form class="form" method="POST" action="/execpanel.php">
					<div class="col-lg-12">
						<div class="form-group has-warning">
							<label for="executeCommand1" class="sr-only">执行命令</label>
							<div class="input-group">
								<div class="input-group-addon"><?php print($_COOKIE["dlc_username"]."@".$GLOBALS["dlc_mininame"]); ?>:~$</div>
								<input type="text" class="form-control" placeholder="<?php if(isset($_POST["dlc_exec"])){print(htmlentities($_POST["dlc_exec"],ENT_HTML5));}else{print("[DSRA Terminal 1.1] 执行命令");}?>" name="dlc_exec" id="executeCommand1" width="100%" autocomplete="off" autofocus="autofocus">
							</div>
						</div>
					</div><!--col-lg-12-->
				</form>
			</div><!--row-->
			<div class="row">
				<div class="col-lg-12">
					<pre><?php
						if (isset($_POST["dlc_exec"]))
						{
							$res = array();
							exec($_POST["dlc_exec"], $res);
							foreach($res as &$element)
							{
								print(htmlentities($element, ENT_HTML5)."\n");
							}
						}
					?></pre>
				</div><!--col-lg-12-->
			</div><!--row-->
		</div><!--container-fluid-->
		<?php require("bottom.php"); ?>
		<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
