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

    //文章列表
    public function articlelist(){
        return view('index/list');
    }

    //文章详情
    public function articledetail(){
        return view('index/detail');
    }

    public function nav(){

        return view('index/nav');
    }

    



}