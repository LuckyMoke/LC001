<?php
if ($class_list[$class1]['module'] == 9) {
    echo '-->' . '非常抱歉！友情链接栏目无实际用途，本模板废除该模块。';
    die();
}
$_M['url']['static'] = $_M['url']['static'] ? $_M['url']['static'] : $_M['url']['sta'];
class metcompress
{
    public $cache;
    public $tmppath;
    public $navurl;
    public $skin;
    public $prefix;
    public function __construct()
    {
        global $_M, $navurl, $met_skin_user;
        $this->cache   = true;
        $this->navurl  = $navurl;
        $this->skin    = $met_skin_user;
        $this->tmppath = "{$_M[url][site]}templates/{$this->skin}/";
    }
    /**
     * [getui 缓存文件生成]
     * @param  [type] $paths    [description]
     * @param  [type] $filename [description]
     * @return [type]           [description]
     */
    public function getui($paths, $filename)
    {
        if (!is_array($paths)) {
            $paths = explode(',', $paths);
        }
        foreach ($paths as $val) {
            $hz = pathinfo($val, PATHINFO_EXTENSION);
            if ($hz == 'css') {
                $paths_css[] = $val;
            }

            if ($hz == 'js') {
                $paths_js[] = $val;
            }

        }
        $retun['css'] = $this->uicss($paths_css, $filename);
        $retun['js']  = $this->uijs($paths_js, $filename);
        return $retun;
    }
    /**
     * [uicss CSS缓存生成]
     * @param  [type] $paths    [description]
     * @param  [type] $filename [description]
     * @return [type]           [description]
     */
    public function uicss($paths, $filename)
    {
        global $_M;
        return $this->patch($paths, 'css', '', $filename);
    }
    /**
     * [uijs JS缓存生成]
     * @param  [type] $paths    [description]
     * @param  [type] $filename [description]
     * @return [type]           [description]
     */
    public function uijs($paths, $filename)
    {
        global $_M;
        $code[0]['code'] = "var M=document.querySelector('meta[name=\"generator\"]').getAttribute('data-variable'),D=M.split(',');M=new Array();M['weburl']=D[0];M['lang']=D[1];M['classnow']=parseInt(D[2]);M['id']=parseInt(D[3]);M['module']=parseInt(D[4]);M['tem']=D[0]+'templates/'+D[5];";
        return $this->patch($paths, 'js', $code, $filename);
    }
    /**
     * [patch 文件合并]
     * @param  [type] $paths       [description]
     * @param  [type] $suffix      [description]
     * @param  [type] $prependcode [description]
     * @param  [type] $filename    [description]
     * @return [type]              [description]
     */
    public function patch($paths, $suffix, $prependcode, $filename)
    {
        global $_M;
        //文件
        if (!is_array($paths)) {
            $paths = explode(',', $paths);
        }
        $md5key = '';
        $urls   = array();
        foreach ($paths as $val) {
            $val    = str_replace($_M['url']['site'], "", $val);
            $urls[] = $this->navurl . $val;
            $md5key .= $val;
        }
        $filepatch = "{$this->navurl}templates/{$this->skin}/cache/{$filename}.{$suffix}";
        //内容
        $code = $this->get_content($urls, $suffix, $prependcode);
        //生成
        if (!file_exists($filepatch) || !$this->cache) {
            $file = fopen($filepatch, "w");
            foreach ($code as $val) {
                if ($val['code']) {
                    fwrite($file, "/*{$val['name']}*/\n{$val['code']}\n");
                }
            }
            fclose($file);
        }
        return $filepatch;
    }
    //抓取内容
    public function get_content($urls, $suffix, $prependcode)
    {
        $code = array();
        if ($prependcode) {
			//前置内容
            foreach ($prependcode as $val) {
                $code[] = $val;
            }
        }
        foreach ($urls as $val) {
            $codea         = array();
            $codea['name'] = pathinfo($val, PATHINFO_BASENAME);
            $codea['code'] = $this->ps_content($val, $suffix);
            $code[]        = $codea;
            if (strpos($val, 'breakpoints')) {
                $codea['name'] = 'Breakpoints';
                $codea['code'] = 'Breakpoints();';
                $code[]        = $codea;
            }
        }
        return $code;
    }
    /**
     * [ps_content 内容压缩]
     * @param  [type] $val    [description]
     * @param  [type] $suffix [description]
     * @return [type]         [description]
     */
    public function ps_content($val, $suffix)
    {
        $code = file_get_contents($val);
        if ($suffix == 'css') {
            $navurl = $this->navurl == '' ? '../' : '';
            $adurl  = "{$navurl}../../" . dirname($val) . '/../img/';
            $code   = str_replace("///", $adurl, $code);
            $code   = str_replace(array("  ","\t","\n","\r"), '', $code);
        }
        if ($suffix == 'js') {
            $code   = str_replace(array("  ","\t","\n","\r"), '', $code);
        }
        return $code;
    }
}
$metcompress = new metcompress();