<!--<?php
require_once template('modular/meta');
echo <<<EOT
-->
<header>
	<div class="layui-fluid">
		<div class="layui-row">
			<ul class="layui-nav">
				<li class="layui-nav-item">
					<a href="{$index_url}" title="{$lang_home}">{$lang_home}</a>
				</li>
<!--
EOT;
foreach($nav_list as $key => $val){
$active = $val[id] == $class1?'layui-this':'';
$val[url] = $nav_list2[$val[id]]?'javascript:;':$val[url];
echo <<<EOT
-->
				<li class="layui-nav-item {$active}">
					<a href="{$val[url]}" title="{$val[name]}">{$val[name]}</a>
<!--
EOT;
if ($nav_list2[$val[id]]) {
echo <<<EOT
-->
					<dl class="layui-nav-child">
<!--
EOT;
foreach($nav_list2[$val[id]] as $key => $val2){
$active = $val2[id] == $classnow?'layui-this':'';
echo <<<EOT
-->
						<dd class="{$active}">
							<a href="{$val2[url]}" title="{$val2[name]}">{$val2[name]}</a>
						</dd>
<!--
EOT;
}
echo <<<EOT
-->
					</dl>
<!--
EOT;
}
echo <<<EOT
-->
				</li>
<!--
EOT;
}
echo <<<EOT
-->
			</ul>
	  	</div>
	</div>  
</header>
<div class="layui-container">
	<div class="layui-row">
<!--
EOT;
?>