<?php namespace App\Controllers;


class About extends BaseController
{


    function __construct() {

    }

    public function index()
    {
        $data['thisLang'] = $this->request->getLocale();
        $uri= service('uri');
        $data['segment']=$uri->getPath();
        $data['pageTitle']='About';
        return view('about_view',$data);
    }
}