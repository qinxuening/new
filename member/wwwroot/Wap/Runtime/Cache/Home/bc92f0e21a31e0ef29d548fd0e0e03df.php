<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title><?php echo (L("S_t_jl")); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no"/>
<script>
var _width = parseInt(window.screen.width);
var scale = _width/640;
var ua = navigator.userAgent.toLowerCase();
var result = /android (\d+\.\d+)/.exec(ua);
if (result){
var version = parseFloat(result[1]);
if(version>2.3){
document.write('<meta name="viewport" content="width=640, minimum-scale = '+scale+', maximum-scale = '+scale+', target-densitydpi=device-dpi">');
}else{
document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
}
} else {
document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
}
</script>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px;TEXT-ALIGN: center; }
.system-message{ margin-left:auto; margin-right:auto; width:100%; margin-top:100px;}
.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px ; color:#F00;}
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
</style>
</head>
<body>
<div class="system-message">
<?php if(isset($message)): ?><h1><img src="http://member.ob-home.com/Public/wap/images/success.jpg" /></h1>
<p class="success"><?php echo($message); ?></p>
<?php else: ?>
<h1><img src="http://member.ob-home.com/Public/wap/images/cwxx_tu1.jpg" /></h1>
<p class="error"><?php echo($error); ?></p><?php endif; ?>
<p class="detail"></p>
<p class="jump">
<?php echo (L("S_t_a")); ?> <a id="href" href="<?php echo($jumpUrl); ?>"><?php echo (L("S_t_j")); ?></a> <?php echo (L("S_t_w")); ?>： <b id="wait"><?php echo($waitSecond); ?></b>
</p>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>