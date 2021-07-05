<?php

declare(strict_types=1);

namespace app\admin\controller;

use app\admin\model\System_admin as User;
use app\BaseController;
use think\facade\Session;



class Index extends BaseController
{
    //登录页面
    public function index()
    {
        //判断是否登录成功
        if (!empty(session('admin'))) {
            dump("ceshi");
            $this->success("登录成功", "index/login", "", 3);
        }
        //判断是否进行了登录
        if ($this->request->isPost()) {
            $data = request()->param();
            $user = User::find(1);
            $password = $user->password;
            $username = $user->username;
            $captcha = $data['captcha'];
            $data['password'] = md5($data['password']);
            $token = $data['token'];
            //验证格式是否正确
            $data = [
                'username' => $username,
                'password' => $password,
                'captcha' => $captcha,
                'token' => $token,
            ];
            //验证账号密码
            if ($data['username'] == $username && $data['password'] == $password && captcha_check($captcha) && $token) {
                session('admin', $username);
                $this->success('登陆成功', 'admin/index/login');
            } else {

                $this->success('登陆失败', 'index');
            }
        }
        return view();
    }

    //登錄主頁
    public function login()
    {
        //查询用户名
        $user = User::find(1);
        //输出到模板
        return view('', ['user' => $user]);
    }

    //退出
    public function out()
    {
        if (Session::has('admin')) {
            Session::delete('admin');
            $this->success("退出登录", "index");
        }
    }
//    首页
    public function page()
    {
        return view("index/page/page");
    }
//基本资料
    public function setting()
    {
        return view("index/page/user-setting");
    }
    public function password()
    {
        return view("index/page/user-password");
    }

}
