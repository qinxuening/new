<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
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
<title><?php echo (L("Edit_equipment")); ?></title>

<link rel="stylesheet" href="/Public/wap/css/css_wap2.css" >
<link rel="stylesheet" href="/Public/resource/common/js/validform/style.css" >
<link rel="shortcut icon" href="/Public/resource/common/images/favicon.ico" type="image/x-icon" />
</head>

<body>
<!--header-->
<link rel="shortcut icon" href="/Public/resource/common/images/favicon.ico" type="image/x-icon" />
<!--<link rel="stylesheet" href="/Public/wap/css/bootstrap.css" >-->
<!--<link rel="stylesheet" href="/Public/wap/css/css_wap.css" >-->
<!--<script src="/Public/wap/css/js/jquery-1.7.min.js"></script>-->
<!--<div class="jumppage_bg" style="display:none;"></div>-->

<!--end header-->
<div class="jumppage" style="display:none;">
<div class="t_1">提示信息</div>
<div class="tx1">保存成功。</div>
<div class="btn1">确&#12288;&#12288;定</div>
</div>


<style> 
body{ <?php echo (L("font")); ?>}
</style>
<div class="jumppage_lang" style="display:none;">
    <div class="til_">Language</div>
    <div class="btn1"><a href="./?l=zh-cn" style="color:#000">Chinese</a></div>
    <div class="btn2"><a href="./?l=en-us" style="color:#000">English</a></div>
</div>
<div class="jumppage_bg" style="display:none;"></div>

<div class="topper" style="background-color:#fbfbfb">
	<div class="con">
		<!--<div class="back_btn"><a href="javascript:history.go(-1);" title="返回" style="display:inline-block; width:120px; height:57px"></a></div>-->
        <div class="logo" style="background-color:#fbfbfb">
        	<a href="<?php echo (L("langue_link")); ?>" style="display:inline-block; width:120px; height:57px"></a>
        </div>
		<div class="t_1" style="color:#3f3f3f"><?php echo (L("Center")); ?></div>
        <div style="float:left;height: 57px; line-height:57px"><a id="Jq_change_l" href="javascript:;" style="color:#000">Language</a></div>
	</div>
</div>

<div class="con_index">
    <div class="mainpage">
    	<div class="chengyuan_con">
        	
        	<div class="menu">
    <div class="btn0 <?php echo ($my1); ?>"><a href="/index.php/User/"><?php echo (L("Member")); ?></a></div>
    <div class="btn0 <?php echo ($my2); ?>"><a href="/index.php/User/add/"><?php echo (L("Add_member")); ?></a></div>
    <div class="btn0 <?php echo ($my3); ?>"><a href="/index.php/Mobile/"><?php echo (L("Equipment")); ?></a></div>
    <div class="btn0 <?php echo ($my4); ?>"><a href="/index.php/Type/"><?php echo (L("Model")); ?></a></div>
    <div class="btn0 <?php echo ($my5); ?>"><a href="/index.php/Type/add/"><?php echo (L("Add_model")); ?></a></div>
    <div class="btn0 <?php echo ($my6); ?>"><a href="/index.php/Time/"><?php echo (L("Time")); ?></a></div>
    <div class="btn0 <?php echo ($my7); ?>"><a href="/index.php/Time/add/"><?php echo (L("Add_time")); ?></a></div>
    <div class="btn0 <?php echo ($my8); ?>"><a href="/index.php/User/useredit/"><?php echo (L("Information")); ?></a></div>
    <div class="btn0 <?php echo ($my9); ?>"><a href="/index.php/User/pwd/"><?php echo (L("Change_password")); ?></a></div>
	<div class="btn0 <?php echo ($my11); ?>"><a href="/index.php/Mobile/usermobile/"><?php echo (L("UserMobile")); ?></a></div>
    <div class="btn0 <?php echo ($my10); ?>"><a href="/index.php/User/out/"><?php echo (L("Exit")); ?></a></div>
</div>
        	
            <div class="tb1">
                <div class="title1"><?php echo (L("Edit_equipment")); ?></div>
                <form method="post" action="/index.php/Mobile/update/id/<?php echo ($mobile["Pid"]); ?>" enctype="multipart/form-data" class="Machineryfrom">
                <div class="tb2">
                    <div class="t_"><?php echo (L("Equipment_position")); ?>：</div>
                    <div class="s_1 Validform_checktip"></div>
                    <input type="text" class="inp1" datatype="*1-30" nullmsg="<?php echo (L("Equipment_position_n")); ?>" sucmsg="<?php echo (L("Crepass")); ?>" name="McName" value="<?php echo ($mobile["McName"]); ?>" tabindex="1" maxlength="30">
                </div>
				<!--默认空调温度-->
				<?php if(!empty($McID2)): ?><div class="line1"></div>
					<div class="tb2_Irin">
	           			 <div class="t_">默认温度：</div>
						 <div class="KeyVar">
							 <input type="hidden" name="McIDIrin" id="McIDIrin" value="<?php echo ($McID2); ?>">
							  <select name="KeyVar">
							  	 <?php if(is_array($IrinfoList)): $i = 0; $__LIST__ = $IrinfoList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?><option value="<?php echo ($va["KeyVar"]); ?>" <?php if(($KeyVar) == $va["KeyVar"]): ?>selected<?php endif; ?>><?php echo ($va["KeyName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> 
							  </select>
						  </div>
					</div><?php endif; ?>
				 <!--默认空调温度-->
            	<div class="line1"></div>
            
                <div class="tb2">
                    <div class="t_"><?php echo (L("Sms_notification")); ?></div>
                    
                    <div class="fr Jq_tx2" id="Jq_tx">
						<!--<b class="hx_btn <?php if($mobile['IsMsg'] == 1): ?>hx_btn_a<?php endif; ?>"></b>-->
                        
                        <div id="JQ_n" class="dx_btn <?php if($mobile['IsMsg'] == 0): ?>dx_btn_a<?php endif; ?>"><?php echo (L("No")); ?></div>
						<div id="JQ_y" class="dx_btn <?php if($mobile['IsMsg'] == 1): ?>dx_btn_a<?php endif; ?>"><?php echo (L("Yes")); ?></div>
                        
                    	<input type="checkbox" name="IsMsgs" id="IsMsgs" class="none"  value="<?php echo ($mobile['IsMsg']); ?>" />
                        <input type="hidden" name="IsMsg" id="IsMsg" value="<?php echo ($mobile['IsMsg']); ?>" >
                    </div>
                    
                </div>
            
            	<div class="line1"></div>
            
            	<div class="tb2">
                	<div class="t_"><?php echo (L("Linkage_opening")); ?>：</div>
                    <div class="s_1" style="color:#6eb805"><?php echo (L("Main_opening")); ?></div>
					<!--开关联动开-->
				    <?php if(($McID1) == "14"): ?><div class="box1">
					 <div id="tabon" class="tab">
					 	        <ul>
							        <li class="on active"><?php echo (L("key1")); ?></li>
							        <li class="off" ><?php echo (L("key2")); ?></li>
							        <li class="off"><?php echo (L("key3")); ?></li>
						        </ul>
						
						<div class="box sho" id="keyon1">
						  
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="JqOn01_r JqOn01_m<?php echo ($k1); ?>" id="radioOn01<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkOn01)): foreach($mLinkOn01 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        
                        <span class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="LinkOn01[]" id="inputOn01<?php echo ($k2); ?>" <?php if(is_array($mLinkOn01)): foreach($mLinkOn01 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </span>
					  </div>
					  
					<div class="box hid" id="keyon2">
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="JqOn02_r JqOn02_m<?php echo ($k1); ?>" id="radioOn02<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkOn02)): foreach($mLinkOn02 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="LinkOn02[]" id="inputOn02<?php echo ($k2); ?>" <?php if(is_array($mLinkOn02)): foreach($mLinkOn02 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </span>
					  </div>
					  
					 <div class="box hid" id="keyon3">
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="JqOn03_r JqOn03_m<?php echo ($k1); ?>" id="radioOn03<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkOn03)): foreach($mLinkOn03 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="LinkOn03[]" id="inputOn03<?php echo ($k2); ?>" <?php if(is_array($mLinkOn03)): foreach($mLinkOn03 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </span>
					  </div>
					  </div>
                    </div>
					<!--开关联动开-->
					<?php else: ?>
					<!--非开关联动开-->
						<div class="box1">
						   <div>
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="Jq_r Jq_m<?php echo ($k1); ?>" id="radio<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkOn)): foreach($mLinkOn as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        
                        <div class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="LinkOn[]" id="input<?php echo ($k2); ?>" <?php if(is_array($mLinkOn)): foreach($mLinkOn as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div><?php endif; ?>
					<!--非开关联动开-->
            	</div>
           
            	<div class="line1"></div>
            	
                <div class="tb2">
                    <div class="t_"><?php echo (L("Linkage")); ?>：</div>
                    <div class="s_1" style="color:#6eb805"><?php echo (L("Master_Guan")); ?></div>
					<!--开关联动关-->
				    <?php if(($McID1) == "14"): ?><div class="box1">
					 <div id="taboff" class="tab">
					 	        <ul>
							        <li class="on active"><?php echo (L("key1")); ?></li>
							        <li class="off" ><?php echo (L("key2")); ?></li>
							        <li class="off"><?php echo (L("key3")); ?></li>
						        </ul>
						
						<div class="box sho" id="keyon1">
						  
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="JqOff01_r JqOff01_m<?php echo ($k1); ?>" id="radioOff01<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkOff01)): foreach($mLinkOff01 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        
                        <span class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="LinkOff01[]" id="inputOff01<?php echo ($k2); ?>" <?php if(is_array($mLinkOff01)): foreach($mLinkOff01 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </span>
					  </div>
					  
					<div class="box hid" id="keyon2">
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="JqOff02_r JqOff02_m<?php echo ($k1); ?>" id="radioOff02<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkOff02)): foreach($mLinkOff02 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="LinkOff02[]" id="inputOff02<?php echo ($k2); ?>" <?php if(is_array($mLinkOff02)): foreach($mLinkOff02 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </span>
					  </div>
					  
					 <div class="box hid" id="keyon3">
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="JqOff03_r JqOff03_m<?php echo ($k1); ?>" id="radioOff03<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkOff03)): foreach($mLinkOff03 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="LinkOff03[]" id="inputOff03<?php echo ($k2); ?>" <?php if(is_array($mLinkOff03)): foreach($mLinkOff03 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </span>
					  </div>
					  </div>
                    </div>					
					<!--开关联动关-->
					<?php else: ?>
					<!--非开关联动关-->
                    <div class="box1">
                        <div>
                            <?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="Jq_r1 Jq_m1_<?php echo ($k1); ?>" id="radio1_<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkOff)): foreach($mLinkOff as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="LinkOff[]" id="input1_<?php echo ($k2); ?>" <?php if(is_array($mLinkOff)): foreach($mLinkOff as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                     </div><?php endif; ?>
				<!--非开关联动关-->
                </div>
            
            	<div class="line1"></div>
            
                <div class="tb2">
                    <div class="t_"><?php echo (L("Anti_linkage")); ?>：</div>
                    <div class="s_1" style="color:#6eb805"><?php echo (L("Main_opening2")); ?></div>
					<!--开关反联动开-->
				    <?php if(($McID1) == "14"): ?><div class="box1">
					 <div id="tabon_off" class="tab">
					 	        <ul>
							        <li class="on active"><?php echo (L("key1")); ?></li>
							        <li class="off" ><?php echo (L("key2")); ?></li>
							        <li class="off"><?php echo (L("key3")); ?></li>
						        </ul>
						
						<div class="box sho" id="keyon1">
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="JqOn_Off01_r JqOn_Off01_m<?php echo ($k1); ?>" id="radioOn_Off01<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkon_off01)): foreach($mLinkon_off01 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                            <span class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="Linkon_off01[]" id="inputOn_Off01<?php echo ($k2); ?>" <?php if(is_array($mLinkon_off01)): foreach($mLinkon_off01 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </span>
					  </div>
					  
					<div class="box hid" id="keyon2">
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="JqOn_Off02_r JqOn_Off02_m<?php echo ($k1); ?>" id="radioOn_Off02<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkon_off02)): foreach($mLinkon_off02 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="Linkon_off02[]" id="inputOn_Off02<?php echo ($k2); ?>" <?php if(is_array($mLinkon_off02)): foreach($mLinkon_off02 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </span>
					  </div>
					  
					 <div class="box hid" id="keyon3">
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="JqOn_Off03_r JqOn_Off03_m<?php echo ($k1); ?>" id="radioOn_Off03<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkon_off03)): foreach($mLinkon_off03 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="Linkon_off03[]" id="inputOn_Off03<?php echo ($k2); ?>" <?php if(is_array($mLinkon_off03)): foreach($mLinkon_off03 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </span>
					  </div>
					  </div>
                    </div>					
					<!--开关反联动开-->     
					<?php else: ?> 
                    <div class="box1">
                    	<div>
                            <?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="Jq_r2 Jq_m2_<?php echo ($k1); ?>" id="radio2_<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkOn_Off)): foreach($mLinkOn_Off as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="LinkOn_Off[]" id="input2_<?php echo ($k2); ?>" <?php if(is_array($mLinkOn_Off)): foreach($mLinkOn_Off as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div><?php endif; ?>
                </div>
            
            	<div class="line1"></div>
            
                <div class="tb2">
                    <div class="t_"><?php echo (L("Anti_linkage2")); ?>：</div>
                    <div class="s_1" style="color:#6eb805"><?php echo (L("Main_opening3")); ?></div>
 					<!--开关反联动关-->
				    <?php if(($McID1) == "14"): ?><div class="box1">
					 <div id="taboff_on" class="tab">
					 	        <ul>
							        <li class="on active"><?php echo (L("key1")); ?></li>
							        <li class="off" ><?php echo (L("key2")); ?></li>
							        <li class="off"><?php echo (L("key3")); ?></li>
						        </ul>
						
						<div class="box sho" id="keyon1">
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="JqOff_On01_r JqOff_On01_m<?php echo ($k1); ?>" id="radioOff_On01<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkoff_on01)): foreach($mLinkoff_on01 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                            <span class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="Linkoff_on01[]" id="inputOff_On01<?php echo ($k2); ?>" <?php if(is_array($mLinkoff_on01)): foreach($mLinkoff_on01 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </span>
					  </div>
					  
					<div class="box hid" id="keyon2">
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="JqOff_On02_r JqOff_On02_m<?php echo ($k1); ?>" id="radioOff_On02<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkoff_on02)): foreach($mLinkoff_on02 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="Linkoff_on02[]" id="inputOff_On02<?php echo ($k2); ?>" <?php if(is_array($mLinkoff_on02)): foreach($mLinkoff_on02 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </span>
					  </div>
					  
					 <div class="box hid" id="keyon3">
                        	<?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="JqOff_On03_r JqOff_On03_m<?php echo ($k1); ?>" id="radioOff_On03<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkoff_on03)): foreach($mLinkoff_on03 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="Linkoff_on03[]" id="inputOff_On03<?php echo ($k2); ?>" <?php if(is_array($mLinkoff_on03)): foreach($mLinkoff_on03 as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </span>
					  </div>
					  </div>
                    </div>					
					<!--开关反联动关-->     
					<?php else: ?>   
					  <div class="box1">               
                        <div>
                            <?php if(is_array($myMobile)): $k1 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?><label class="Jq_r3 Jq_m3_<?php echo ($k1); ?>" id="radio3_<?php echo ($k1); ?>">
                                    <b class="btn4
                                    <?php if(is_array($mLinkOff_On)): foreach($mLinkOff_On as $key=>$vt): if(($vt) == $vo["Pid"]): ?>btn4_a<?php endif; endforeach; endif; ?> 
                                	 "><?php echo ($vo["McName"]); ?></b>
                                </label><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="none">
                        	<?php if(is_array($myMobile)): $k2 = 0; $__LIST__ = $myMobile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;?><input type="checkbox" name="LinkOff_On[]" id="input3_<?php echo ($k2); ?>" <?php if(is_array($mLinkOff_On)): foreach($mLinkOff_On as $key=>$vt): if(($vt) == $vo["Pid"]): ?>checked<?php endif; endforeach; endif; ?> 
                                value="<?php echo ($vo["Pid"]); ?>" class="px">
                            	&nbsp;<?php echo ($vo["McName"]); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div><?php endif; ?>
                </div>
            
            	
                <input type="submit" class="btn3"  value="<?php echo (L("Save")); ?>">
                
            	<input type="hidden" name="wMB" value="<?php echo ($User["wMB"]); ?>">
          		</form>
            </div>
        </div>
    </div>
</div>

<!--end main--> 
<!--footer-->
<div class="footer">
    <div class="con">
        <div class="t_1" style="width:auto; font-size:17px">
            <?php echo (L("Company")); ?><br>
            <?php echo (L("Adress")); ?><br>
            <div style="pointer-events: none;"> <?php echo (L("Tell")); ?><br></div>
            <?php echo (L("Copy")); ?>
        </div>
        <!--<div class="gq">
            <a href="./?l=zh-cn"><div class="gq_img0"></div></a>
            <a href="./?l=en-us"><div class="gq_img1"></div></a>
        </div>-->
    </div>
    <!--<script type="text/javascript" src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>-->
	<script type="text/javascript" src="/Public/wap/js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript">
    	function submitForm(){
			$('.JQ_sub').submit();
		}
    </script>
    <script  type="text/javascript">
		$('#Jq_change_l').click(function(){
			$('.jumppage_lang, .jumppage_bg').show();
			$('.jumppage_bg').click(function(){
				$('.jumppage_lang, .jumppage_bg').hide();	
			});	
		});
</script>
</div>
<script language="javascript">
$(document).ready(function(){
	$("#IsAllOpens").click(function(){ 
		 $("#IsAllCloses").attr('checked',false);
		 $(this).attr('checked',true);
	});
	$("#IsAllCloses").click(function(){ 
		 $("#IsAllOpens").attr('checked',false);
		 $(this).attr('checked',true);
	});
});
function aa(){
	
	//设置是否发送短信
    /*var r=document.getElementById("IsMsgs");
	if(r.checked){
	
		document.getElementById("IsMsg").value=1;
	
	}else{
		document.getElementById("IsMsg").value=0;
	
	}*/
	var m= document.getElementById("IsAllOpens");
         if(m.checked){
        // r.value=1;
		document.getElementById("IsAllOpen").value=1;
		document.getElementById("IsAllClose").value=0;
		 //alert(m.value);
       }else{
	  document.getElementById("IsAllOpen").value=0;
	  document.getElementById("IsAllClose").value=1;
	  // alert(r.value);
	   }
	var k= document.getElementById("IsAllCloses");
         if(k.checked){
        // r.value=1;
		document.getElementById("IsAllClose").value=1;
		document.getElementById("IsAllOpen").value=0;
		 //alert(r.value);
       }else{
	  document.getElementById("IsAllClose").value=0;
	  document.getElementById("IsAllOpen").value=1;
	  // alert(r.value);
	   }
}
</script>
<script src="/Public/resource/common/js/Validform.js"></script>
<script type="text/javascript">
window.onload = function(){
	var myTab = document.getElementById("tabon");
	var myUl = myTab.getElementsByTagName("ul")[0];
	var myLi = myUl.getElementsByTagName("li");
	var myDiv = myTab.getElementsByTagName("div");
	for (var i = 0; i < myLi.length; i++) {
		myLi[i].index = i;
		myLi[i].onclick = function(){
			for (var j = 0; j < myLi.length; j++) {
				myLi[j].className = "off";
				myDiv[j].className = "box hid";
			}
			this.className = "on";
			myDiv[this.index].className = "box sho";
		}
	}
	var color = new Array();
	color[0] = "keyon1";
	color[1] = "keyon2";
	color[2] = "keyon3";
	$("#tabon").find('ul').children('li').each(function(e){
		  $(this).click(function(){
				 $(this).addClass(color[e]);
		 	  });
	})	
 	var myTaboff = document.getElementById("taboff"); 
    var myUloff = myTaboff.getElementsByTagName("ul")[0];
    var myLioff = myUloff.getElementsByTagName("li"); 
    var myDivoff = myTaboff.getElementsByTagName("div");
    for(var i = 0; i<myLioff.length;i++){
        myLioff[i].index = i;
        myLioff[i].onclick = function(){
            for(var j = 0; j < myLioff.length; j++){
                myLioff[j].className="off";
                myDivoff[j].className = "box hid";
            }
            this.className = "on";
            myDivoff[this.index].className = "box sho";
        }
    }

 	$("#taboff").find('ul').children('li').each(function(e){
		  $(this).click(function(){
				 $(this).addClass(color[e]);
		 	  });
	})

    var myTabon_off = document.getElementById("tabon_off"); 
    var myUlon_off = myTabon_off.getElementsByTagName("ul")[0];
    var myLion_off = myUlon_off.getElementsByTagName("li"); 
    var myDivon_off = myTabon_off.getElementsByTagName("div");
    for(var i = 0; i<myLion_off.length;i++){
        myLion_off[i].index = i;
        myLion_off[i].onclick = function(){
            for(var j = 0; j < myLion_off.length; j++){
                myLion_off[j].className="off";
                myDivon_off[j].className = "box hid";
            }
            this.className = "on";
            myDivon_off[this.index].className = "box sho";
        }
    }	
 	$("#tabon_off").find('ul').children('li').each(function(e){
		  $(this).click(function(){
				 $(this).addClass(color[e]);
		 	  });
	})	
	
 	var myTaboff_on = document.getElementById("taboff_on"); 
    var myUloff_on = myTaboff_on.getElementsByTagName("ul")[0];
    var myLioff_on = myUloff_on.getElementsByTagName("li"); 
    var myDivoff_on = myTaboff_on.getElementsByTagName("div");
    for(var i = 0; i<myLioff_on.length;i++){
        myLioff_on[i].index = i;
        myLioff_on[i].onclick = function(){
            for(var j = 0; j < myLioff_on.length; j++){
                myLioff_on[j].className="off";
                myDivoff_on[j].className = "box hid";
            }
            this.className = "on";
            myDivoff_on[this.index].className = "box sho";
        }
    }
    $("#taboff_on").find('ul').children('li').each(function(e){
		  $(this).click(function(){
				 $(this).addClass(color[e]);
		 	  });
	})
}
$(function(){
	var demo=$(".Machineryfrom").Validform({
		tiptype:3,
		showAllError:false,
		datatype:{
			"zh1-6":/^[\u4E00-\u9FA5\uf900-\ufa2d]{1,6}$/,
			"ip":/^(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$/
		},
		ajaxPost:false
	});
})

$(document).ready(function(){
	/*开关联动开*/
	var obOn01 = $('.JqOn01_r');
	for(var i = 1; i < obOn01.length+1; i++){
		if($('.JqOn01_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.JqOn01_m'+i,'#inputOn01'+i,'#radioOn01'+i);
		}else{
			f_bl('.JqOn01_m'+i,'#inputOn01'+i,'#radioOn01'+i);	
		};
	}
	
	var obOn02 = $('.JqOn02_r');
	for(var i = 1; i < obOn02.length+1; i++){
		if($('.JqOn02_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.JqOn02_m'+i,'#inputOn02'+i,'#radioOn02'+i);
		}else{
			f_bl('.JqOn02_m'+i,'#inputOn02'+i,'#radioOn02'+i);	
		};
	}	
	
    var obOn03 = $('.JqOn03_r');
	for(var i = 1; i < obOn03.length+1; i++){
		if($('.JqOn03_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.JqOn03_m'+i,'#inputOn03'+i,'#radioOn03'+i);
		}else{
			f_bl('.JqOn03_m'+i,'#inputOn03'+i,'#radioOn03'+i);	
		};
	}	
	/*开关联动开*/
		
	/*开关联动关*/
	var obOff01 = $('.JqOff01_r');
	for(var i = 1; i < obOff01.length+1; i++){
		if($('.JqOff01_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.JqOff01_m'+i,'#inputOff01'+i,'#radioOff01'+i);
		}else{
			f_bl('.JqOff01_m'+i,'#inputOff01'+i,'#radioOff01'+i);	
		};
	}
	
	var obOff02 = $('.JqOff02_r');
	for(var i = 1; i < obOff02.length+1; i++){
		if($('.JqOff02_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.JqOff02_m'+i,'#inputOff02'+i,'#radioOff02'+i);
		}else{
			f_bl('.JqOff02_m'+i,'#inputOff02'+i,'#radioOff02'+i);	
		};
	}	
	
    var obOff03 = $('.JqOff03_r');
	for(var i = 1; i < obOff03.length+1; i++){
		if($('.JqOff03_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.JqOff03_m'+i,'#inputOff03'+i,'#radioOff03'+i);
		}else{
			f_bl('.JqOff03_m'+i,'#inputOff03'+i,'#radioOff03'+i);	
		};
	}	
	/*开关联动关*/
	
	/*开关反联动关*/
	var obOn_Off01 = $('.JqOn_Off01_r');
	for(var i = 1; i < obOn_Off01.length+1; i++){
		if($('.JqOn_Off01_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.JqOn_Off01_m'+i,'#inputOn_Off01'+i,'#radioOn_Off01'+i);
		}else{
			f_bl('.JqOn_Off01_m'+i,'#inputOn_Off01'+i,'#radioOn_Off01'+i);	
		};
	}
	
	var obOn_Off02 = $('.JqOn_Off02_r');
	for(var i = 1; i < obOn_Off02.length+1; i++){
		if($('.JqOn_Off02_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.JqOn_Off02_m'+i,'#inputOn_Off02'+i,'#radioOn_Off02'+i);
		}else{
			f_bl('.JqOn_Off02_m'+i,'#inputOn_Off02'+i,'#radioOn_Off02'+i);	
		};
	}	
	
    var obOn_Off03 = $('.JqOn_Off03_r');
	for(var i = 1; i < obOn_Off03.length+1; i++){
		if($('.JqOn_Off03_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.JqOn_Off03_m'+i,'#inputOn_Off03'+i,'#radioOn_Off03'+i);
		}else{
			f_bl('.JqOn_Off03_m'+i,'#inputOn_Off03'+i,'#radioOn_Off03'+i);	
		};
	}	
	/*开关反联动关*/		
	
	/*开关反联动关*/
	var obOff_On01 = $('.JqOff_On01_r');
	for(var i = 1; i < obOff_On01.length+1; i++){
		if($('.JqOff_On01_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.JqOff_On01_m'+i,'#inputOff_On01'+i,'#radioOff_On01'+i);
		}else{
			f_bl('.JqOff_On01_m'+i,'#inputOff_On01'+i,'#radioOff_On01'+i);	
		};
	}
	
	var obOff_On02 = $('.JqOff_On02_r');
	for(var i = 1; i < obOff_On02.length+1; i++){
		if($('.JqOff_On02_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.JqOff_On02_m'+i,'#inputOff_On02'+i,'#radioOff_On02'+i);
		}else{
			f_bl('.JqOff_On02_m'+i,'#inputOff_On02'+i,'#radioOff_On02'+i);	
		};
	}	
	
    var obOff_On03 = $('.JqOff_On03_r');
	for(var i = 1; i < obOff_On03.length+1; i++){
		if($('.JqOff_On03_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.JqOff_On03_m'+i,'#inputOff_On03'+i,'#radioOff_On03'+i);
		}else{
			f_bl('.JqOff_On03_m'+i,'#inputOff_On03'+i,'#radioOff_On03'+i);	
		};
	}	
	/*开关反联动关*/	
	
	
	var ob1 = $('.Jq_r');
	for(var i = 1; i < ob1.length+1; i++){
		if($('.Jq_m'+i).find('b').hasClass('btn4_a')){
			r_bl('.Jq_m'+i,'#input'+i,'#radio'+i);
		}else{
			f_bl('.Jq_m'+i,'#input'+i,'#radio'+i);	
		};
	}
	
	var ob2 = $('.Jq_r1');
	for(var i = 1; i < ob2.length+1; i++){
		if($('.Jq_m1_'+i).find('b').hasClass('btn4_a')){
			r_bl('.Jq_m1_'+i,'#input1_'+i,'#radio1_'+i);
		}else{
			f_bl('.Jq_m1_'+i,'#input1_'+i,'#radio1_'+i);	
		};
	}
	
	var ob3 = $('.Jq_r2');
	for(var i = 1; i < ob3.length+1; i++){
		if($('.Jq_m2_'+i).find('b').hasClass('btn4_a')){
			r_bl('.Jq_m2_'+i,'#input2_'+i,'#radio2_'+i);
		}else{
			f_bl('.Jq_m2_'+i,'#input2_'+i,'#radio2_'+i);	
		};
	}
	
	var ob4 = $('.Jq_r3');
	for(var i = 1; i < ob4.length+1; i++){
		if($('.Jq_m3_'+i).find('b').hasClass('btn4_a')){
			r_bl('.Jq_m3_'+i,'#input3_'+i,'#radio3_'+i);
		}else{
			f_bl('.Jq_m3_'+i,'#input3_'+i,'#radio3_'+i);	
		};
	}
		
});

//正向
function f_bl(obj1,obj2,obj3){
	$(obj1).on("click",function(){
			
			$(obj1).find('b').addClass('btn4_a');
			$(obj2).prop("checked",true);
			$(obj1).off("click");
			
			$(obj3).on("click",function(){
				$(obj3).find('b').removeClass('btn4_a');
				$(obj2).prop("checked",false);
				$(obj3).off("click");
				f_bl(obj1,obj2,obj3);
			});	
	});
}

function r_bl(obj1,obj2,obj3){
	$(obj1).on("click",function(){
			
			$(obj3).find('b').removeClass('btn4_a');
			$(obj2).prop("checked",false);
			$(obj1).off("click");
			
			$(obj3).on("click",function(){
				$(obj1).find('b').addClass('btn4_a');
				$(obj2).prop("checked",true);
				$(obj3).off("click");
				r_bl(obj1,obj2,obj3);
			});	
	});
}

$('#JQ_y').on("click",function(){
	$('#JQ_y').addClass('dx_btn_a');
	$('#JQ_n').removeClass('dx_btn_a');
	$('#IsMsg').attr("value",1);
});

$('#JQ_n').on("click",function(){
	$('#JQ_n').addClass('dx_btn_a');
	$('#JQ_y').removeClass('dx_btn_a');
	$('#IsMsg').attr("value",0);
});

/*function Jq_tx(){
	if($('#Jq_tx').find('b').hasClass('hx_btn_a')){
		 
		 $('#Jq_tx').on("click",function(){
		
			$('#Jq_tx').find('b').removeClass('hx_btn_a');
			$('#IsMsg').attr("value",0);
			$('#Jq_tx').off("click");
			
			$('.Jq_tx2').on("click",function(){
				$('.Jq_tx2').find('b').addClass('hx_btn_a');
				$('#IsMsg').attr("value",1);
				$('.Jq_tx2').off("click");
				Jq_tx();
			});	
		});	
		
		
	}else{
		
		$('#Jq_tx').on("click",function(){
		
			$('#Jq_tx').find('b').addClass('hx_btn_a');
			$('#IsMsg').attr("value",1);
			$('#Jq_tx').off("click");
			
			$('.Jq_tx2').on("click",function(){
				$('.Jq_tx2').find('b').removeClass('hx_btn_a');
				$('#IsMsg').attr("value",0);
				$('.Jq_tx2').off("click");
				Jq_tx();
			});	
		});	
	}
	
	
	
}*/
</script>
<!--end footer--> 
</body>
</html>