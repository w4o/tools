<?php
// +----------------------------------------------------------------------
// | Tools [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://wuzhuti.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Frank <zhwuzhuo@gmail.com>
// +----------------------------------------------------------------------
namespace WebMaster\Controller;
use Think\Controller;
use Common\Controller\CommonController;

/**
 * 'WebMaster'模块 
 */
class IndexController extends CommonController {
    public function index(){
        $this->display();
    }
}