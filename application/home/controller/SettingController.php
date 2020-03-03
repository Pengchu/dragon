<?php
namespace app\home\controller;

use app\common\controller\BaseController;

class SettingController extends BaseController
{
    public function index() 
    {
    	return $this->fetch();
    }	

    public function role()
    {
    	return $this->fetch();
    }

    public function region()
    {
    	return $this->fetch();
    }

    public function nest()
    {
    	return $this->fetch();
    }

}
