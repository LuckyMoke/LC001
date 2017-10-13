/*
 * M['weburl'] 		//网站网址
 * M['lang']  		//网站语言
 * M['tem']  		//模板目录路径
 * M['classnow']  	//当前栏目ID
 * M['id']  		//当前页面ID
 * M['module']  	//当前页面所属模块
 */
/*后边写每次pjax之后都要执行的js操作*/
var mob_width = window.innerWidth || document.documentElement.clientWidth;
/*处理腾讯视频电脑手机自适应*/
if ($('embed').length > 0) {
	var flash = $('embed');
    var flash_url = flash.attr('src');
    if (mob_width < 1200) {
        function getQueryString(r, name) {
	        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	        r = r.substr(1).match(reg);
	        if (r != null) return unescape(r[2]); return null;
	    }
	    var vid = getQueryString(flash_url, 'vid');
	    var iframe_w = $('.editor ._content').width();
	    var iframe_h = (iframe_w/16)*9.1;
	    var iframe_url = 'https://v.qq.com/iframe/player.html?vid='+vid+'&tiny=0&auto=0';
	    var iframe_html = '<iframe frameborder="0" width="100%" height="'+iframe_h+'" src="'+iframe_url+'" allowfullscreen></iframe>';
	    flash.after(iframe_html).remove();
    }
}
if ($('.editor table').length > 0) {
	$('.editor table').addClass('layui-table');
}
if ($('.met_pager').length > 0) {
    if ($('.PreA').length > 0) {
    	$('.PreA').addClass('layui-btn');
    } else {
        $('.PreSpan').addClass('layui-btn layui-btn-disabled');
    }
    if ($('.NextA').length > 0) {
    	$('.NextA').addClass('layui-btn');
    } else {
        $('.NextSpan').addClass('layui-btn layui-btn-disabled');
    };
};
layui.use(['element', 'code', 'flow', 'util', 'carousel'], function() {
    var element = layui.element;
    var flow = layui.flow;
    var util = layui.util;
    var carousel = layui.carousel;
    layui.code({
    	elem: 'pre',
    	title: 'CodeShow',
    	encode: true,
    	about: false
    });
    flow.lazyimg({
    	elem: 'img'
    });
    util.fixbar({
	    bar1: false
	});
	if ($('.comlist').length > 0) {
		carousel.render({
			elem: '.comlist',
			width: '100%',
			height: '280px',
			arrow: 'always',
			interval: 5000
		});
	};
	if ($('.banner').length > 0) {
		carousel.render({
			elem: '.banner',
			width: '100%',
			height: $('.banner').attr('data-h'),
			interval: 5000,
			anim: 'fade'
		});
	};
});