/*
 * M['weburl'] 		//网站网址
 * M['lang']  		//网站语言
 * M['tem']  		//模板目录路径
 * M['classnow']  	//当前栏目ID
 * M['id']  		//当前页面ID
 * M['module']  	//当前页面所属模块
 */
/*这后边的js每打开一个页面之后都要执行*/
if ($('table').length > 0) {
	$('table').addClass('layui-table');
}
/*
 * 下边是layui的模块加载，可以参看layui文档，查看模块的加载和使用方法
 * layui会自动处理重复加载问题，所以不用担心它的js重复加载
 */
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
});