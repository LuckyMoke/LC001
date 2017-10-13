<?php
$tmppath  = "{$_M[url][site]}templates/{$met_skin_user}/";
/*filename 是模板的版本，生成的关系到生成的css和js的缓存名字*/
$filename = md5("20171010");
require_once template('min/compress.class');
//js
$paths[] = "{$tmppath}min/static/jquery/1.12.4/jquery.min.js";
$paths[] = "{$tmppath}min/static/layui/layui.js";
$paths[] = "{$tmppath}min/js/base.js";
$paths[] = "{$tmppath}min/js/own.js";
//css
$paths[] = "{$tmppath}min/static/layui/css/layui.css";
$paths[] = "{$tmppath}min/static/layui/css/layui.mobile.css";
$paths[] = "{$tmppath}min/css/style.css";
//缓存 开启和关闭
$metcompress->cache = false;
//执行合并
$resui = $metcompress->getui($paths, $filename);

$resui['css'] = "{$tmppath}cache/{$filename}.css";
$resui['js']  = "{$tmppath}cache/{$filename}.js";