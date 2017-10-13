<?php
require_once template('min/config');
echo <<<EOT
-->
<!--
 _                      _             ___  ___          _
| |                    | |            |  \/  |         | |            TM
| |      _   _    ___  | | __  _   _  | .  . |   ___   | | __   ___
| |     | | | |  / __| | |/ / | | | | | |\/| |  / _ \  | |/ /  / _ \
| |____ | |_| | | (__  |   <  | |_| | | |  | | | (_) | |   <  |  __/
\_____/  \__,_|  \___| |_|\_\  \__, | \_|  |_/  \___/  |_|\_\  \___|
                                __/ |
      blog.luckymoke.cn        |___/    小小酥博客  版权所有  翻版必究
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>{$met_title}</title>
		<meta name="renderer" content="webkit">
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta name="generator" content="LuckyMoke"  data-variable="{$_M[config][met_weburl]},{$_M[lang]},{$classnow},{$id},{$class_list[$classnow][module]},{$_M[config][met_skin_user]}" />
		<meta name="description" content="{$show['description']}" />
		<meta name="keywords" content="{$show['keywords']}" />
		<link href="{$_M[url][site]}favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link rel="stylesheet" href="{$resui['css']}">
		{$_M['html_plugin']['head_script']}
	</head>
<!--
EOT;
echo <<<EOT
-->
	<body class="bg-f4">
<!--
EOT;
?>