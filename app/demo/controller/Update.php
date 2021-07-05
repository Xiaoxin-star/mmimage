<?php


namespace app\demo\controller;


use app\BaseController;
use think\facade\Filesystem;


class update extends BaseController
{
    public function index()
    {
        return view();
    }
    public function update(){
        if ($this->request->isPost()){
            $files = $this->request->file('file');
            $savename = Filesystem::putFile('topic',$files,'md5');

            dump($savename);

        }

    }
}