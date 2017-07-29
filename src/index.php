<?php
	require("/var/www/html/include.php");
	$GLOBALS["dlc_pagename"] = "首页";	
	$successLogin = false;
	if (isset($_POST["dlc_username"]) && isset($_POST["dlc_password"]))
	{
		if (checkUsernameAndPassword($_POST["dlc_username"], $_POST["dlc_password"]))
		{
			setcookie("dlc_username", $_POST["dlc_username"], time()+600);
			setcookie("dlc_password", $_POST["dlc_password"], time()+600);
			$successLogin = true;
		}
		else
		{
			header("location: /login.php?verify=failed");
		}
	}
	else
	{
		//checkIfLogin();
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
		<style>
			#jumbotronHead{
				background-image: url("/src/building_zip.jpg");
				background-size: cover;
				background-color: #bbddff;
				color: #ffffff;
				border-radius: 0px;
				/*text-shadow: 1px 1px 1px #ffffff*/;
			}
		</style>
	</head>
	<body>
		<?php require("banner.php"); ?>
		<div class="alert alert-success fade in alert-dismissible<?php if(!$successLogin){print(" hidden");} ?>" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		您已成功登陆<?php print($GLOBALS["dlc_sitename"]); ?>
		</div>
		<div class="container-fluid"> <!--container-fluid-->
			<div class="row">
				<div class="jumbotron" id="jumbotronHead">
					<div class="container-fluid">
						<h1 class="jumbotronText visible-sm-block visible-md-block visible-lg-block">科技赋能，创新笃行</h1>
						<h2 class="jumbotronText visible-xs-block">科技赋能，创新笃行</h2>
						<p class="jumbotronText">欢迎莅临<?php print($GLOBALS["dlc_localname"]); ?>。</p>
						<a class="btn btn-primary hidden" href="#" role="button">了解更多</a><img src="/src/DSRA_white.png" alt="DGideas亚洲研究院" width="100px"><br>
						<small class="visible-sm-inline visible-md-inline visible-lg-inline"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 北京市大兴区黄村清源北路19号（102617）</small><br>
						<small class="visible-sm-inline visible-md-inline visible-lg-inline"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Beijing Institute of Petrochemical Technology</small>
					</div><!--container-->
				</div><!--jumbotron-->
			</div><!--row-->
			<div class="row">
				<div class="col-md-9"><!--左栏-->
					<div class="row">
						<div class="col-lg-10 col-md-12">
							<div class="row">
								<div class="col-sm-3 visible-sm-block visible-md-block visible-lg-block">
									<img src="/src/DSRA_black.png" alt="DGideas亚洲研究院" width="100%">
								</div><!--col-md-3-->
								<div class="col-sm-9">
									<blockquote>
									<p>我们的行业，不拘传统，崇尚创造。</p>
									<p class="visible-sm-block visible-md-block visible-lg-block">Our industry doesn't respect tradition, it only respects innovation.</p>
									<footer>Satya Nadella, the CEO of <a href="//microsoft.com" target="_blank">Microsoft</a>.</footer>
									</blockquote>
								</div><!--col-md-9-->
							</div><!--row-->
							<div class="row">
								<div class="col-md-12 visible-md-block visible-lg-block">
									<div align="center"><small>在以下位置关注我<strong>@DGideas: </strong>
										<a class="text-primary" href="https://github.com/DGideas" target="_blank">GitHub</a> 
										<a class="text-warning" href="https://www.zhihu.com/people/DGideas" target="_blank">知乎</a> 
										<a class="text-success" href="https://zh.wikipedia.org/wiki/user:DGideas" target="_blank">Wikipedia</a> 
										<a class="text-danger" href="https://wikitech.wikimedia.org/wiki/User:DGideas" target="_blank">WikiTech</a> 
										<a class="text-info" href="dgideas@outlook.com" target="_blank">Email</a>
									</small></div>
								</div>
							</div><!--row-->
						</div><!--col-lg-10-->
						<div class="col-lg-2 visible-lg-block">
							<h3>快捷链接<small>Quick Links</small></h3>
							<ul>
								<li><a href="bit/">北京理工大学排行榜</a></li>
								<li><a href="//www.bipt.edu.cn">北京石油化工学院</a></li>
								<ul class="list-inline">
									<li><a href="//www.bipt.edu.cn">教务在线</a></li>
									<li><a href="//www.bipt.edu.cn">教育在线</a></li>
									<li><a href="//www.bipt.edu.cn">尔雅通识</a></li>
									<li><a href="//www.bipt.edu.cn">高校邦</a></li>
								</ul>
								<li><a href="//www.tsinghua.edu.cn">清华大学</a></li>
							</ul>
						</div><!--col-lg-2-->
					</div><!--row-->
					<div class="row">
						<div class="col-md-12">
							<h2>最新消息<small>Latest News</small></h2>
							<hr>
						</div>
						<div class="col-md-12">
						<?php require("/var/www/html/content/news.php"); ?>
						</div>
					</div><!--row-->
				</div><!--col-md-9-->
				<div class="col-md-3"><!--右栏-->
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12">
									<h3>研究者说<small>From Researchers</small></h3>
								</div>
							</div><!--row-->
							<div class="row">
								<div class="col-sm-5 col-md-12 col-lg-5">
									<img src="/src/shenxiangyang.jpg" class="img-thumbnail" width="100%">
								</div><!--col-lg-5-->
								<div class="col-sm-7 col-md-12 col-lg-7">
									<blockquote class="blockquote-reverse">
									<p style="font-size:14px;">50多年前，当人工智能破土萌芽之时，计算机科学家根本不曾想到它会发展成现在大家都习以为常的这个样子。当前我们创造的所有人工智能工具和服务，都必须用于帮助人类，并增强我们的能力。</p>
									<footer>沈向阳 <cite title="Source Title">以人工智能服务人类</cite></footer>
									</blockquote>
								</div><!--col-lg-7-->
							</div><!--row-->
							<div class="row">
								<div class="col-sm-7 col-md-12 col-lg-7">
									<blockquote>
									<p style="font-size:14px;">Over the past few years, many researchers see deep learning as a very promising approach for making artificial intelligence better.</p>
									<footer><a href="https://en.wikipedia.org/wiki/Xuedong_Huang" target="_blank">Xuedong Huang</a> <cite title="Source Title">The creation of CNTK</cite></footer>
									</blockquote>
								</div><!--col-lg-7-->
								<div class="col-sm-5 col-md-12 col-lg-5">
									<img src="/src/huangxuedong.png" class="img-thumbnail" width="100%">
								</div><!--col-lg-5-->
							</div><!--row-->
						</div><!--col-lg-12-->
					</div><!--row-->
					<div class="row visible-md-block visible-lg-block">
						<div class="col-lg-12">
							<h3>资源下载<small>Download</small></h3>
							<ul class="list-group">
								<a class="list-group-item" href="/cpp.pdf" target="_blank"><span class="badge">ISO标准</span>C++ ISO标准草稿（2017年4月）</a>
								<a class="list-group-item" href="/code.exe" target="_blank"><span class="badge">MIT</span>Visual Studio Code(Windows)</a>
								<a class="list-group-item" href="/code.deb" target="_blank"><span class="badge">MIT</span>Visual Studio Code(Ubuntu)</a>
							</ul>
							<small class="text-info visible-lg-block"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>这些资源仅为方便取用而在此“按原样”提供. 您不应该与其他用户分享指向这些资源的链接，因为具体资源可能根据需求而定期整理并发生变化. 您应该在下载使用这些资源之前了解并同意其许可协议.</small>
						</div><!--col-lg-12-->
					</div><!--row-->
					<div class="row visible-md-block visible-lg-block">
						<div class="col-lg-12">
							<h3>收藏夹<small>Favourite</small></h3>
							<ul class="list-group">
								<a class="list-group-item" href="https://cn.bing.com/" target="_blank">必应中国站</a>
								<a class="list-group-item" href="https://github.com/" target="_blank">GitHub</a>
								<a class="list-group-item" href="http://en.cppreference.com/" target="_blank">CppReference(英文)</a>
								<a class="list-group-item" href="http://stackoverflow.com/" target="_blank">StackOverFlow(英文)</a>
								<a class="list-group-item" href="https://microsoft.com/" target="_blank">微软中国</a>
								<a class="list-group-item" href="https://zh.wikipedia.org/" target="_blank">中文维基百科</a>
								<a class="list-group-item" href="https://en.wikipedia.org/" target="_blank">英文维基百科</a>
								<a class="list-group-item" href="http://oray.com/" target="_blank">花生壳</a>
							</ul>
						</div><!--col-lg-12-->
					</div><!--row-->
				</div><!--col-md-3-->
			</div><!--row-->
			<div class="row">
				<div class="col-md-12">
					<h2>关于<small>About</small></h2>
				</div>
			</div><!--row-->
			<div class="row">
				<div class="col-md-3">
					<h3>关于我<small>DGideas</small></h3>
					<p>我是<strong>王万霖</strong>，出生并现居于<a href="https://zh.wikipedia.org/wiki/%E5%8C%97%E4%BA%AC" target="_blank">中国北京</a>，你可以从我的<a href="https://www.zhihu.com/people/DGideas" target="_blank">知乎</a>主页找到我的个人信息。</p>
					<h4>研究方向</h4>
					<ul class="list-inline">
						<li>计算机图形学</li>
						<li>机器学习</li>
						<li>手写字体识别(Hand Writting OCR)</li>
						<li>双向自举神经网络</li>
						<li>C++</li>
					</ul>
					<hr>
				</div><!--col-md-3-->
				<div class="col-md-3 col-md-offset-1">
					<h3>关于DGideas亚洲研究院<small>DGideas Research Asia</small></h3>
					<p>DGideas亚洲研究院是一个私人基础科研机构，其总部目前位于北京市大兴区清源北路北京石油化工学院内。</p>
					<hr>
				</div>
				<div class="col-md-3 col-md-offset-1">
					<h3>关于本站<small>Website</small></h3>
					<p>本站运行于北京节点的<a href="https://www.raspberrypi.org/" target="_blank">树莓派</a>3上，它采用4核心ARMv7处理器BCM2835。性能虽小但架设网站完全够用了。除了公开的网页服务以外，DGideas亚洲研究院北京节点同时也充当以下角色：</p>
					<ul class="list-inline">
						<li>Git服务器</li>
						<li>SFTP服务器</li>
						<li>数据清洗、存储、分析</li>
						<li>研究院内部API接口</li>
						<li>模拟终端</li>
					</ul>
					<?php
						$loadAverage = ((float)(explode(",",exec("uptime"))[4])*25);
						$loadAvgColor = "";
						if ($loadAverage <= 20){$loadAvgColor = "text-primary";}
						elseif ($loadAverage <= 40){$loadAvgColor = "text-success";}
						elseif ($loadAverage <= 60){$loadAvgColor = "text-info";}
						elseif ($loadAverage <= 80){$loadAvgColor = "text-warning";}
						elseif ($loadAverage <= 100){$loadAvgColor = "text-danger";}
						else{$loadAvgColor = "text-danger bg-danger";}
					?>
					<small class="<?php print($loadAvgColor); ?>">服务器最近一段时间的平均负载为<strong><?php print($loadAverage); ?></strong>%</small>
					<hr>
				</div>
			</div><!--row-->
		</div><!--container-fluid-->
		<?php require("bottom.php"); ?>
		<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
