<?php
namespace app\common\controller;

use think\Controller;
use think\Request;
use think\Response;
use think\View;
use think\Config;

class BaseController extends Controller
{
    /**
     * 构造函数
     * @param Request $request Request对象
     * @access public
     */
    public function __construct(Request $request = null)
    {
        if (is_null($request)) {
            $request = Request::instance();
        }

        $this->request = $request;

        $this->_initializeView();
        $this->view = View::instance(Config::get('template'), Config::get('view_replace_str'));
    }

    /**
     * 初始化操作
     * @access protected
     */
    protected function _initialize()
    {

    }

    // 初始化视图配置
    protected function _initializeView()
    {
    	$themePath    = config('template.theme_path');
        $defaultTheme  = config('template.default_theme');

        $themePath    = "{$themePath}{$defaultTheme}";

        $root = dn_get_root();

        $domain = dn_get_domain();
        $viewReplaceStr = [
            '__ROOT__'     => $domain.$root,
            '__TMPL__'     => $domain."{$root}/public/{$themePath}",
            '__STATIC__'   => $domain."{$root}/public/static",
            '__WEB_ROOT__' => $domain.$root
        ];

        $viewReplaceStr = array_merge(config('view_replace_str'), $viewReplaceStr);
        config('template.view_base', WEB_ROOT . "/public/{$themePath}/");
        config('view_replace_str', $viewReplaceStr);

    }
}
