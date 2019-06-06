<?php
/**
 * author: Lynn
 * since: 2018/3/23 13:05
 */
namespace web\index\controller;

use chromephp\chromephp;


class Index extends BaseController{

    //构造函数
    public function __construct()
    {
        parent::__construct();
    }

    //官网首页
    public function index(){

        return view('index/index');
    }

    public function nav(){

        return view('index/nav');
    }

    



}