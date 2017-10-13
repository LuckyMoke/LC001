/*layui基本设置*/
layui.config({
    dir: M['tem'] + '/min/static/layui/',
    base: M['tem'] + '/min/static/layui/lay/modules/'
});
if (typeof ajaxlayui === 'undefined') {
	/*加载pjax文件，这里的语句只加载一次，不会每个页面都会加载*/
	var ajaxlayui = true;
	/*百度统计代码
	$('body').append('<script src="https://hm.baidu.com/hm.js?d3e1e1871469c446ca9ef08c5"></script>');
	*/
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