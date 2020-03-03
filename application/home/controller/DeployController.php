<?php
namespace app\home\controller;

use app\common\controller\BaseController;

class DeployController extends BaseController
{
    public function index() 
    {
    	return $this->fetch();
    }	
}
