<?php
$showdata[name] = $showdata[name]?$showdata[name]:$showdata[title];
echo <<<EOT
-->
<div class="layui-col-xs12" style="margin:0 0 50px 0;"></div>
<div class="layui-col-xs12 border-box bg-f layui-anim layui-anim-scale">
	<div class="body-box">
		<div class="center">
			<h1>{$showdata[name]}</h1>
		</div>
		<div class="line"></div>
		<div class="_content">
			{$showdata[content]}
        	<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="layui-col-xs12" style="margin:0 0 50px 0;"></div>
<!--
EOT;
?>