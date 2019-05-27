<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="format-detection" content="telephone=no">
	
<title>デジラジ!!</title>
<meta name="Description" content="デジラジだよ!!　どんどん投稿してね!">
<meta name="author" content="石井奈緒人">
<meta property="og:site_name" content="デジラジ!!">
<meta property="og:title" content="デジラジ!!">
<meta property="og:description" content="デジラジだよ!!　どんどん投稿してね!">
<meta property="og:type" content="website">
	<meta property="og:url" content="サイトのURL貼る">
<meta property="og:image" content="img/facebook.png">
<link rel="apple-touch-icon" href="img/icon_1.png">
<link rel="shortcut icon" href="img/icon_1.png">
<link rel="shortcut icon" href="img/icon_1.png">	
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ropa+Sans">

<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<!--<link rel="stylesheet" href="css/darkforce.css">-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/Untitled-1.js"></script>
<script>
  (function(d) {
    var config = {
      kitId: 'vho4tdu',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
</head>

<body>
<!--
		<div id="d1">
		<div id="d2">
			<div id="d3">
			</div>
		</div>
	</div>
-->

	<div class="centerpo opacity">
		<h1 class="font">
  <span class="break-down">デ</span>
  <span>ジ</span>
  <span>ラ</span>
  <span>ジ</span>
<span class="img_neon"><img src="img/dheo.png" alt="eon"></span>
</h1>
	
	</div>
	<?php

	
$file='board.txt';
if (file_exists($file)) {
	$board=json_decode(file_get_contents($file));
}


$board[]=$_REQUEST['message'];
file_put_contents($file, json_encode($board));

	

	
foreach ($board as $message) {
	
	echo '<p class="text_head">', '以下、名無しにかわりましてDHRがお送りします ', '</p>';
	echo '<p class="text neon ">';
	echo nl2br($message), '</p>';

}



?>
	
	<div class="link_box">
		
		<a href="input.php">
	<p class="font btn-flat-double-border">
		投稿ページ
	</p>
			</a>
		
		<a href="show.php">
	<p class="font btn-flat-double-border">
		ページ更新
	</p>
			</a>
</div>

					 <div id="js-loader" class="loader">
    <div class="loader-animation"></div>
  </div>
	</body>
</html>