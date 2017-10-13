/*layui基本设置*/
layui.config({
    dir: M['tem'] + '/min/static/layui/',
    base: M['tem'] + '/min/static/layui/lay/modules/'
});
if (typeof ajaxlayui === 'undefined') {
	/*加载pjax文件，只加载一次*/
	var ajaxlayui = true;
	console.log('%cblog.luckymoke.cn\n', 'font-size:30pt;color:#1dacdb');
	console.log('%c小小酥的博客 版权所有 翻版必究', 'font-size:18pt');
	$('body').append('<script src="https://hm.baidu.com/hm.js?d3e1e1871469c446ca9ef08c5fadd44d"></script>');
	layui.extend({
		pjax: 'pjax'
	});
	layui.use('pjax', function() {
		var pjax = layui.pjax;
	    pjax.on('change', function(isInitialLoad) {
			if (isInitialLoad === false) {
				/*兼容百度统计*/
				if (typeof _hmt !== 'undefined')
	      			_hmt.push(['_trackPageview', location.pathname + location.search]);
	      	};
		});
		pjax.init('mousedown');
	});
}