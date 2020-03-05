<?php
namespace app\home\controller;

use app\common\controller\BaseController;

class DeployController extends BaseController
{
	/**
	 * 更新列表
	 * @return [type] [description]
	 */
    public function index() 
    {
    	return $this->fetch();
    }	

    /**
     * 角色委托更新页面
     * @return [type] [description]
     */
    public function role()
    {
    	return $this->fetch();
    }
}
