<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>盛联资本</title>
		<script>
			var _hmt = _hmt || [];
			(function() {
				var hm = document.createElement("script");
				hm.src = "https://hm.baidu.com/hm.js?777ea4f241b56bbaaaa62cdb7471e45c";
				var s = document.getElementsByTagName("script")[0];
				s.parentNode.insertBefore(hm, s)
			})();
		</script>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" type="text/css" href="css/ft-carousel.css" />
		<style>
			.example {
				width: 1440px;
				height: 450px;
				font-size: 40px;
				text-align: center;
				margin: 0px auto
			}
			
			.carousel-item {
				line-height: 336px;
				color: #fff;
				font-family: Arial Black
			}
		</style>
	</head>

	<body class="page">
		<div class="top">
			<div class="logo"><img src="img/logo.png" onclick="window.location.href='index.php'"></div>
			<div class="guide">
				<a href="index.php" style="border-bottom:2px solid #64C4FF;">首页</a>
				<a href="pages/gszc.html">公司注册</a>
				<a href="pages/gssz.html">公司收转</a>
				<a href="pages/smba.html">私募备案</a>
				<a href="pages/smbk.html">私募保壳</a>
				<a href="pages/zzyz.html">增资验资</a>
				<a href="pages/rzzl.html">融资租赁</a>
				<a href="pages/sybl.html">商业保理</a>
				<a href="pages/gywm.html">关于我们</a>
			</div>
			<div class="tel"><img src="img/tel.png"></div>
		</div>
		
		<div class="space"></div>
		
		<div class="example">
			<div class="ft-carousel" id="carousel_1">
				<?php
$file = fopen("img/2.txt", "r");
$users=array();
$i=0;
while(! feof($file))
{
 $users[$i]= fgets($file);
 $i++;
}
fclose($file);
$users=array_filter($users);
?>
				<div class="sidebar">
					<a class="btn"><?php echo $users[0] ?></a>
					<a class="btn"><?php echo $users[1] ?></a>
					<a class="btn"><?php echo $users[2] ?></a>
					<a class="btn"><?php echo $users[3] ?></a>
					<a class="btn"><?php echo $users[4] ?></a>
					<a class="btn"><?php echo $users[5] ?></a>
				</div>
				<ul class="carousel-inner">
					<li class="carousel-item" onclick="window.location.href='pages/jrpzsz.html'"><img src="img/金融牌照收转.png" style="z-index: -1;" /></li>
					<li class="carousel-item" onclick="window.location.href='pages/hegszc.html'"><img src="img/霍尔果斯注册.png" style="z-index: -1;" /></li>
					<li class="carousel-item" onclick="window.location.href='pages/hwjrpz.html'"><img src="img/海外金融牌照.png" style="z-index: -1;" /></li>
					<li class="carousel-item" onclick="window.location.href='pages/jtgszj.html'"><img src="img/集团公司组建.png" style="z-index: -1;" /></li>
					<li class="carousel-item" onclick="window.location.href='pages/czbsz.html'"><img src="img/车指标收转.png" style="z-index: -1;" /></li>
					<li class="carousel-item" onclick="window.location.href='pages/icp.html'"><img src="img/icp许可证办理.png" style="z-index: -1;" /></li>
				</ul>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/ft-carousel.min.js"></script>
		<script type="text/javascript">
			$("#carousel_1").FtCarousel();
			$("#carousel_2").FtCarousel({
				index: 1,
				auto: false
			});
			$("#carousel_3").FtCarousel({
				index: 0,
				auto: true,
				time: 3000,
				indicators: false,
				buttons: true
			});
		</script>
		<div style="width: 500px;height: 60px;background-color: #0000000"></div>
		<div class="rmxm">
			<div>
				<font class="title">热门项目</font>
			</div>
			<div class="rmxmcontent">
				<ul>
					<li onclick="window.location.href='pages/gszc.html'">
						<div><img src="img/index1.png" width="100" height="100" style="margin-top: -40px;" /><br/>
							<a>公司注册</a>
						</div>
					</li>
					<li style="margin-left: 10px;" onclick="window.location.href='pages/smba.html'">
						<div><img src="img/index2.png" width="100" height="100" style="margin-top: -40px;" /><br/>
							<a>私募备案</a>
						</div>
					</li>
					<li style="margin-left: 10px;" onclick="window.location.href='pages/smbk.html'">
						<div><img src="img/index3.png" width="100" height="100" style="margin-top: -40px;" /><br/>
							<a>私募保壳</a>
						</div>
					</li><br/>
					<li onclick="window.location.href='pages/icp.html'">
						<div><img src="img/index4.png" width="100" height="100" style="margin-top: -40px;" /><br/>
							<a>ICP许可证</a>
						</div>
					</li>
					<li style="margin-left: 10px;" onclick="window.location.href='pages/zzyz.html'">
						<div><img src="img/index5.png" width="100" height="100" style="margin-top: -40px;" /><br/>
							<a>增资验资</a>
						</div>
					</li>
					<li style="margin-left: 10px;" onclick="window.location.href='pages/rzzl.html'">
						<div><img src="img/index6.png" width="100" height="100" style="margin-top: -40px;" /><br/>
							<a>融资租赁</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="qyfw">
			<div>
				<font class="title">企业服务</font>
			</div>
			<div class="qyfwcontent">
				<ul>
					<li onclick="window.location.href='pages/gssz.html'">
						<div><img src="img/index7.png" width="300" height="200" style="margin-top: -60px;" /><br/>
							<a>公司收转</a>
						</div>
					</li>
					<li style="margin-left: 10px;" onclick="window.location.href='pages/rzzl.html'">
						<div><img src="img/index8.png" width="300" height="200" style="margin-top: -60px;" /><br/>
							<a>商业保理</a>
						</div>
					</li>
					<li style="margin-left: 10px;" onclick="window.location.href='pages/jrpzsz.html'">
						<div><img src="img/index9.png" width="300" height="200" style="margin-top: -60px;" /><br/>
							<a>金融牌照收转</a>
						</div>
					</li>
					<li onclick="window.location.href='pages/hegszc.html'">
						<div><img src="img/index10.png" width="300" height="200" style="margin-top: -60px;" /><br/>
							<a>霍尔果斯注册</a>
						</div>
					</li>
					<li style="margin-left: 10px;" onclick="window.location.href='pages/hwjrpz.html'">
						<div><img src="img/index11.png" width="300" height="200" style="margin-top: -60px;" /><br/>
							<a>海外业务</a>
						</div>
					</li>
					<li style="margin-left: 10px;">
						<div onclick="window.location.href='pages/jtgszj.html'"><img src="img/index12.png" width="300" height="200" style="margin-top: -60px;" /><br/>
							<a>集团公司组建</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="jytd">
			<div>
				<font class="title">精英团队</font>
			</div>
			<div class="index3">
				<?php
$file = fopen("img/1.txt", "r");
$user=array();
$i=0;
while(! feof($file))
{
 $user[$i]= fgets($file);
 $i++;
}
fclose($file);
$user=array_filter($user);
?>
				<ul>
					<li>
						<div><img src="img/精英团队1.png" style="height:160px;width:160px;border-radius: 160px;margin-top: -150px;" /><br/>
							<a style="font-family: pingfang_medium;font-size: 24px;color: #1845AD;"><?php echo $user[0] ?></a><br/><br/><br/>
							<a style="font-family: pingfang_medium;font-size: 14px;color: #666666;margin-left: 0px;">工作时间</a>
							<a style="font-family: pingfang_medium;font-size: 14px;color: #666666;margin-left: 50px;">好评率</a><br/>
							<a style="font-family: pingfang_medium;font-size: 18px;color: #666666;margin-left: 10px;"><?php echo $user[1] ?></a>
							<a style="font-family: pingfang_medium;font-size: 18px;color: #666666;margin-left: 70px;"><?php echo $user[2] ?></a>
							<div class="ljzx"><img src="img/ljzx1.png" style="height:39px;width:121px;margin-top: 0px;" onclick="location='http://p.qiao.baidu.com/cps/chat?siteId=11687290&userId=25107958'" /></div>
						</div>
					</li>
					<li style="margin-left: 10px;">
						<div><img src="img/精英团队2.png" style="height:160px;width:160px;border-radius: 160px;margin-top: -150px;" /><br/>
							<a style="font-family: pingfang_medium;font-size: 24px;color: #1845AD;"><?php echo $user[3] ?></a><br/><br/><br/>
							<a style="font-family: pingfang_medium;font-size: 14px;color: #666666;margin-left: 0px;">工作时间</a>
							<a style="font-family: pingfang_medium;font-size: 14px;color: #666666;margin-left: 50px;">好评率</a><br/>
							<a style="font-family: pingfang_medium;font-size: 18px;color: #666666;margin-left: 10px;"><?php echo $user[4] ?></a>
							<a style="font-family: pingfang_medium;font-size: 18px;color: #666666;margin-left: 70px;"><?php echo $user[5] ?></a>
							<div class="ljzx"><img src="img/ljzx1.png" style="height:39px;width:121px;margin-top: 0px;" onclick="location='http://p.qiao.baidu.com/cps/chat?siteId=11687290&userId=25107958'" /></div>
						</div>
					</li>
					<li style="margin-left: 10px;">
						<div><img src="img/精英团队3.png" style="height:160px;width:160px;border-radius: 160px;margin-top: -150px;" /><br/>
							<a style="font-family: pingfang_medium;font-size: 24px;color: #1845AD;"><?php echo $user[6] ?></a><br/><br/><br/>
							<a style="font-family: pingfang_medium;font-size: 14px;color: #666666;margin-left: 0px;">工作时间</a>
							<a style="font-family: pingfang_medium;font-size: 14px;color: #666666;margin-left: 50px;">好评率</a><br/>
							<a style="font-family: pingfang_medium;font-size: 18px;color: #666666;margin-left: 10px;"><?php echo $user[7] ?></a>
							<a style="font-family: pingfang_medium;font-size: 18px;color: #666666;margin-left: 70px;"><?php echo $user[8] ?></a>
							<div class="ljzx"><img src="img/ljzx1.png" style="height:39px;width:121px;margin-top: 0px;" onclick="location='http://p.qiao.baidu.com/cps/chat?siteId=11687290&userId=25107958'" /></div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="advertise"><img src="img/advertise.png"></div>
		<div class="bottom">
			<div class="about">
				<font class="yqlj">友情链接</font>
				<font class="gfwx">官方微信</font>
				<font class="gywm">联系我们</font>
			</div>
			<div class="text">
				<font class="link">
					<a href="http://www.gsxt.gov.cn/index.html" target="_blank">国家企业信用网</a>
					<a href="http://www.pbc.gov.cn" target="_blank">中国人民银行</a>
					<a href="http://www.chinatax.gov.cn" target="_blank">国家税务总局</a>
					<a href="http://www.hd315.gov.cn" target="_blank">北京市工商局</a>
					<div/>
					<a href="http://www.circ.gov.cn" target="_blank">中国保监会</a>
					<a href="http://www.cbrc.gov.cn/index.html" target="_blank">中国银监会</a>
					<a href="http://www.court.gov.cn" target="_blank">最高人民法院</a>
					<a href="http://www.miit.gov.cn" target="_blank">工信部</a>
					<a href="http://www.csrc.gov.cn" target="_blank">中国证监会</a>
					<div/>
					<a href="http://www.amac.org.cn" target="_blank">中国证券投资基金业协会</a>
					<a href="http://wenshu.court.gov.cn" target="_blank">中国裁判文书网</a>
					<a href="http://www.sipo.gov.cn" target="_blank">国家知识产权局</a>
				</font>
			</div>
			<div class="qrc"><img src="img/qrc.png"></div>
			<div class="text2">
				<font class="aboutus">
					<a>电话：400-666-7172</a><br/>
					<a>邮箱：business@slbac.com</a><br/>
					<a>地址：北京市朝阳区建国门外大街甲12号1401</a>
				</font>
			</div>
			<div class="icptext">
				<font class="icpnumber">
				<a>京ICP备17009360号</a>
			</div>
		</div>
	</body>

</html>