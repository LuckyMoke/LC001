<?php
echo <<<EOT
-->
<div class="layui-col-xs12" style="margin:0 0 50px 0;"></div>
<div class="layui-col-xs12 border-box mg-b-20 bg-f layui-anim layui-anim-scale">
<!--
EOT;
foreach($showlist as $key => $val){
echo <<<EOT
-->
	<div class="body-box news-list">
		<p><a href="{$val[url]}">{$val[title]}</a></p>
	</div>
	<div class="line"></div>
<!--
EOT;
}
echo <<<EOT
-->
</div>
<div class="layui-col-xs12" style="margin:0 0 50px 0;"></div>
<!--
EOT;
?>