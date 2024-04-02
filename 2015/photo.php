<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>2014 Workshop on Electronic Design Automation</title>

<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<style type="text/css">
	a img {
		border: none;
		vertical-align: middle;
	}

	#abgne-110223 {
		height: 630px;	/* 圖片的高 + 30 */
		width: 904px;	/* 圖片的寬 + 邊框寬度 * 2 */
		overflow: hidden;
		left:50px; 
	}

	#abgne-110223 .wrap-110223 {
		height: 598px;	/* 圖片的高 */
		width: 900px;	/* 圖片的寬 */
		overflow: hidden;
		position: relative;
		left:50px; 
		margin-bottom: 5px;
		border: 2px solid #ccc;
	}

	.wrap-110223 ul, .wrap-110223 li {
		list-style: none;
		margin: 0;
		padding: 0;
	}

	.wrap-110223 ul {
		position: absolute;
	}

	.wrap-110223 ul li {
		float: left;
	}

	#abgne-110223 .arrows {
		float: right;
	}

	#abgne-110223 .arrows a {
		float: left;
		width: 22px;
		height: 22px;
		background: url(arrows.png) no-repeat left top;
	}

	#abgne-110223 a.next {
		
		margin-left: -1px;
		background-position: right top;
	}

	#abgne-110223 .caption {
		float: left;
		width: 356px;		/* 區塊的寬 - .arrows 的寬(44) */
		overflow: hidden;	/* 避免文字太長 */
		color: #666;
		font-size: 13px;
		margin-left:70px; 
		line-height: 22px;	/* .arrows a 的高 */
	}
	
</style>
<script type="text/javascript">
	$(function(){
		// 先取得 #abgne-110223 及 ul, li 及 .caption 元素
		// 並預設先顯示第幾個, 還有動畫速度
		var $block = $('#abgne-110223'), 
			$wrap = $block.find('.wrap-110223'), 
			$ul = $wrap.find('ul'), 
			$li = $ul.find('li'), 
			$caption = $block.find('.caption'), 
			_default = 0, 
			_width = 900, 
			animateSpeed = 400, 
			timer, speed = 200000, isHover = false;

		// 先把 ul 的寬度設成 li 數量 x $wrap 的寬
		// 並在滑鼠移上時停止計時器; 移出後再啟動計時器
		$ul.width(_width * $li.length).hover(function(){
			isHover = true;
			clearTimeout(timer);
		}, function(){
			isHover = false;
			timer = setTimeout(move, speed);
		});
		// 如果 .arrows 中的 a 被點擊時
		$block.find('.arrows').delegate('a', 'click', function(event){
			// 如果滑鼠現在是移入狀態就不做動作
			if(isHover) return;
			clearTimeout(timer);

			// 先找出 .selected 的元素後移掉該樣式
			var $selected = $li.filter('.selected').removeClass('selected'), 
				// 找出目前顯示的元素是第幾個
				_index = $li.index($selected);
			
			// 依點擊的是上一張或下一張來切換
			_index = (event.target.className == 'prev' ? _index - 1 + $li.length : _index + 1) % $li.length;
			$ul.animate({
				left: _index * _width * -1
			}, animateSpeed, function(){
				if(!isHover){
					timer = setTimeout(move, speed);
				}
			});
			// 改變標題
			$caption.hide().html($li.eq(_index).addClass('selected').find('img').attr('alt')).fadeIn(animateSpeed);

			return false;
		});
		
		// 先顯示預設的
		$ul.css('left', _default * _width * -1);
		$caption.html($li.eq(_default).addClass('selected').find('img').attr('alt'));
		
		$block.find('a').focus(function(){
			this.blur();
		});
		
		// 控制移動用
		function move() {
			$('.next').click();
		}
		
		// 啟動計時器
		timer = setTimeout(move, speed);
	});
</script>

<body style="overflow-y: scroll; overflow-x: hidden;">
<div id="menu">
	<ul>
		<li><a href="index.php">首頁</a></li>
		<li><a href="summary.php">活動摘要</a></li>
		<li><a href="agenda.php">大會議程</a></li>
		<li><a href="attend.php">報名作業</a></li>
		<li><a href="history.php">歷史沿革</a></li>
		<li><a href="donate.php">捐款訊息</a></li>
		<li><a href="contact.php">聯絡我們</a></li>
		<li><a href="file_download">檔案下載</a></li>
		<li class="active"><a href="photo.php">活動照片</a></li>
	</ul>
</div>

<div id="header">
	<h2><a href="#">2014 電子設計自動化研討會 <br/>Workshop on Electronic Design Automation</a></h2>
</div>

<div id="page">

		<div id="abgne-110223" >
			<table border="0" width="100%" >
				<div class="wrap-110223" >
					<ul >
					<li><a href="#"><img src="wwwphoto/01.JPG" alt="開幕式 " /></a></li>
					<li><a href="#"><img src="wwwphoto/02.JPG" alt="開幕式" /></a></li>
					<li><a href="#"><img src="wwwphoto/03.JPG" alt="開幕式" /></a></li>
					<li><a href="#"><img src="wwwphoto/04.JPG" alt="開幕式" /></a></li>
					<li><a href="#"><img src="wwwphoto/05.JPG" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/IMG_2984.JPG" alt="" /></a></li>
					<li><a href="#"><img src="wwwphoto/IMG_2987.JPG" alt="" /></a></li>
					<li><a href="#"><img src="wwwphoto/IMG_2988.JPG" alt="" /></a></li>
					<li><a href="#"><img src="wwwphoto/IMG_2989.JPG" alt="" /></a></li>
					<!--<li><a href="#"><img src="wwwphoto/06.JPG" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/07.JPG" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/08.JPG" alt=" " /></a></li>-->
					<!--<li><a href="#"><img src="wwwphoto/09.JPG" alt=" " /></a></li>-->
					<li><a href="#"><img src="wwwphoto/10.JPG" alt=" " /></a></li>
					<!--<li><a href="#"><img src="wwwphoto/11.JPG" alt=" " /></a></li>-->					
					<li><a href="#"><img src="wwwphoto/12.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/13.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/14.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/SAM_9515.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/15.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/16.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/17.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/18.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/19.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/20.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/21.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/22.jpg" alt=" " /></a></li>	
					<li><a href="#"><img src="wwwphoto/23.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/24.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/25.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/26.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/27.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/28.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/29.jpg" alt=" " /></a></li>					
					<li><a href="#"><img src="wwwphoto/30.jpg" alt=" " /></a></li>
					<!--<li><a href="#"><img src="wwwphoto/SAM_9498.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/SAM_9501.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/SAM_9502.jpg" alt=" " /></a></li> -->
					<li><a href="#"><img src="wwwphoto/31.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/32.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/33.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/34.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/35.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/36.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/37.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/38.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/39.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/40.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/41.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/CEDA_SIGDA_photo2.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/42.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/43.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/44.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/45.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/46.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/IMG_2995.JPG" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/47.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/48.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/49.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/50.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/51.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/52.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/53.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/54.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/55.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/56.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/57.jpg" alt=" " /></a></li>
					<!--<li><a href="#"><img src="wwwphoto/cad.jpg" alt=" " /></a></li>-->
					<li><a href="#"><img src="wwwphoto/58.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/59.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/60.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/61.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/62.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/63.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/64.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/65.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/66.jpg" alt=" " /></a></li>
					<li><a href="#"><img src="wwwphoto/67.jpg" alt=" " /></a></li>
					
								
					<li><a href="#"><img src="" alt=" " /></a></li>
					</ul>
				</div>
				<div class="caption"></div>
				<div class="arrows">
					<a href="#" class="prev"></a>
					<a href="#" class="next"></a>
				</div>
			</table>
		</div>

	<!--<<div id="sidebar">
		<div id="updates" class="bluebox">
			<h2><b>贊助及歷年資訊</b></h2>
			<ul>
				<li>
					<h3>經費贊助：</h3>
					<p>
					<a>※ 教育部資訊及科技教育 &nbsp&nbsp&nbsp 司智慧電子總聯盟</a><br>
					<a>※ 中原大學電子系</a><br>
					<a>※ 中原大學車用電子與可 &nbsp&nbsp&nbsp 靠度研究中心</a><br>
					<a>※ 台灣積體電路設計學會</a>
					<a>※ 新思科技</a><br>
					<a>※ 明導國際</a><br>
					<a>※ 益華電腦</a><br>
					<a>※ IEEE CEDA</a>
					</p>
					
				</li>

				<li>
					<h3>歷年會議：</h3>
					<p>
					<a>※ </a><a href="http://vlsi.cse.yzu.edu.tw/edaw2013/" target="_new">2013年</a><br/>
					<a>※ </a><a href="http://edaw.yzuda.org/2012/" target="_new">2012年</a><br/>
					<a>※ </a><a href="http://edaw.yzuda.org/2011/" target="_new">2011年</a><br/>
					</p>
				</li>
				
			</ul>
		</div>
	</div> -->
	
	<div style="clear: both;"> <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color="green">欲下載活動照片請按此<a href="EDA_Workshop_photo.rar">下載</a></font></div>
</div>

<div id="footer">
	<p id="legal">指導單位：	教育部資訊及科技教育司 <br>主辦單位：	教育部智慧電子整合性人才培育計畫 - 智慧電子前瞻技術發展辦公室 / 台灣積體電路設計學會<br>	
													承辦單位：		中原大學 電子工程學系/中原大學車用電子與可靠度研究中心<br>
													協辦單位：	IEEE CEDA/ ACM SIGDA/ IEEE Taipei Section　</p>

	<p id="legal">Copyright &copy; 2014, Department of Electronic Engineering, Chung Yuan Christian University. Designed by <a href="http://vlsi.el.cycu.edu.tw/" target="_new">VLSI/CAD Laboratory</a>.</p>
</div>

</body>
</html>
