<?php
	require("/var/www/html/include.php");
	$GLOBALS["dlc_pagename"] = "用户登录";
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php print($GLOBALS["dlc_pagename"]." - ".$GLOBALS["dlc_sitename"]); ?></title>
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<?php require("banner.php"); ?>
		<div class="container">
			<?php
				if (isset($_GET["verify"]))
				{
					$alertMsgType = "danger";
					$alertMsgContent = '<strong>提示</strong> 用户名或密码错误.';
				}
				elseif (!isset($_COOKIE["dlc_username"]) || !isset($_COOKIE["dlc_password"]))
				{
					$alertMsgType = "warning";
					$alertMsgContent = '<strong>提示</strong> 您必须登录以继续.';
				}
				else
				{
					$alertMsgType = null;
				}
			?>
			<div class="alert alert-<?php print($alertMsgType); ?> alert-dismissible fade in<?php if($alertMsgType==null){print(" hidden");} ?>" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php
					print($alertMsgContent);
				?>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">用户登录</h3>
				</div>
				<div class="panel-body">
					<form method="POST" action="index.php" autocomplete="off">
						<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php
							if (checkIfLoginCore())
							{
								print("您正在以 ".$_COOKIE["dlc_username"]." 的身份登录".$GLOBALS["dlc_sitename"]);
							}
							else
							{
								print("输入您的凭据，以登录".$GLOBALS["dlc_sitename"]);
							}
						?>。</div>
						<div class="form-group">
							<label for="InputUsernameLabel">用户名</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="username" name="dlc_username">
						</div>
						<div class="form-group">
							<label for="InputPasswordLabel">密码</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="dlc_password">
							<?php if($GLOBALS["dlc_ssl_enabled"] == false){print('<small class="text-warning"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><strong>提示</strong> 目前服务器未启用SSL，您的凭据将会以明文传输. 这可能会由于监听或中间人攻击造成<a href="https://support.mozilla.org/1/firefox/54.0/Linux/zh-CN/insecure-password" target="_blank">安全隐患</a>.</small>');} ?>
						</div>
						<button type="submit" class="btn btn-primary">登录</button>
						<a class="btn btn-default" href="#" role="button" id="useCard" data-toggle="tooltip" data-placement="right" title="Tooltip on right">使用智能卡</a>
					</form>
				</div>
			</div>
		</div>
		<?php require("bottom.php"); ?>
		<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
