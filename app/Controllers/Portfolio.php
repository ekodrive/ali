<?php namespace App\Controllers;


class Portfolio extends BaseController
{


    function __construct() {

    }

    public function index()
    {

        $uri= service('uri');
        $data['segment']=$uri->getPath();
        $data['pageTitle']='Portfolio';
        return view('portfolio_view',$data);
    }
}