<?php


namespace app\demo\controller;


use app\BaseController;
use think\facade\Filesystem;
use app\demo\model\Demo_upload as Demo;

class Upload extends BaseController
{
    public function index()
    {
        return view();
    }

    //上传
    public function upload()
    {
        $savename = null;
        if ($this->request->isPost()) {
            $files = $this->request->file('file');
            $imgname = $files->getOriginalName();
            $savename = Filesystem::disk('public')->putFile('\topic', $files, 'md5');
            $image = Demo::where('image_name', '456456')->find();
            Demo::create([
                //                文件本地地址
                'image_url' => $savename,
                //                获取文件名
                'image_name' => $imgname,
                //                上传状态
                'status' => 200,
                //                上传ip
                'ip' => GetIP()
            ]);
            $done = [
                'status' => 200, 'msg' => '成功', 'path' => $savename
            ];
            return json($done, 200);
        } else {
            $done = [
                'status' => 0, 'msg' => '失败', 'path' => $savename
            ];
            return json($done, 0);
        }
    }
}
