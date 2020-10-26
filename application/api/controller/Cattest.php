<?php
namespace app\api\controller;
use think\Controller;

class Cattest extends controller
{
    public function index()
    {
        return 12312;
    }

    public function update($id = 0)
    {
        halt(input('put.'));
    }

    /**
     * post 新增
     * @return mixed
     */
    public function save()
    {
        $data = input('post.');
        return $data;
    }

}

