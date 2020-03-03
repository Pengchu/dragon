<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 调试模式开关
define("APP_DEBUG", true);

// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');

// 定义网站入口目录
define('WEB_ROOT', __DIR__ . '/');

// 定义CMF 版本号
define('THINKCMF_VERSION', '5.0.24');

// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
