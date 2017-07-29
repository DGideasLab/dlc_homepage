<style>body { padding-top: 50px; }</style><!--全局内补-->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<img class="navbar-brand" src="/src/DSR_white.png"><a class="navbar-brand" href="/index.php">亚洲研究院</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#"><?php print($GLOBALS["dlc_pagename"]); ?> <span class="sr-only">(当前页面)</span></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<form class="navbar-form navbar-left visible-md-block visible-lg-block" action="https://cn.bing.com/search" method="GET">
							<div class="form-group">
							<input type="text" class="form-control" placeholder="必应搜索" name="q" autocomplete="off">
							</div>
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
						</form>
						<?php
							if (checkIfLoginCore() || $successLogin)
							{
								print('<li class="dropdown">');
								print('<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DGideas <span class="caret"></span></a>');
								print('<ul class="dropdown-menu">');
								print('<li><a href="/execpanel.php">终端</a></li>');
								print('<li role="separator" class="divider"></li>');
								print('<li><a href="#">个人中心</a></li>');
								print('<li><a href="#">设置</a></li>');
								print('<li role="separator" class="divider"></li>');
								print('<li><a href="#">退出</a></li>');
								print('</ul>');
								print('</li>');
							}
							else
							{
								print('<li><a href="login.php">登录</a></li>');
							}
						?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
