<?php


namespace app\admin\controller;

use app\admin\model\System_admin as User;
use app\BaseController;
use think\facade\Session;

class Login extends BaseController
{
    //检测是否成功登录
    public function initialize()
    {
        parent::initialize();
        if (!empty(session('admin'))) {
            $this->success("登录成功", "admin/login", "", 3);
        } else {
            $this->error("未登录", "admin/index/index", "", 3);
        }
    }
}
