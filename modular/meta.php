<?php
require_once template('min/config');
echo <<<EOT
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>{$met_title}</title>
		<meta name="renderer" content="webkit">
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta name="generator" content="LC001"  data-variable="{$_M[config][met_weburl]},{$_M[lang]},{$classnow},{$id},{$class_list[$classnow][module]},{$_M[config][met_skin_user]}" />
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
	<body>
<!--
EOT;
?>