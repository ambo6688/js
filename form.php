<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-flat-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-flat-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-flat-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>開始估價</h2></div>
	<div class="element-select<?php frmd_add_class("select1"); ?>"><label class="title">角鋼材質</label><div class="large"><span><select name="select1" >

		<option value="象牙白">象牙白</option>
		<option value="黑砂紋">黑砂紋</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title">寬度</label><div class="large"><span><select name="select" >

		<option value="30">30</option>
		<option value="45">45</option>
		<option value="60">60</option>
		<option value="75">75</option>
		<option value="90">90</option>
		<option value="105">105</option>
		<option value="120">120</option>
		<option value="135">135</option>
		<option value="150">150</option>
		<option value="165">165</option>
		<option value="180">180</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select3"); ?>"><label class="title">深度</label><div class="large"><span><select name="select3" >

		<option value="30">30</option>
		<option value="45">45</option>
		<option value="60">60</option>
		<option value="75">75</option>
		<option value="90">90</option>
		<option value="105">105</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select5"); ?>"><label class="title">高度</label><div class="large"><span><select name="select5" >

		<option value="60">60</option>
		<option value="75">75</option>
		<option value="90">90</option>
		<option value="105">105</option>
		<option value="120">120</option>
		<option value="135">135</option>
		<option value="150">150</option>
		<option value="165">165</option>
		<option value="180">180</option>
		<option value="195">195</option>
		<option value="210">210</option>
		<option value="225">225</option>
		<option value="240">240</option>
		<option value="255">255</option>
		<option value="270">270</option>
		<option value="285">285</option>
		<option value="300">300</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select4"); ?>"><label class="title">層板</label><div class="large"><span><select name="select4" >

		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select2"); ?>"><label class="title">層板貼皮</label><div class="large"><span><select name="select2" >

		<option value="不需貼皮/原木色">不需貼皮/原木色</option>
		<option value="白色貼皮">白色貼皮</option>
		<option value="橡木色貼皮">橡木色貼皮</option>
		<option value="秋香木貼皮">秋香木貼皮</option></select><i></i></span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">配件</h3></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox1"); ?>"><label class="title"></label>		<div class="column column1"><label><input type="checkbox" name="checkbox1[]" value="配件加購"/ ><span>配件加購</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-select<?php frmd_add_class("select8"); ?>"><label class="title">1. 輪組/可調高腳墊</label><div class="large"><span><select name="select8" >

		<option value="無">無</option>
		<option value="3英吋單軸輪">3英吋單軸輪</option>
		<option value="可調高鋼製腳墊">可調高鋼製腳墊</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select11"); ?>"><label class="title">2. 橫桿加購-背擋x </label><div class="large"><span><select name="select11" >

		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select10"); ?>"><label class="title">3. 橫桿加購-側擋</label><div class="large"><span><select name="select10" >

		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select9"); ?>"><label class="title">4. 吊衣桿組</label><div class="large"><span><select name="select9" >

		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select6"); ?>"><label class="title">以上規格數量(台)</label><div class="large"><span><select name="select6" >

		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option></select><i></i></span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">總價</h3></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title">總金額</label><input class="large" type="text" name="input" /></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title">規格確認文字</label><textarea class="medium" name="textarea" cols="20" rows="5" ></textarea></div>
<div class="submit"><input type="submit" value="加入選購"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-flat-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>