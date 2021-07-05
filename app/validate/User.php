<?php
declare (strict_types=1);

namespace app\validate;

use think\Validate;

class User extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名' =>  ['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        'username' => 'require|max:25',
        'password' => 'require|max:120',
        'captcha' => 'require|alpha|len:4',
        'token' => 'token:token'
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名' =>  '错误信息'
     *
     * @var array
     */
    protected $message = [
        'username.require' => '账号不能为空',
        'username.max' => '账号最多不能超过25个字符',
        'password.require' => '密码不能为空',
        'password.max' => '密码最多不能超过25个字符',
        'captcha.require' => '验证码不能为空',
        'captcha.alpha' => '验证码应为纯字母',
        'captcha.len' => '验证码应为四位字母',
    ];
    protected $scene = [
        'index'  =>  ['index']];
}
