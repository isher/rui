<?php
$pass='ruiyarisheng888';//你设置的bai正确密码
$show = isset($_COOKIE['show'])>$_COOKIE['pw']='';
if ($show != md5($pass)){
	$form_pass = $_POST['pw'];
if($form_pass==$pass){//密码正确，保存COOKIE
setcookie('show',md5($form_pass));
}else{//密码错du误或者没有zhi密码，显示登录dao内容
echo '<form method=post action="'.$_SERVER['REQUEST_URI'].'">密码:<input name="pw" type="password" /><input type=submit value="登录"></form>';
exit;
}
}

?>


<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1"> 

<title>北京装修报价提交表</title>
<meta name="Keywords" content="北京老房装修,安徽工长,安徽人装修,专业防水施工,漏雨维修,墙体施工,铲墙皮,附近装修公司,,北京瑞雅日盛装饰工程有限公司公司,旧房翻新,单位维修,旧房改造,北京瑞雅日盛装饰工程有限公司公司,北京家庭装修,北京家庭装修公司,北京家装,北京办公室装修,◎ 新房装修旧房装修" />
<meta name="Description" content="老房装修,旧房翻新,单位维修|旧房改造,瑞雅日盛装修公司是北京专业的家庭室内装修公司,也是北京专业家装公司。主营：北京瑞雅日盛装饰工程有限公司公司,北京家庭装修公司,北京家装等北京家庭装修." />



<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="../Websites/ruiyarisheng/Templates/youhome/Static/css/style.css"   />

<link rel="stylesheet" type="text/css" href="../Websites/ruiyarisheng/Templates/youhome/Static/css/page.css"   />









</head>
<body>
	<!-- 头部 -->
	<div class="Column-100 topHeader">
<div class="Column clearfix">
    <div class="banner">
        
        欢迎访问北京瑞雅日盛装饰工程有限公司</div>    
</div>
</div>

<div class="Column Header">
	<div class="searchBox fr clearfix">
		<div class="topTel clearfix"><img src="../Websites/ruiyarisheng/Uploads/Picture/10-08/57f8d5483c703.png"  alt="装修公司电话"><a href="tel:18601256278">微信手机同号:18601256278</a></div>         
		        
	</div>
	<a href="../index.html"   class="Logo fl"><img src="../Websites/ruiyarisheng/Uploads/Picture/10-08/57f8d3261f45e.png"   alt="北京瑞雅日盛装饰工程有限公司" /></a>
</div>

    <div class="Column-100 Nav">
		<ul class="Column" id="Nav">
		
	    		<li >
	                 <a href="../index.html"   title="瑞雅日盛装饰">网站首页</a>
	            </li>
				<li >
	                 <a href="../lists/2.html"   title="促销活动">促销活动</a>
	            </li><li >
	                 <a href="../lists/8.html"   title="热装楼盘">热装楼盘</a>
	            </li><li >
	                 <a href="../lists/11.html"   title="装修案例">装修案例</a>
	            </li><li>
	                 <a href="../lists/24.html"   title="装修展厅">装修展厅</a>
	            </li><li >
	                 <a href="../page/28.html"   title="装修工艺">装修工艺</a>
	            </li><li >
	                 <a href="../page/35.html"   title="装修服务">装修服务</a>
	            </li><li >
	                 <a href="../page/43.html"   title="关于我们">关于我们</a>
	            </li>	    </ul>
	</div>
	
	
	<!-- /头部 -->
	<!-- 主体 -->
        <div class="Column-100 moduleTop"><div class="Column clearfix">
    <div class="moduleTt news">
	<span style="font-size:40px;color:#fff;line-height:40px;">咨询登记查询</span>
	
	</div>
    </div>
    </div>
		<div class="Column-100 CateList">
		<div class="Column clearfix">
	
	
	
		<ul>
			 
<li><span>您已登录 记得退出哦    </span></li>
<li class="current"><a href="logout.php"  ><span>退出登录</span></a></li>
		</ul>
		</div>
		
		
		 
  <div class="Column clearfix">
       
        
<div class="Column-L">

	      <div class="post">
        <h1 class="title">
        </h1>
        <div class="content">
        <form action="doAdd.php" method="post">
            <table width="99%" border="0" cellpadding="4">
<title></title>

    <center>

        <h3></h3>
        <table border="0" width="100%">
            <?php

// 获取留言信息，解析后输出到表格中
// 1,从留言liuyan.txt信息文件中获取留言信息
$info = file_get_contents("dengji.dat");
// 2,取出留言内容最后的三个@@@符号
$info = rtrim($info, "@");//什么意思

if (strlen($info)>=8){

// 3,以@@@符合拆分留言信息为一条一条的（将留言信息以@@@的符号拆分成留言数组）
$lylist = explode("@@@", $info);
// 4,遍历留言信息数组，对每条留言做再次解析
foreach ($lylist as $key => $value) {
    $ly = explode("##", $value); // 将每条留言信息以##拆分成每个留言字段
    echo "<tr>";
    echo "<td><b style='color:#ff0000'>分类：{$ly[0]}</b></td><td>操作：<a href='dengjidel.php?id={$key}' style='color:#ff0000'>删除</a></td></tr>";
    echo "<tr><td>姓名：{$ly[1]}</td>";
    echo "<td colspan=2>电话：{$ly[2]}</td></tr>"; // 字符串截取函数
    echo "<td colspan=2 style='color:#ff0000'>地址：{$ly[3]}</td>";
echo "<tr><td>户型：{$ly[4]}</td>";  
    echo "<td>风格：{$ly[5]}</td></tr>";
        echo "<tr><td colspan=2>预算：{$ly[6]}元</td></tr>";
    echo "<tr><td colspan=2>留言内容：{$ly[7]}</td></tr>";
    //echo "<tr><td colspan=2>I P 地址：{$ly[8]}</td></tr>";
    echo "<tr><td colspan=2>留言时间：" . gmdate("Y-m-d H:i:s", $ly[9] + 8 * 3600) . "</td>"; // 双引号之中是不能使用函数的
    echo "</tr><tr><td colspan=2><hr></td>";
    // 如何进行链接传值
    echo "</tr>";
    // echo $value."<br>";
}
}
?>
        </table>
    </center>
    <div class="clear"></div>
            </table>
        </form>

        </div>
        
	</div>
		



	<!-- /主体 -->

	<!-- 底部 -->
	</div>
	</div>
    <!-- 底部  -->
<div class="box-2-youj">
	<div class="dikuanglan-2">
    	            	<ul class="dikuanglan-2_yi">
						<h1><a href="../lists/11.html"   title="装修案例">装修案例</a></h1>
						    <li><a href="../lists/11.html"   title="家装住宅">家装住宅</a></li><li><a href="../lists/12.html"   title="别墅设计">别墅设计</a></li><li><a href="../lists/14.html"   title="办公室装修">办公室装修</a></li><li><a href="../lists/15.html"   title="商业空间">商业空间</a></li><li><a href="../lists/13.html"   title="软装设计">软装设计</a></li><li><a href="../lists/16.html"   title="视频样板房">视频样板房</a></li><li><a href="https://service.qsis.cn:88/ruiyarisheng/dengjishow.php"   title="预约查询">预约查询</a></li>                        </ul>
            
            	<ul class="dikuanglan-2_yi">
                                     <h1><a href="../page/28.html"   title="装修工艺">装修工艺</a></h1>
						    <li><a href="../page/28.html"   title="施工流程">施工流程</a></li><li><a href="../lists/29.html"   title="材料保障">材料保障</a></li><li><a href="../lists/30.html"   title="工艺图解">工艺图解</a></li><li><a href="../page/31.html"   title="环境保障">环境保障</a></li><li><a href="../page/32.html"   title="工艺体系">工艺体系</a></li><li><a href="../lists/33.html"   title="明星工长">明星工长</a></li>                </ul>
            	<ul class="dikuanglan-2_yi">
                           <h1><a href="../lists/2.html"   title="促销活动">促销活动</a></h1>
						    <li><a href="../lists/2.html"   title="热点专题">热点专题</a></li><li><a href="../lists/3.html"   title="装修资讯">装修资讯</a></li><li><a href="../lists/4.html"   title="媒体报道">媒体报道</a></li><li><a href="../lists/5.html"   title="家装日记">家装日记</a></li><li><a href="../lists/6.html"   title="装修攻略">装修攻略</a></li>                </ul>
            	<ul class="dikuanglan-2_yi">
                       <h1><a href="../page/43.html"   title="关于我们">关于我们</a></h1>
						    <li><a href="../page/43.html"   title="公司简介">公司简介</a></li><li><a href="../page/45.html"   title="公司文化">公司文化</a></li><li><a href="../page/46.html"   title="公司历程">公司历程</a></li><li><a href="../page/47.html"   title="品质服务">品质服务</a></li><li><a href="../lists/48.html"   title="人才招聘">人才招聘</a></li><li><a href="../lists/49.html"   title="联系我们">联系我们</a></li>                </ul>

        <div class="dikuanglan-2_yi-3">
        <div class="youjiashangbi"><img src="../Websites/ruiyarisheng/Uploads/Picture/10-08/57f8d4c3d0ee0.png"   width="240" height="66" /></div> 
         <div class="dianhuahaoma"><a href="tel:18601256278">18601256278</a></div>
         <div class="wenzixinxi">Copyright ©2013  北京瑞雅日盛装饰工程有限公司  版权所有<br><br>
<a href='https://service.qsis.cn:88/ruiyarisheng/dengjishow.php' target='_blank'><img src="../Websites/ruiyarisheng/Templates/youhome/Static/images/Picture/cert.png"   border='0' /></a>  <a href=/logout.php> <img src="../Websites/ruiyarisheng/Templates/youhome/Static/images/logout.jpg" border='0' width=50px height=50px/></a>

 	</div>   
        </div>
    </div>
</div>
 
<div class="Column-100 youqinglianjie">
  <div class="Column clearfix"> 友情链接：&nbsp; <a href="http://www.qsis.cn"  target="_blank">qsis.cn</a>

</div>
 
<div class="zhigezhengs"> 京ICP备19017508号-1&nbsp;<a href="../index.htm"    class="f99" target="_blank">瑞雅日盛</a> <a href="http://isher.qsis.cn"  target="_blank">isher.qsis.cn</a></div>

 

 
 





</div>






	<!-- /底部 -->
</body>
</html>