<?php
namespace app\home\controller;

use app\common\controller\BaseController;

class IndexController extends BaseController
{
    public function index() 
    {
    	return $this->fetch();
    }	
}
