<?php


namespace app\admin\controller;


class text
{
    public function hello()
    {
        $data = [
            'password' => sha1('123456'),
            'password1' => md5('123456')
        ];
        return view('', ['data' => $data]);
    }

    public function read()
    {

        $data = $this->request->param();
        dump($data);

        return view();
    }


}